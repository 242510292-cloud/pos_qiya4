@extends('layouts.app')

@section('title', 'Jenis Produk')

@section('content')

@include('layouts.navbar')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-bold text-primary">
        <i class="bi bi-tags me-2"></i>
      Jenis produk
    </h1>
            <p class="text-muted mb-0">
                Kelola jenis produk pada aplikasi POS.
            </p>
        </div>

        <a href="{{ route('jenis-produk.create') }}"
           class="btn btn-primary">
            + Tambah Jenis Produk
        </a>
    </div>

    {{-- Pesan berhasil --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Tabel Jenis Produk --}}
    <div class="card shadow-sm border-0">

        <div class="card-header bg-info text-white">
            <strong>Daftar Jenis Produk</strong>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-striped align-middle mb-0">

                    <thead class="table-primary">
                        <tr>
                            <th width="70" class="text-center">No</th>
                            <th>Nama Jenis Produk</th>
                            <th>Keterangan</th>
                            <th width="180" class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($jenisProduks as $jenis)

                            <tr>

                                <td class="text-center">
                                    {{ $loop->iteration }}
                                </td>

                                <td>
                                    <strong>
                                        {{ $jenis->nama_jenis }}
                                    </strong>
                                </td>

                                <td>
                                    {{ $jenis->keterangan ?? '-' }}
                                </td>

                                <td class="text-center">

                                    <a href="{{ route('jenis-produk.edit', $jenis->id) }}"
                                       class="btn btn-sm btn-info text-white">
                                        Edit
                                    </a>

                                    <form action="{{ route('jenis-produk.destroy', $jenis->id) }}"
                                          method="POST"
                                          class="d-inline">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-sm btn-danger"
                                                onclick="return confirm('Yakin ingin menghapus jenis produk ini?')">
                                            Hapus
                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="4"
                                    class="text-center text-muted py-4">

                                    Belum ada jenis produk.

                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>
    </div>

</div>

@endsection