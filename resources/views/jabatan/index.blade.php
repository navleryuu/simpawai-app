@extends('app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title" style="font-weight: bold;">Data Jabatan</h3>
    </div>
    <!-- /.card-header -->
    
    <div class="card-body">
        
        <a href="{{ route('jabatan.create')}}" class="btn btn-primary mb-3">Tambah Data</a>
        
        <table id="example1" class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>No</th>
                    {{-- <th>Kode Jabatan</th> --}}
                    <th>Nama Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $no++ }}</td>
                        {{-- <td>{{ $d->id }}</td> --}}
                        <td>{{ $d->nama_jabatan }}</td>
                        <td>
                            <div class="btn-group gap-2" role="group">
                                <a href="{{ route('jabatan-edit', ['id' => $d->id]) }}" class="btn btn-info" style="border-radius: 5px;">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('jabatan.delete', ['id' => $d->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
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

<script>
    function confirmDelete(id) {
        var confirmation = confirm("Apakah Anda yakin ingin menghapus data tersebut?");

        if (confirmation) {
            document.getElementById('deleteForm' + id).submit();
        } else {
            // Tidak ada tindakan jika pengguna membatalkan penghapusan
        }
    }
</script>
    
@endsection