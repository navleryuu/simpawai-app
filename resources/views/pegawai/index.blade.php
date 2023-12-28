@extends('app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title" style="font-weight: bold;">Data Pegawai</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <a href="{{ route('pegawai.create')}}" class="btn btn-primary mb-3">Tambah Data</a>
        <table id="example1" class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pegawai</th>
                    <th>Jabatan</th>
                    <th>Divisi</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $d->nama_pegawai }}</td>
                        <td>{{ $d->jabatan->nama_jabatan }}</td>
                        <td>{{ $d->divisi }}</td>
                        <td>{{ $d->telepon }}</td>
                        <td>{{ $d->alamat }}</td>
                        <td>
                            <div class="btn-group gap-2" role="group">
                                <a href="{{ route('pegawai-edit', ['id' => $d->id]) }}" class="btn btn-info" style="border-radius: 5px;">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('pegawai.delete', ['id' => $d->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger gap-2" style="border-radius: 5px;>
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
    
@endsection