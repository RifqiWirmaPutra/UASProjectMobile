<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Rawat Jalan Rumah Sakit - Register</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/Logos.png" />
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="{{ asset('assets/images/logos/logos.png') }}" width="120"
                                        alt="">
                                </a>
                                <p class="text-center">Create a new account</p>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                        <input type="text"
                                            class="form-control @error('nama_lengkap') is-invalid @enderror"
                                            value="{{ old('nama_lengkap') }}" name="nama_lengkap" id="nama_lengkap"
                                            required autofocus placeholder="Masukkan nama lengkap">
                                        @error('nama_lengkap')
                                            <span class="text-danger fs-6 fw-normal" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text"
                                            class="form-control @error('username') is-invalid @enderror"
                                            value="{{ old('username') }}" name="username" id="username" required
                                            placeholder="Username">
                                        @error('username')
                                            <span class="text-danger fs-6 fw-normal" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            value="{{ old('email') }}" name="email" id="email" required
                                            placeholder="Email" aria-describedby="emailHelp">
                                        @error('email')
                                            <span class="text-danger fs-6 fw-normal" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                                        <input type="text"
                                            class="form-control @error('nomor_telepon') is-invalid @enderror"
                                            value="{{ old('nomor_telepon') }}" name="nomor_telepon" id="nomor_telepon"
                                            required placeholder="Enter your phone number">
                                        @error('nomor_telepon')
                                            <span class="text-danger fs-6 fw-normal" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            id="password" required placeholder="Enter your password">
                                        @error('password')
                                            <span class="text-danger fs-6 fw-normal" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" name="password_confirmation"
                                            id="password_confirmation" required placeholder="Confirm your password">
                                    </div>
                                    <div class="mb-4">
                                        <label for="role" class="form-label">Role</label>
                                        <select class="form-control @error('role') is-invalid @enderror" name="role"
                                            id="role" required>
                                            <option value="">Select Role</option>
                                            <option value="dokter" {{ old('role') == 'dokter' ? 'selected' : '' }}>
                                                Dokter</option>
                                            <option value="pasien" {{ old('role') == 'pasien' ? 'selected' : '' }}>
                                                Pasien</option>
                                            <option value="apoteker" {{ old('role') == 'apoteker' ? 'selected' : '' }}>
                                                Apoteker</option>
                                            <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>
                                                Admin</option>
                                        </select>
                                        @error('role')
                                            <span class="text-danger fs-6 fw-normal" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign
                                        Up</button>
                                </form>
                                <p class="text-center">Already have an account? <a href="{{ route('login') }}">Sign
                                        In</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
