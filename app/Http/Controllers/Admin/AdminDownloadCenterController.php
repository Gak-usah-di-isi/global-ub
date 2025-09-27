<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DownloadCenter;
use App\Http\Requests\DownloadCenterRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Icon;

class AdminDownloadCenterController extends Controller
{
    public function index()
    {
        $downloadCenters = DownloadCenter::latest()->paginate(10);

        return view('admin.download-centers.index', compact('downloadCenters'));
    }

    public function create()
    {
        $icons = Icon::all();
        return view('admin.download-centers.create', compact('icons'));
    }

    public function store(DownloadCenterRequest $request)
    {
        $data = $request->only(['title', 'description', 'icon_id']);

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('download-centers', $filename, 'public');
            $data['file'] = $filePath;
        }

        DownloadCenter::create($data);

        return redirect()->route('download-center.index')->with('success', 'Download center successfully created.');
    }

    public function edit($slug)
    {
        $icons = Icon::all();
        $downloadCenter = DownloadCenter::where('slug', $slug)->firstOrFail();
        return view('admin.download-centers.edit', compact('downloadCenter', 'icons'));
    }

    public function update(DownloadCenterRequest $request, $slug)
    {
        $downloadCenter = DownloadCenter::where('slug', $slug)->firstOrFail();
        $data = $request->only(['title', 'description', 'icon_id']);

        if ($request->hasFile('file')) {
            if ($downloadCenter->file && Storage::disk('public')->exists($downloadCenter->file)) {
                Storage::disk('public')->delete($downloadCenter->file);
            }

            $file = $request->file('file');
            $filename = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('download-centers', $filename, 'public');
            $data['file'] = $filePath;
        }

        $downloadCenter->update($data);

        return redirect()->route('download-center.index')->with('success', 'Download center successfully updated.');
    }

    public function destroy($slug)
    {
        $downloadCenter = DownloadCenter::where('slug', $slug)->firstOrFail();

        $downloadCenter->delete();

        return redirect()->route('download-center.index')->with('success', 'Download center successfully deleted.');
    }
}
