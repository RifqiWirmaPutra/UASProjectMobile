@extends('backend.layouts.main')

@section('content')
    <div class="container-fluid">

        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Input User Terbaru</h5>
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" method="POST" action="{{ route('register') }}"
                                novalidate="novalidate">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror"
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
                                    <input type="text" class="form-control @error('username') is-invalid @enderror"
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
                                <div class="mb-3">
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
                                    <!-- Tambahkan input form lainnya sesuai dengan skema tabel -->
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{ route('users.index') }}" class="btn btn-light">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
