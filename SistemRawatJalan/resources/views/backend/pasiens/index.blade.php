@extends('backend.layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">Data Pasien</h5>
                    <div class="table-responsive">
                        <a href="/pasiens/create">
                            <button type="button" class="btn btn-primary m-1">Tambah Pasien</button>
                        </a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Ibu Kandung</th>
                                    <th>Agama</th>
                                    <th>Status</th>
                                    <th>Pendidikan</th>
                                    <th>Pekerjaan</th>
                                    <th>Nomor KTP</th>
                                    <th>Nomor KK</th>
                                    <th>Nomor BPJS</th>
                                    <th>Nomor Telepon</th>
                                    <th>Provinsi</th>
                                    <th>Kabupaten/Kota</th>
                                    <th>Alamat</th>
                                    <th>Golongan Darah</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pasiens as $pasien)
                                    <tr>
                                        <td>{{ $pasien->id_pasien }}</td>
                                        <td>{{ $pasien->nama_lengkap }}</td>
                                        <td>{{ $pasien->jenis_kelamin }}</td>
                                        <td>{{ $pasien->tempat_lahir }}</td>
                                        <td>{{ $pasien->tanggal_lahir }}</td>
                                        <td>{{ $pasien->nama_ibu_kandung }}</td>
                                        <td>{{ $pasien->agama }}</td>
                                        <td>{{ $pasien->status }}</td>
                                        <td>{{ $pasien->pendidikan }}</td>
                                        <td>{{ $pasien->pekerjaan }}</td>
                                        <td>{{ $pasien->nomor_ktp }}</td>
                                        <td>{{ $pasien->nomor_kk }}</td>
                                        <td>{{ $pasien->nomor_bpjs }}</td>
                                        <td>{{ $pasien->nomor_telepon }}</td>
                                        <td>{{ $pasien->provinsi }}</td>
                                        <td>{{ $pasien->kabupaten_kota }}</td>
                                        <td>{{ $pasien->alamat }}</td>
                                        <td>{{ $pasien->golongan_darah }}</td>
                                        <td>{{ $pasien->email }}</td>
                                        <td>
                                            <div class="d-flex justify-content-start">
                                                <a href="/pasiens/{{ $pasien->id_pasien }}/edit"
                                                    class="btn btn-warning m-1">
                                                    Edit <i class="fas fa-fw fa-wrench"></i>
                                                </a>
                                                <form action="/pasiens/{{ $pasien->id_pasien }}" method="POST"
                                                    style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger m-1">Delete <i
                                                            class="fas fa-fw fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
