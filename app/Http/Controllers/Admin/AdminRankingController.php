<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RankingRequest;
use App\Models\Ranking;
use App\Models\Icon;

class AdminRankingController extends Controller
{
    public function index()
    {
        $rankings = Ranking::with('icon')->orderBy('order', 'asc')->get();
        return view('admin.rankings.index', compact('rankings'));
    }

    public function create()
    {
        $icons = Icon::all();
        return view('admin.rankings.create', compact('icons'));
    }

    public function store(RankingRequest $request)
    {
        $data = $request->validated();

        // Set default values
        $data['order'] = $data['order'] ?? 0;
        $data['is_active'] = $request->has('is_active') ? true : false;

        Ranking::create($data);

        return redirect()->route('rankings.index')->with('success', 'Ranking created successfully.');
    }

    public function edit($id)
    {
        $ranking = Ranking::findOrFail($id);
        $icons = Icon::all();
        return view('admin.rankings.edit', compact('ranking', 'icons'));
    }

    public function update(RankingRequest $request, $id)
    {
        $ranking = Ranking::findOrFail($id);
        $data = $request->validated();

        // Update is_active
        $data['is_active'] = $request->has('is_active') ? true : false;

        $ranking->update($data);

        return redirect()->route('rankings.index')->with('success', 'Ranking updated successfully.');
    }

    public function destroy($id)
    {
        $ranking = Ranking::findOrFail($id);
        $ranking->delete();

        return redirect()->route('rankings.index')->with('success', 'Ranking deleted successfully.');
    }
}
