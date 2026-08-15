<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Timeline;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $timelines = Timeline::orderBy('order')->orderBy('year')->paginate(10);
        return view('admin.timelines.index', compact('timelines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.timelines.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'year' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'content' => 'required|string',
            'order' => 'nullable|integer',
        ]);

        Timeline::create($request->all());

        return redirect()->route('admin.timelines.index')
            ->with('success', 'Timeline sejarah berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Timeline $timeline)
    {
        return view('admin.timelines.show', compact('timeline'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Timeline $timeline)
    {
        return view('admin.timelines.edit', compact('timeline'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Timeline $timeline)
    {
        $request->validate([
            'year' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'content' => 'required|string',
            'order' => 'nullable|integer',
        ]);

        $timeline->update($request->all());

        return redirect()->route('admin.timelines.index')
            ->with('success', 'Timeline sejarah berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Timeline $timeline)
    {
        $timeline->delete();

        return redirect()->route('admin.timelines.index')
            ->with('success', 'Timeline sejarah berhasil dihapus.');
    }
}
