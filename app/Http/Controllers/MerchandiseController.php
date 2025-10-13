<?php

namespace App\Http\Controllers;

use App\Models\Merchandise;
use Illuminate\Http\Request;

class MerchandiseController extends Controller
{
    public function index(Request $request)
    {
        $query = Merchandise::query()->where('is_active', true);

        $sort = $request->get('sort', 'newest');
        switch ($sort) {
            case 'price_low':
                $query->orderBy('price', 'asc');
                break;
            case 'price_high':
                $query->orderBy('price', 'desc');
                break;
            default:
                $query->orderBy('created_at', 'desc');
        }

        $merchandise = $query->paginate(12);
        $total = $merchandise->total();

        return view('landing.merchandise', compact('merchandise', 'total', 'sort'));
    }
}
