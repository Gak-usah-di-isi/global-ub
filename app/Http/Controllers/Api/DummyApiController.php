<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class DummyApiController extends Controller
{
    public function index()
    {
        return response()->json([
            'status' => 'success',
            'message' => 'API dummy berjalan dengan baik',
            'data' => [
                [
                    'id' => 1,
                    'name' => 'Universitas Brawijaya',
                    'location' => 'Malang, Jawa Timur',
                    'founded' => 1963,
                    'faculty_count' => 16,
                    'student_count' => 64000,
                    'ranking' => 'Top 10 Indonesia',
                    'status' => 'active',
                ],
                [
                    'id' => 2,
                    'name' => 'Fakultas Ilmu Komputer',
                    'location' => 'Kampus UB, Malang',
                    'founded' => 2001,
                    'faculty_count' => 4,
                    'student_count' => 3200,
                    'ranking' => 'Top 5 FILKOM Indonesia',
                    'status' => 'active',
                ],
                [
                    'id' => 3,
                    'name' => 'Fakultas Ekonomi dan Bisnis',
                    'location' => 'Kampus UB, Malang',
                    'founded' => 1961,
                    'faculty_count' => 5,
                    'student_count' => 8500,
                    'ranking' => 'Akreditasi A',
                    'status' => 'active',
                ],
                [
                    'id' => 4,
                    'name' => 'Fakultas Teknik',
                    'location' => 'Kampus UB, Malang',
                    'founded' => 1963,
                    'faculty_count' => 6,
                    'student_count' => 7200,
                    'ranking' => 'Akreditasi A',
                    'status' => 'active',
                ],
                [
                    'id' => 5,
                    'name' => 'Fakultas Kedokteran',
                    'location' => 'Kampus UB, Malang',
                    'founded' => 1963,
                    'faculty_count' => 3,
                    'student_count' => 2800,
                    'ranking' => 'Akreditasi A',
                    'status' => 'active',
                ],
            ],
            'meta' => [
                'total' => 5,
                'fetched_at' => now()->toIso8601String(),
                'source' => 'dummy — no database',
            ],
        ]);
    }
}
