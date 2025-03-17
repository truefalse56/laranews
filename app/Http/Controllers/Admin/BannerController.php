<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the banners.
     */
    public function index()
    {
        $banners = Banner::orderBy('position')->get();
        return view('admin.banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new banner.
     */
    public function create()
    {
        return view('admin.banners.create');
    }

    /**
     * Store a newly created banner in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image_url' => 'required|string|max:255',
            'link' => 'nullable|url',
            'is_active' => 'boolean',
            'position' => 'integer|min:0',
        ]);

        Banner::create($validated);

        return redirect()->route('admin.banner.index')->with('success', 'Баннер успешно создан');
    }

    /**
     * Display the specified banner.
     */
    public function show(Banner $banner)
    {
        return view('admin.banners.show', compact('banner'));
    }

    /**
     * Show the form for editing the specified banner.
     */
    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    /**
     * Update the specified banner in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image_url' => 'required|string|max:255',
            'link' => 'nullable|url',
            'is_active' => 'boolean',
            'position' => 'integer|min:0',
        ]);

        $banner->update($validated);

        return redirect()->route('admin.banner.index')->with('success', 'Баннер успешно обновлен');
    }

    /**
     * Remove the specified banner from storage.
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->route('admin.banner.index')->with('success', 'Баннер успешно удален');
    }
}