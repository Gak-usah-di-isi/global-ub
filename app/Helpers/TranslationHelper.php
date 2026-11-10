<?php

namespace App\Helpers;

use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Support\Collection;

class TranslationHelper
{
    protected static array $cache = [];

    public static function translateText(string $text, string $targetLang = 'id'): string
    {
        if (empty(trim($text)) || $targetLang === 'en') {
            return $text;
        }

        $cacheKey = md5($text . $targetLang);
        if (isset(static::$cache[$cacheKey])) {
            return static::$cache[$cacheKey];
        }

        try {
            $tr = new GoogleTranslate($targetLang);
            $tr->setSource('en');

            if ($text !== strip_tags($text)) {
                $result = static::translateHtml($text, $tr);
            } else {
                $result = $tr->translate($text);
            }

            static::$cache[$cacheKey] = $result ?? $text;
            return static::$cache[$cacheKey];
        } catch (\Exception $e) {
            return $text;
        }
    }

    protected static function translateHtml(string $html, GoogleTranslate $tr): string
    {
        // Replace HTML tags with placeholders, translate text nodes, restore tags
        $placeholders = [];
        $index = 0;

        $withPlaceholders = preg_replace_callback('/<[^>]+>/', function ($matches) use (&$placeholders, &$index) {
            $key = "##TAG{$index}##";
            $placeholders[$key] = $matches[0];
            $index++;
            return $key;
        }, $html);

        $translated = $tr->translate($withPlaceholders) ?? $withPlaceholders;

        foreach ($placeholders as $key => $tag) {
            $translated = str_replace($key, $tag, $translated);
        }

        return $translated;
    }

    public static function translateModel(object $model, array $fields): object
    {
        if (app()->getLocale() === 'en') {
            return $model;
        }

        foreach ($fields as $field) {
            if (!empty($model->$field)) {
                $model->$field = static::translateText((string) $model->$field);
            }
        }

        return $model;
    }

    public static function translateCollection(Collection $collection, array $fields): Collection
    {
        if (app()->getLocale() === 'en') {
            return $collection;
        }

        return $collection->map(function ($item) use ($fields) {
            return static::translateModel($item, $fields);
        });
    }
}
