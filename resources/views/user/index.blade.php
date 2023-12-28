@extends('app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title" style="font-weight: bold;">Data Users</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <a href="{{ route ('user.create')}}" class="btn btn-primary mb-3">Tambah Data</a>
        <table id="example1" class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Role</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>
                            <span class="badge bg-{{ $user->roles[0]['name'] == 'admin' ? 'primary' : 'success'}}">{{ $user->roles[0]['name'] }}</span>
                            
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <div class="btn-group gap-2" role="group">
                                <a href="{{ route('user-edit', $user->id) }}" class="btn btn-info" style="border-radius: 5px;">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('user.delete', ['id' => $user->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
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