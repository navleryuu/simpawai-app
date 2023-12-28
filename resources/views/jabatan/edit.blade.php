<!-- resources/views/jabatan/edit.blade.php -->

@extends('app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title" style="font-weight: bold;">Edit Jabatan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{ route('jabatan.update', ['id' => $data->id]) }}" method="POST">
                @csrf
                @method('PUT')

                {{-- <div class="form-group">
                    <label for="idjabatans">ID Jabatan</label>
                    <input type="text" name="idjabatans" class="form-control" value="{{ $data->id }}" readonly>
                </div> --}}
                <div class="form-group">
                    <label for="nama_jabatan">Nama Jabatan</label>
                    <input type="text" name="nama_jabatan" class="form-control" value="{{ $data->nama_jabatan }}">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <!-- Tombol Batal -->
                <a href="{{ route('jabatan') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
