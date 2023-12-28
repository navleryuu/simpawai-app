<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="vh-100" style="background-color: #fffffe">
    <div class="container">
        <div class="row justify-content-center align-items-center text-white">
            <div class="col-md-6">
                <!-- Logo -->
                <div class="text-center mb-4">
                    <img src="{{ asset('assets/logoprovsu.png') }}" alt="Logo" height="170">
                </div>
                <!-- Judul -->
                <div class="text-center mb-4">
                    <h3 class="mt-3 mb-0 text-dark">SISTEM MANAJEMEN PENGADUAN PEGAWAI BADAN KEUANGAN DAN ASET DAERAH</h3>
                </div>
                <!-- Formulir Login -->
                <div class="card p-4 shadow p-3 mb-5 bg-body-tertiary rounded col-10 m-auto" style="background-color: #fffffe">
                    <h1 class="text-center mb-4">Login</h1>
                    <hr>
                    <form method="POST" action="{{ route('login-proses') }}">
                        @csrf

                        @error('message')
                            {{ $message }}
                        @enderror
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                        @error('email')
                            <small>{{ $message }}</small>
                        @enderror
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>
                        @error('password')
                            <small>{{ $message }}</small>
                        @enderror
                        <div class="text-end">

                        <button type="submit" class="btn text-white" style="background-color: #07326a">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if ($message = Session::get('failed'))
        <script>
            Swal.fire({{ json_encode($message) }});
        </script>
    @endif

</body>

</html>
