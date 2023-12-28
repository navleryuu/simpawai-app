<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengaduanUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawai = Pegawai::select('id')
                    ->where('user_id', Auth::user()->id)->first();
        if (!$pegawai) {
            return redirect()->back();
        }

        $pengaduans = Pengaduan::where('pegawai_id', $pegawai->id)
                        ->with('pegawai')->get();
        return view('pengaduan-user.index', compact('pengaduans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pegawai = Pegawai::where('user_id', Auth::user()->id)->first();

        return view('pengaduan-user.create', compact('pegawai'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pegawai = Pegawai::select('id')
                    ->where('user_id', Auth::user()->id)->first();

        Pengaduan::create(
            [
                'pegawai_id' => $pegawai->id,
                'isi' => $request->isi,
            ]
        );

        return redirect()->route('pengaduan-user');
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
        return view('pengaduan-user.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Pengaduan::findOrFail($id);
        $data->delete();
        return redirect()->route('pengaduan-user');
    }
}
