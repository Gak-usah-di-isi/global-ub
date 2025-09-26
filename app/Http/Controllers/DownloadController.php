<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DownloadCenter;
use Illuminate\Support\Facades\Redis;

class DownloadController extends Controller
{
    public function index()
    {
        $downloads = DownloadCenter::with('icon')->latest()->paginate(6);
        return view('landing.download-center', compact('downloads'));
    }

    public function download(DownloadCenter $downloadCenter)
    {
        Redis::incr('download_center:' . $downloadCenter->id);
        return response()->download(storage_path('app/public/' . $downloadCenter->file));
    }
}
