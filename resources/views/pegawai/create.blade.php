@extends('app')

@section('content')
<div class="card p-3" style="border-radius: 8px; border: 1px solid #ccc; margin-top: 90px;">
    <div class="header text-center mb-3">
        <h5 style="font-size: 1.2rem;">Input Data Pegawai</h5>
    </div>
    <form action="{{ route('pegawai-store')}}" method="post">
        @csrf
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Pegawai</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="nama_pegawai">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Jabatan</label>
            <div class="col-sm-9">
                <select class="form-control" name="jabatan_id" required>
                    <option value="" selected disabled>Pilih Jabatan</option>
                    @foreach ($jabatans as $jabatan)
                        <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Divisi</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="divisi">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Telepon</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="telepon">
            </div>
        </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="alamat">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-3 col-form-label">User</label>
                <div class="col-sm-9">
                    <select class="form-control" name="user_id" required>
                        <option value="" selected disabled>Pilih User</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        <button type="submit" class="btn text-white float-right" style="background-color: #6246EA; font-size: 0.8rem;">Simpan</button>
    </form>
</div>
    
@endsection