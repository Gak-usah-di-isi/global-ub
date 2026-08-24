<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DownloadCenter;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

class DownloadController extends Controller
{
    public function index()
    {
        $downloads = DownloadCenter::with('icon')->latest()->paginate(6);
        return view('landing.download-center', compact('downloads'));
    }

    public function download(DownloadCenter $downloadCenter)
    {
        Cache::increment('download_center:' . $downloadCenter->id);
        return response()->download(storage_path('app/public/' . $downloadCenter->file));
    }

    public function downloadAll()
    {
        $downloads = DownloadCenter::all();

        if ($downloads->isEmpty()) {
            return back()->with('error', 'No files available for download');
        }

        $zipFileName = 'GlobalUB_Media_Kit_' . now()->format('Y-m-d_His') . '.zip';
        $zipFilePath = storage_path('app/temp/' . $zipFileName);

        if (!file_exists(storage_path('app/temp'))) {
            mkdir(storage_path('app/temp'), 0755, true);
        }

        $zip = new ZipArchive();

        if ($zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
            foreach ($downloads as $download) {
                $filePath = storage_path('app/public/' . $download->file);

                if (file_exists($filePath)) {
                    $fileName = basename($download->file);
                    $zip->addFile($filePath, $fileName);
                }
            }

            $zip->close();

            Cache::increment('download_center:complete_media_kit');

            return response()->download($zipFilePath)->deleteFileAfterSend(true);
        }

        return back()->with('error', 'Failed to create zip file');
    }
}
