<?php

namespace App\Http\Controllers;

use App\Models\Vinyl;
use Illuminate\Http\Request;

class VinylController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vinyls = Vinyl::all();

        return view('vinyl.index', compact('vinyls'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vinyl.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Vinyl::create($request->all());

        return redirect()->route('vinyl.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $vinyl = Vinyl::findOrFail($id);

        return view('vinyl.show', compact('vinyl'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vinyl = Vinyl::findOrFail($id);

        return view('vinyl.edit', compact('vinyl'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vinyl = Vinyl::findOrFail($id);
        $vinyl->update($request->all());

        return redirect()->route('vinyl.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vinyl = Vinyl::findOrFail($id);
        $vinyl->delete();

        return redirect()->route('vinyl.index');
    }
}
