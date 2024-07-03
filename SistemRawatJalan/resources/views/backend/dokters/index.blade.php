@extends('backend.layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">Data Dokter</h5>
                    <div class="table-responsive">
                        <a href="/dokters/create">
                            <button type="button" class="btn btn-primary m-1"><i class="fas fa-fw fa-plus-circle"></i>
                                Tambah Dokter</button>
                        </a>
                        <table class="table table-bordered">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">No</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Nama Dokter</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Spesialis</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Sub Spesialis</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Jadwal Praktek</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Nomor Telepon</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Action</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dokters as $index => $dokter)
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1">{{ $index + 1 }}</h6>
                                        </td>
                                        {{-- <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1">{{ $dokter->id_dokter }}</h6>
                                        </td> --}}
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">{{ $dokter->nama_dokter }}</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">{{ $dokter->spesialisasi }}</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">{{ $dokter->sub_spesialisasi }}</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">{{ $dokter->jadwal_praktek }}</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">{{ $dokter->nomor_telepon }}</p>
                                        </td>
                                        <td class="text-center">
                                            <div class="d-flex justify-content-start">
                                                <a href="/dokters/{{ $dokter->id_dokter }}/edit"
                                                    class="btn btn-warning m-1">
                                                    Update <i class="fas fa-fw fa-wrench"></i>
                                                </a>
                                                <form action="/dokters/{{ $dokter->id_dokter }}" method="POST"
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
