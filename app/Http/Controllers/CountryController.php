<?php

namespace App\Http\Controllers;

use App\Models\PartnershipMap;

class CountryController extends Controller
{
    public const UB_ORIGIN_NAME = 'Universitas Brawijaya (UB)';
    public const UB_LATITUDE = -7.9526000;
    public const UB_LONGITUDE = 112.6144000;

    public function index()
    {
        $partnershipMaps = PartnershipMap::with(['partnership', 'program'])
            ->latest()
            ->get();

        // Prepare markers and lines for jsVectorMap
        $markers = [];
        $lines = [];

        // 1. Origin Marker: Universitas Brawijaya (Malang)
        $originName = self::UB_ORIGIN_NAME;
        $markers[] = [
            'name' => $originName,
            'coords' => [self::UB_LATITUDE, self::UB_LONGITUDE],
            'partnerName' => 'Universitas Brawijaya (Origin Hub)',
            'location' => 'Malang, Jawa Timur, Indonesia',
            'role' => 'Main Campus & Cooperation Hub',
            'status' => 'Origin',
            'isOrigin' => true,
            'programTitle' => null,
            'programUrl' => null,
            'style' => [
                'initial' => [
                    'fill' => '#F59E0B',
                    'stroke' => '#FEF3C7',
                    'strokeWidth' => 6,
                    'r' => 8,
                ],
                'hover' => [
                    'fill' => '#D97706',
                    'stroke' => '#FDE68A',
                    'strokeWidth' => 7,
                    'cursor' => 'default',
                ],
            ],
        ];

        // 2. Destination Markers & Lines
        foreach ($partnershipMaps as $index => $item) {
            $partnerName = $item->partnership->name ?? $item->destination_name;
            $markerKey = $partnerName . ' (' . ($item->city_name ? $item->city_name . ', ' : '') . $item->country_name . ') #' . $item->id;
            $effectiveProg = $item->effective_program;

            $isHighlighted = in_array($item->status, ['Highlighted', 'Strategic']);

            $markers[] = [
                'name' => $markerKey,
                'coords' => [(float) $item->latitude, (float) $item->longitude],
                'partnerName' => $partnerName,
                'destinationName' => $item->destination_name,
                'location' => ($item->city_name ? $item->city_name . ', ' : '') . $item->country_name,
                'country' => $item->country_name,
                'city' => $item->city_name,
                'role' => $item->role ?? 'Cooperation Partner',
                'status' => $item->status,
                'isOrigin' => false,
                'programTitle' => $effectiveProg?->title,
                'programUrl' => $effectiveProg ? route('program.show', $effectiveProg->slug) : null,
                'style' => [
                    'initial' => [
                        'fill' => $isHighlighted ? '#EF4444' : '#3B82F6',
                        'stroke' => $isHighlighted ? '#FEE2E2' : '#DBEAFE',
                        'strokeWidth' => 5,
                        'r' => 6,
                    ],
                    'hover' => [
                        'fill' => $isHighlighted ? '#DC2626' : '#2563EB',
                        'stroke' => $isHighlighted ? '#FECACA' : '#BFDBFE',
                        'strokeWidth' => 6,
                        'cursor' => 'pointer',
                    ],
                ],
            ];

            // Curved line connecting UB Origin to Destination
            $lines[] = [
                'from' => $originName,
                'to' => $markerKey,
            ];
        }

        return view('landing.country', compact('partnershipMaps', 'markers', 'lines'));
    }
}
