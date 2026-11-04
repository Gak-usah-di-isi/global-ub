<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PartnershipMapRequest;
use App\Models\Partnership;
use App\Models\PartnershipMap;
use App\Models\Program;

class AdminPartnershipMapController extends Controller
{
    public const DEFAULT_ORIGIN_NAME = 'Universitas Brawijaya (Malang)';
    public const DEFAULT_ORIGIN_LATITUDE = -7.9526000;
    public const DEFAULT_ORIGIN_LONGITUDE = 112.6144000;

    public function index()
    {
        $partnershipMaps = PartnershipMap::with(['partnership', 'program'])
            ->latest()
            ->paginate(15);

        return view('admin.partnership-maps.index', compact('partnershipMaps'));
    }

    public function create()
    {
        $partnerships = Partnership::orderBy('name')->get(['id', 'name']);
        $programs = Program::orderBy('title')->get(['id', 'title', 'partnership_id']);

        $defaultOrigin = [
            'name' => self::DEFAULT_ORIGIN_NAME,
            'latitude' => self::DEFAULT_ORIGIN_LATITUDE,
            'longitude' => self::DEFAULT_ORIGIN_LONGITUDE,
        ];

        return view('admin.partnership-maps.create', compact('partnerships', 'programs', 'defaultOrigin'));
    }

    public function store(PartnershipMapRequest $request)
    {
        $data = $request->validated();

        if (empty($data['origin_name'])) {
            $data['origin_name'] = self::DEFAULT_ORIGIN_NAME;
        }
        if (!isset($data['origin_latitude']) || $data['origin_latitude'] === null || $data['origin_latitude'] === '') {
            $data['origin_latitude'] = self::DEFAULT_ORIGIN_LATITUDE;
        }
        if (!isset($data['origin_longitude']) || $data['origin_longitude'] === null || $data['origin_longitude'] === '') {
            $data['origin_longitude'] = self::DEFAULT_ORIGIN_LONGITUDE;
        }

        PartnershipMap::create($data);

        return redirect()->route('partnership-maps.index')
            ->with('success', 'Titik Partnership Map berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $partnershipMap = PartnershipMap::findOrFail($id);
        $partnerships = Partnership::orderBy('name')->get(['id', 'name']);
        $programs = Program::orderBy('title')->get(['id', 'title', 'partnership_id']);

        return view('admin.partnership-maps.edit', compact('partnershipMap', 'partnerships', 'programs'));
    }

    public function update(PartnershipMapRequest $request, $id)
    {
        $partnershipMap = PartnershipMap::findOrFail($id);
        $data = $request->validated();

        if (empty($data['origin_name'])) {
            $data['origin_name'] = self::DEFAULT_ORIGIN_NAME;
        }
        if (!isset($data['origin_latitude']) || $data['origin_latitude'] === null || $data['origin_latitude'] === '') {
            $data['origin_latitude'] = self::DEFAULT_ORIGIN_LATITUDE;
        }
        if (!isset($data['origin_longitude']) || $data['origin_longitude'] === null || $data['origin_longitude'] === '') {
            $data['origin_longitude'] = self::DEFAULT_ORIGIN_LONGITUDE;
        }

        $partnershipMap->update($data);

        return redirect()->route('partnership-maps.index')
            ->with('success', 'Titik Partnership Map berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $partnershipMap = PartnershipMap::findOrFail($id);
        $partnershipMap->delete();

        return redirect()->route('partnership-maps.index')
            ->with('success', 'Titik Partnership Map berhasil dihapus.');
    }
}
