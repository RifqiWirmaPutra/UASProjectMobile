@extends('backend.layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Edit Data Pasien</h5>
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="/pasiens/{{ $pasiens->id_pasien }}"
                            novalidate="novalidate">
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                    value="{{ $pasiens->nama_lengkap }}">
                            </div>
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin"
                                    value="{{ $pasiens->jenis_kelamin }}">
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                    value="{{ $pasiens->tempat_lahir }}">
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                    value="{{ $pasiens->tanggal_lahir }}">
                            </div>
                            <div class="mb-3">
                                <label for="nama_ibu_kandung" class="form-label">Ibu Kandung</label>
                                <input type="text" class="form-control" id="nama_ibu_kandung" name="nama_nama_ibu_kandung"
                                    value="{{ $pasiens->nama_ibu_kandung }}">
                            </div>
                            <div class="mb-3">
                                <label for="agama" class="form-label">Agama</label>
                                <select class="form-select" id="agama" name="agama" value="{{ $pasiens->agama }}">
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" id="status" name="status" value="{{ $pasiens->status }}">
                                    <option value="BPJS">BPJS</option>
                                    <option value="Umum">Umum</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="pendidikan" class="form-label">Pendidikan</label>
                                <select class="form-select" id="pendidikan" name="pendidikan"
                                    value="{{ $pasiens->pendidikan }}">
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="Sarjana">Sarjana</option>
                                    <option value="Magister">Magister</option>
                                    <option value="Doktor">Doktor</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"
                                    value="{{ $pasiens->pekerjaan }}">
                            </div>
                            <div class="mb-3">
                                <label for="nomor_ktp" class="form-label">Nomor KTP</label>
                                <input type="text" class="form-control" id="nomor_ktp" name="nomor_ktp"
                                    value="{{ $pasiens->nomor_ktp }}">
                            </div>
                            <div class="mb-3">
                                <label for="nomor_kk" class="form-label">Nomor KK</label>
                                <input type="text" class="form-control" id="nomor_kk" name="nomor_kk"
                                    value="{{ $pasiens->nomor_kk }}">
                            </div>
                            <div class="mb-3">
                                <label for="nomor_bpjs" class="form-label">Nomor BPJS</label>
                                <input type="text" maxlength="16" class="form-control" id="nomor_bpjs"
                                    name="nomor_bpjs" value="{{ $pasiens->nomor_bpjs }}">
                            </div>
                            <div class="mb-3">
                                <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                                <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon"
                                    value="{{ $pasiens->nomor_telepon }}">
                            </div>
                            <div class="mb-3">
                                <label for="provinsi" class="form-label">Provinsi</label>
                                <input type="text" class="form-control" id="provinsi" name="provinsi"
                                    value="{{ $pasiens->provinsi }}">
                            </div>
                            <div class="mb-3">
                                <label for="kabupaten_kota" class="form-label">Kabupaten/Kota</label>
                                <input type="text" class="form-control" id="kabupaten_kota" name="kabupaten_kota"
                                    value="{{ $pasiens->kabupaten_kota }}">
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat"
                                    value="{{ $pasiens->alamat }}">
                            </div>
                            <div class="mb-3">
                                <label for="golongan_darah" class="form-label">Golongan Darah</label>
                                <select class="form-select" id="golongan_darah" name="golongan_darah"
                                    value="{{ $pasiens->golongan_darah }}">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    value="{{ $pasiens->email }}">
                            </div>
                            <!-- Tambahkan input form lainnya sesuai dengan skema tabel -->
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button class="btn btn-warning">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
