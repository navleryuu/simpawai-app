@extends('app')
@section('content')
<div class="card p-3" style="border-radius: 8px; border: 1px solid #ccc; margin-top: 90px;">
    <div class="header text-center mb-3">
        <h5 style="font-size: 1.2rem;">Input Data Jabatan</h5>
    </div>
    <form action="{{ route('jabatan-store') }}" method="Post">
        @csrf
        {{-- <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-3 col-form-label">ID Jabatan</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="id">
            </div>
        </div> --}}
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Jabatan</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="nama_jabatan">
            </div>
        </div>
        <button type="submit" class="btn text-white float-right" style="background-color: #6246EA; font-size: 0.8rem;">Simpan</button>
    </form>
</div>

@endsection