@extends('app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title" style="font-weight: bold;">Data Pengaduan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <a href="{{ route('pengaduan-user.create')}}" class="btn btn-primary mb-3">Buat Pengaduan</a>
        <a href="{{ route('pengaduan-user')}}" class="btn btn-primary mb-3"> <i class="nav-icon fas fa-sync"> Reload</i></a>
        <table id="example1" class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Status</th>
                    <th>Nama</th>
                    <th>Divisi</th>
                    <th>Isi Pengaduan</th>
                    <th>Waktu Pengaduan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($pengaduans as $pengaduan)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>
                            <span
                                class="badge bg-{{ $pengaduan->status == 'ANTRIAN' ? 'warning' : ($pengaduan->status == 'PROSES' ? 'primary' : 'success') }}">
                                    {{$pengaduan->status }}
                                </span>
                        </td>
                        <td>{{ $pengaduan->pegawai->nama_pegawai }}</td>
                        <td>{{ $pengaduan->pegawai->divisi }}</td>
                        <td>{{ $pengaduan->isi }}</td>
                        <td>{{ $pengaduan->created_at }}</td>
                        <td>
                            <div class="btn-group gap-2" role="group">
                                @if($pengaduan->status == 'ANTRIAN')
                                <form action="{{ route('pengaduan-user.delete', ['id' => $pengaduan->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger gap-2" style="border-radius: 5px;>
                                        <i class="fas fa-trash"></i> Cancel
                                    </button>
                                </form>
                                @endif
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