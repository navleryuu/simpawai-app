<?php

namespace App\Http\Controllers;

use App\Http\Requests\JabatanRequest;
use App\Models\Jabatans;
use App\Http\Requests\StoreJabatansRequest;
use App\Http\Requests\UpdateJabatansRequest;
use Illuminate\Http\Request;

class JabatansController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Jabatans::get();
        return view('jabatan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jabatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JabatanRequest $request)
    {
        $data = $request->validated();
        Jabatans::create($data);
        return redirect()->route('jabatan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jabatans $jabatans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Jabatans::findOrFail($id);
        return view('jabatan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JabatanRequest $request, string $id)
    {
        $data = $request->validated();
        Jabatans::findOrFail($id)->update($data);
        return redirect()->route('jabatan')->with('success', 'Data Jabatan berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Jabatans::findOrFail($id);
        $data->delete();
        return redirect()->route('jabatan');
    }

}
