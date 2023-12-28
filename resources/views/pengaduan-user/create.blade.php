@extends('app')

@section('content')
<div class="card p-3" style="border-radius: 8px; border: 1px solid #ccc; margin-top: 90px;">
    <div class="header text-center mb-3">
        <h5 style="font-size: 1.2rem;">Tambah Pengaduan</h5>
    </div>
    <form action="{{ route('pengaduan-user.store') }}" method="post">
        @csrf
        <div class="row mb-3">
            <label for="nama_pegawai" class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="nama_pegawai" value="{{ $pegawai->nama_pegawai }}" name="nama_pegawai" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="divisi" class="col-sm-3 col-form-label">Divisi</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="divisi" value="{{ $pegawai->divisi }}" name="divisi" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="isi" class="col-sm-3 col-form-label">Isi Pengaduan</label>
            <div class="col-sm-9">
                <textarea class="form-control" id="isi" name="isi" rows="4"></textarea>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-12">
                <button type="submit" class="btn text-white float-right" style="background-color: #6246EA; font-size: 0.8rem;">Simpan</button>
            </div>
        </div>
    </form>
</div>
@endsection
