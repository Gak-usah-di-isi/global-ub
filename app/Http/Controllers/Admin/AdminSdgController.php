<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SdgRequest;
use App\Models\Sdg;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminSdgController extends Controller
{
    public function index()
    {
        $sdgs = Sdg::orderBy('order_number')
            ->orderBy('id')
            ->paginate(20);

        return view('admin.sdgs.index', compact('sdgs'));
    }

    public function create()
    {
        // Suggest next order number
        $nextOrder = (Sdg::max('order_number') ?? 0) + 1;

        // Get list of preset icons from public/images/sgds
        $presetIcons = $this->getAvailablePresetIcons();

        return view('admin.sdgs.create', compact('nextOrder', 'presetIcons'));
    }

    public function store(SdgRequest $request)
    {
        $data = $request->only(['order_number', 'name', 'color', 'description']);

        if ($request->hasFile('icon_file')) {
            $file = $request->file('icon_file');
            $filename = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('sdgs', $filename, 'public');
            $data['icon'] = $path;
        } elseif ($request->filled('preset_icon')) {
            $data['icon'] = $request->preset_icon;
        } else {
            $data['icon'] = 'SDG-1.svg';
        }

        Sdg::create($data);

        return redirect()->route('sdgs.index')
            ->with('success', 'Master SDG berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $sdg = Sdg::findOrFail($id);
        $presetIcons = $this->getAvailablePresetIcons();

        return view('admin.sdgs.edit', compact('sdg', 'presetIcons'));
    }

    public function update(SdgRequest $request, $id)
    {
        $sdg = Sdg::findOrFail($id);
        $data = $request->only(['order_number', 'name', 'color', 'description']);

        if ($request->hasFile('icon_file')) {
            // Delete previous custom uploaded file if exists in storage
            if ($sdg->icon && Storage::disk('public')->exists($sdg->icon)) {
                Storage::disk('public')->delete($sdg->icon);
            }

            $file = $request->file('icon_file');
            $filename = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('sdgs', $filename, 'public');
            $data['icon'] = $path;
        } elseif ($request->filled('preset_icon')) {
            $data['icon'] = $request->preset_icon;
        }

        $sdg->update($data);

        return redirect()->route('sdgs.index')
            ->with('success', 'Master SDG berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $sdg = Sdg::findOrFail($id);
        $sdg->delete();

        return redirect()->route('sdgs.index')
            ->with('success', 'Master SDG berhasil dihapus.');
    }

    protected function getAvailablePresetIcons(): array
    {
        $iconsPath = public_path('images/sgds');
        $icons = [];

        if (File::isDirectory($iconsPath)) {
            $files = File::files($iconsPath);
            foreach ($files as $file) {
                if (in_array(strtolower($file->getExtension()), ['svg', 'png', 'jpg'])) {
                    $icons[] = $file->getFilename();
                }
            }
            // Sort naturally (SDG-1, SDG-2, ..., SDG-17)
            natsort($icons);
        }

        return array_values($icons);
    }
}
