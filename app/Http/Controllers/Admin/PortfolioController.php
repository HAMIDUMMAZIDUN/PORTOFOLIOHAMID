<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::latest()->paginate(10);
        return view('admin.portfolios.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|in:Website,Desain,Video,Lainnya',
            'media_type' => 'required|in:image,video,link',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'video_url' => 'nullable|url|max:255',
            'video_file' => 'nullable|mimes:mp4,mov,ogg,qt|max:20480', // Max 20MB
            'link' => 'nullable|url|max:255',
            'description' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('portfolios', 'public');
            $validated['image'] = $path;
        }

        if ($request->hasFile('video_file')) {
            $path = $request->file('video_file')->store('portfolios/videos', 'public');
            $validated['video_file'] = $path;
        }

        Portfolio::create($validated);

        return redirect()->route('admin.portfolios.index')
            ->with('success', 'Portofolio berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        return view('admin.portfolios.show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolios.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|in:Website,Desain,Video,Lainnya',
            'media_type' => 'required|in:image,video,link',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'video_url' => 'nullable|url|max:255',
            'video_file' => 'nullable|mimes:mp4,mov,ogg,qt|max:20480',
            'link' => 'nullable|url|max:255',
            'description' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($portfolio->image) {
                Storage::disk('public')->delete($portfolio->image);
            }
            $path = $request->file('image')->store('portfolios', 'public');
            $validated['image'] = $path;
        }

        if ($request->hasFile('video_file')) {
            // Delete old video file
            if ($portfolio->video_file) {
                Storage::disk('public')->delete($portfolio->video_file);
            }
            $path = $request->file('video_file')->store('portfolios/videos', 'public');
            $validated['video_file'] = $path;
        }

        $portfolio->update($validated);

        return redirect()->route('admin.portfolios.index')
            ->with('success', 'Portofolio berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->image) {
            Storage::disk('public')->delete($portfolio->image);
        }

        if ($portfolio->video_file) {
            Storage::disk('public')->delete($portfolio->video_file);
        }
        
        $portfolio->delete();

        return redirect()->route('admin.portfolios.index')
            ->with('success', 'Portofolio berhasil dihapus.');
    }
}
