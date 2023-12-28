<?php

namespace App\Http\Controllers;

use App\Http\Requests\PegawaiRequest;
use App\Models\Jabatans;
use App\Models\Pegawai;
use App\Models\User;
use Illuminate\Http\Request;


class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pegawai::with('jabatan')->with('user')->get();
        return view('pegawai.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jabatans = Jabatans::all();
        $users = User::all();
        return view('pegawai.create', compact('jabatans', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PegawaiRequest $request)
    {
        $data = $request->validated();
        Pegawai::create($data);
        return redirect()->route('pegawai');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jabatans = Jabatans::all();
        $users = User::all();

        $data = Pegawai::findOrFail($id);
        return view('pegawai.edit', compact('data', 'jabatans', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PegawaiRequest $request, string $id)
    {
        $data = $request->validated();

        Pegawai::whereId($id)->update($data);
        return redirect()->route('pegawai');
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $data = Pegawai::findOrFail($id);
        $data->delete();
        return redirect()->route('pegawai');
    }
}
