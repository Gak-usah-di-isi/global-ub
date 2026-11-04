<?php

namespace Database\Seeders;

use App\Models\Sdg;
use Illuminate\Database\Seeder;

class SdgSeeder extends Seeder
{
    public function run(): void
    {
        $defaultSdgs = [
            1 => ['order_number' => 1, 'name' => 'No Poverty', 'icon' => 'SDG-1.svg', 'color' => '#E5243B', 'description' => 'End poverty in all its forms everywhere.'],
            2 => ['order_number' => 2, 'name' => 'Zero Hunger', 'icon' => 'SDG-2.svg', 'color' => '#DDA63A', 'description' => 'End hunger, achieve food security and improved nutrition and promote sustainable agriculture.'],
            3 => ['order_number' => 3, 'name' => 'Good Health and Well-being', 'icon' => 'SDG-3.svg', 'color' => '#4C9F38', 'description' => 'Ensure healthy lives and promote well-being for all at all ages.'],
            4 => ['order_number' => 4, 'name' => 'Quality Education', 'icon' => 'SDG-4.svg', 'color' => '#C5192D', 'description' => 'Ensure inclusive and equitable quality education and promote lifelong learning opportunities for all.'],
            5 => ['order_number' => 5, 'name' => 'Gender Equality', 'icon' => 'SDG-5.svg', 'color' => '#FF3A21', 'description' => 'Achieve gender equality and empower all women and girls.'],
            6 => ['order_number' => 6, 'name' => 'Clean Water and Sanitation', 'icon' => 'SDG-6.svg', 'color' => '#26BDE2', 'description' => 'Ensure availability and sustainable management of water and sanitation for all.'],
            7 => ['order_number' => 7, 'name' => 'Affordable and Clean Energy', 'icon' => 'SDG-7.svg', 'color' => '#FCC30B', 'description' => 'Ensure access to affordable, reliable, sustainable and modern energy for all.'],
            8 => ['order_number' => 8, 'name' => 'Decent Work and Economic Growth', 'icon' => 'SDG-8.svg', 'color' => '#A21942', 'description' => 'Promote sustained, inclusive and sustainable economic growth, full and productive employment and decent work for all.'],
            9 => ['order_number' => 9, 'name' => 'Industry, Innovation and Infrastructure', 'icon' => 'SDG-9.svg', 'color' => '#FD6925', 'description' => 'Build resilient infrastructure, promote inclusive and sustainable industrialization and foster innovation.'],
            10 => ['order_number' => 10, 'name' => 'Reduced Inequalities', 'icon' => 'SDG-10.svg', 'color' => '#DD1367', 'description' => 'Reduce inequality within and among countries.'],
            11 => ['order_number' => 11, 'name' => 'Sustainable Cities and Communities', 'icon' => 'SDG-11.svg', 'color' => '#FD9D24', 'description' => 'Make cities and human settlements inclusive, safe, resilient and sustainable.'],
            12 => ['order_number' => 12, 'name' => 'Responsible Consumption and Production', 'icon' => 'SDG-12.svg', 'color' => '#BF8B2E', 'description' => 'Ensure sustainable consumption and production patterns.'],
            13 => ['order_number' => 13, 'name' => 'Climate Action', 'icon' => 'SDG-13.svg', 'color' => '#3F7E44', 'description' => 'Take urgent action to combat climate change and its impacts.'],
            14 => ['order_number' => 14, 'name' => 'Life Below Water', 'icon' => 'SDG-14.svg', 'color' => '#0A97D9', 'description' => 'Conserve and sustainably use the oceans, seas and marine resources for sustainable development.'],
            15 => ['order_number' => 15, 'name' => 'Life on Land', 'icon' => 'SDG-15.svg', 'color' => '#56C02B', 'description' => 'Protect, restore and promote sustainable use of terrestrial ecosystems, sustainably manage forests, combat desertification, and halt and reverse land degradation and halt biodiversity loss.'],
            16 => ['order_number' => 16, 'name' => 'Peace, Justice and Strong Institutions', 'icon' => 'SDG-16.svg', 'color' => '#00689D', 'description' => 'Promote peaceful and inclusive societies for sustainable development, provide access to justice for all and build effective, accountable and inclusive institutions at all levels.'],
            17 => ['order_number' => 17, 'name' => 'Partnerships for the Goals', 'icon' => 'SDG-17.svg', 'color' => '#19486A', 'description' => 'Strengthen the means of implementation and revitalize the Global Partnership for Sustainable Development.'],
        ];

        foreach ($defaultSdgs as $id => $data) {
            Sdg::updateOrCreate(
                ['id' => $id],
                [
                    'order_number' => $data['order_number'],
                    'name' => $data['name'],
                    'icon' => $data['icon'],
                    'color' => $data['color'],
                    'description' => $data['description'],
                ]
            );
        }
    }
}
