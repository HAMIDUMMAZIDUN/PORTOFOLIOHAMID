<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PricingPackage;
use Illuminate\Http\Request;

class PricingPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = PricingPackage::latest()->paginate(10);
        return view('admin.packages.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|in:Profil & Landing Page,Toko Online,Custom,Desain & Sosmed',
            'price' => 'required|string|max:255',
            'renewal_price' => 'required|string|max:255',
            'features' => 'required|string',
            'wa_text' => 'nullable|string|max:255',
            'is_popular' => 'nullable|boolean',
        ]);

        $validated['is_popular'] = $request->boolean('is_popular');

        PricingPackage::create($validated);

        return redirect()->route('admin.packages.index')
            ->with('success', 'Paket harga berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(PricingPackage $package)
    {
        return view('admin.packages.show', compact('package'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PricingPackage $package)
    {
        return view('admin.packages.edit', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PricingPackage $package)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|in:Profil & Landing Page,Toko Online,Custom,Desain & Sosmed',
            'price' => 'required|string|max:255',
            'renewal_price' => 'required|string|max:255',
            'features' => 'required|string',
            'wa_text' => 'nullable|string|max:255',
            'is_popular' => 'nullable|boolean',
        ]);

        $validated['is_popular'] = $request->boolean('is_popular');

        $package->update($validated);

        return redirect()->route('admin.packages.index')
            ->with('success', 'Paket harga berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PricingPackage $package)
    {
        $package->delete();

        return redirect()->route('admin.packages.index')
            ->with('success', 'Paket harga berhasil dihapus.');
    }
}
