@extends('app')

@section('content')
<div class="card p-3" style="border-radius: 8px; border: 1px solid #ccc; margin-top: 90px;">
    <div class="header text-center mb-3">
        <h5 style="font-size: 1.2rem;">Input Data User</h5>
    </div>
    <form action="{{ route('user-store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="my-input">Role</label>
                <select name="role" id="role" class="form-control">
                    <option value="">Pilih Role</option>
                    <option value="admin">Admin</option>
                    <option value="pegawai">Pegawai</option>
                </select>
        </div>
        <div class="form-group">
            <label for="my-input">Email</label>
            <input id="my-input" class="form-control" type="email" name="email" placeholder="Isi Email">
            @error('email')
                <div class="alert alert-danger alert-block">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="my-input">Name</label>
            <input id="my-input" class="form-control" type="username" name="name" placeholder="Isi Nama ">
            @error('name')
                <div class="alert alert-danger alert-block">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="my-input">Password</label>
            <input id="my-input" class="form-control" type="password" name="password" placeholder="Isi Password">

            @error('password')
                <div class="alert alert-danger alert-block">


                    <strong>{{ $message }}</strong>

                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="my-input">Konfirmasi Password</label>
            <input id="my-input" class="form-control" type="password" name="password_confirmation" placeholder="Konfirmasi Password">
            @error('password_confirmation')
                <div class="alert alert-danger alert-block">


                    <strong>{{ $message }}</strong>

                </div>
            @enderror
        </div>
        <button class="btn btn-dark">Submit</button>
    </form>
    </form>
</div>
    
@endsection