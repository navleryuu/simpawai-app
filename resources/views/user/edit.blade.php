@extends('app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title" style="font-weight: bold;">Edit User</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="{{ route('user.update', ['id' => $user->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="my-input">Role</label>
                <select class="form-control" type="number" name="role">
                    <option value="admin" {{ $user->roles[0]['name'] == 'admin' ? 'selected' : ''}}>Admin</option>
                    <option value="pegawai" {{ $user->roles[0]['name'] == 'pegawai' ? 'selected' : ''}}>Pegawai</option>
                </select>
            </div>
            <div class="form-group">
                <label for="my-input">Email</label>
                <input id="my-input" class="form-control" type="email" name="email" value="{{ $user->email }}"
                    placeholder="Isi Pengaduan">

                @error('email')
                    <div class="alert alert-danger alert-block">


                        <strong>{{ $message }}</strong>

                    </div>
                @enderror
            </div>
            <div class="form-group">
            <label for="my-input">Name</label>
            <input id="my-input" class="form-control" type="username" name="name" value="{{ $user->name }}">
            @error('name')
                <div class="alert alert-danger alert-block">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
            <div class="form-group">
                <label for="my-input">Password</label>
                <input id="my-input" class="form-control" type="password" name="password">

                @error('password')
                    <div class="alert alert-danger alert-block">


                        <strong>{{ $message }}</strong>

                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="my-input">Konfirmasi Password</label>
                <input id="my-input" class="form-control" type="password" name="password_confirmation">
                @error('password_confirmation')
                    <div class="alert alert-danger alert-block">


                        <strong>{{ $message }}</strong>

                    </div>
                @enderror
            </div>
            <button class="btn btn-dark">Submit</button>
        </form>
            
    
@endsection