@extends('app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title" style="font-weight: bold;">Edit Jabatan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="#" method="POST">
            @csrf
            @method('PUT')

      
            <div class="form-group">
                <label for="nama_jabatan">Status</label>
                <input type="text" name="nama_pegawai" class="form-control" value="{{ $data->nama_pegawai }}">
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Pilih Jabatan</label>
                <div class="col-sm-12">
                    <select class="form-control" name="id_jabatan" required>
                        @foreach ($jabatans as $jabatan)
                            <option value="{{ $jabatan->id }}" {{ $data->jabatan->id == $jabatan->id ? 'selected' : '' }}>
                                {{ $jabatan->nama_jabatan }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="divisi">Divisi</label>
                <input type="text" name="divisi" class="form-control" value="{{ $data->divisi }}">
            </div>
            <div class="form-group">
                <label for="telepon">Telepon</label>
                <input type="text" name="telepon" class="form-control" value="{{ $data->telepon}}">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" value="{{ $data->alamat}}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <!-- Tombol Batal -->
            <a href="{{ route('jabatan') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
    <!-- /.card-body -->
</div>
@endsection