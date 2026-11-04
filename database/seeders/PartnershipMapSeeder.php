<?php

namespace Database\Seeders;

use App\Models\Partnership;
use App\Models\PartnershipMap;
use App\Models\Program;
use Illuminate\Database\Seeder;

class PartnershipMapSeeder extends Seeder
{
    public function run(): void
    {
        $peking = Partnership::where('name', 'like', '%Peking%')->first();
        $samar = Partnership::where('name', 'like', '%Samar%')->first();
        $usim = Partnership::where('name', 'like', '%Sains Islam Malaysia%')->first();
        $umk = Partnership::where('name', 'like', '%Kelantan%')->first();
        $songkla = Partnership::where('name', 'like', '%Songkla%')->first();
        $hokkaido = Partnership::where('name', 'like', '%Hokkaido%')->first();
        $semmelweis = Partnership::where('name', 'like', '%Semmelweis%')->first();
        $tohoku = Partnership::where('name', 'like', '%Tohoku%')->first();

        $program = Program::first();

        // If program exists and has no partnership_id, associate with Tohoku or Peking
        if ($program && !$program->partnership_id && $tohoku) {
            $program->update(['partnership_id' => $tohoku->id]);
        }

        $seeds = [
            [
                'partner' => $peking,
                'destination_name' => 'Peking University Haidian Campus',
                'country_name' => 'China',
                'city_name' => 'Beijing',
                'latitude' => 39.9899,
                'longitude' => 116.3108,
                'status' => 'Highlighted',
                'role' => 'Strategic Cooperation',
                'program_id' => null,
            ],
            [
                'partner' => $tohoku,
                'destination_name' => 'Tohoku University Katahira Campus',
                'country_name' => 'Japan',
                'city_name' => 'Sendai',
                'latitude' => 38.2555,
                'longitude' => 140.8739,
                'status' => 'Highlighted',
                'role' => 'Disaster & Resilience Research Link',
                'program_id' => $program?->id,
            ],
            [
                'partner' => $hokkaido,
                'destination_name' => 'Hokkaido University',
                'country_name' => 'Japan',
                'city_name' => 'Sapporo',
                'latitude' => 43.0706,
                'longitude' => 141.3444,
                'status' => 'Partner',
                'role' => 'Academic Exchange & Joint Study',
                'program_id' => null,
            ],
            [
                'partner' => $semmelweis,
                'destination_name' => 'Semmelweis University Faculty of Medicine',
                'country_name' => 'Hungary',
                'city_name' => 'Budapest',
                'latitude' => 47.4979,
                'longitude' => 19.0402,
                'status' => 'Partner',
                'role' => 'Medical & Health Sciences Exchange',
                'program_id' => null,
            ],
            [
                'partner' => $songkla,
                'destination_name' => 'Prince of Songkla University',
                'country_name' => 'Thailand',
                'city_name' => 'Hat Yai',
                'latitude' => 7.0084,
                'longitude' => 100.4996,
                'status' => 'Partner',
                'role' => 'Regional Academic Solidarity',
                'program_id' => null,
            ],
            [
                'partner' => $usim,
                'destination_name' => 'Universiti Sains Islam Malaysia Main Campus',
                'country_name' => 'Malaysia',
                'city_name' => 'Nilai',
                'latitude' => 2.8129,
                'longitude' => 101.7820,
                'status' => 'Partner',
                'role' => 'Islamic Studies & Halal Research Link',
                'program_id' => null,
            ],
            [
                'partner' => $umk,
                'destination_name' => 'Universiti Malaysia Kelantan Bachok Campus',
                'country_name' => 'Malaysia',
                'city_name' => 'Bachok',
                'latitude' => 6.0125,
                'longitude' => 102.4042,
                'status' => 'Partner',
                'role' => 'Heritage & Entrepreneurship Cooperation',
                'program_id' => null,
            ],
            [
                'partner' => $samar,
                'destination_name' => 'Northwest Samar State University Main Campus',
                'country_name' => 'Philippines',
                'city_name' => 'Calbayog',
                'latitude' => 12.0673,
                'longitude' => 124.5954,
                'status' => 'Partner',
                'role' => 'ASEAN Academic Partnership',
                'program_id' => null,
            ],
        ];

        foreach ($seeds as $item) {
            if (!$item['partner']) {
                continue;
            }

            PartnershipMap::firstOrCreate(
                [
                    'partnership_id' => $item['partner']->id,
                    'destination_name' => $item['destination_name'],
                ],
                [
                    'program_id' => $item['program_id'],
                    'country_name' => $item['country_name'],
                    'city_name' => $item['city_name'],
                    'origin_name' => 'Universitas Brawijaya (Malang)',
                    'origin_latitude' => -7.9526000,
                    'origin_longitude' => 112.6144000,
                    'latitude' => $item['latitude'],
                    'longitude' => $item['longitude'],
                    'status' => $item['status'],
                    'role' => $item['role'],
                ]
            );
        }
    }
}
