@extends('layouts.app')

@section('title', 'Detail Produk')

@section('content')

@include('layouts.navbar')

<h2>Detail Produk</h2>

<div class="card">
    <div class="card-body">

        @if($produk->foto)
            <img src="{{ asset('storage/'.$produk->foto) }}"
                 width="200"
                 class="img-thumbnail mb-3">
        @endif

        <table class="table table-bordered">

            <tr>
                <th>ID</th>
                <td>{{ $produk->id }}</td>
            </tr>

            <tr>
                <th>User</th>
                <td>{{ $produk->user->name }}</td>
            </tr>

            <tr>
                <th>Nama</th>
                <td>{{ $produk->nama }}</td>
            </tr>

            <tr>
                <th>Jenis</th>
                <td>{{ $produk->jenis }}</td>
            </tr>

            <tr>
                <th>Harga Beli</th>
                <td>Rp {{ number_format($produk->harga_beli) }}</td>
            </tr>

            <tr>
                <th>Harga Jual</th>
                <td>Rp {{ number_format($produk->harga_jual) }}</td>
            </tr>

            <tr>
                <th>Stok</th>
                <td>{{ $produk->stok }}</td>
            </tr>

            <tr>
                <th>Dibuat</th>
                <td>{{ $produk->created_at }}</td>
            </tr>

            <tr>
                <th>Diupdate</th>
                <td>{{ $produk->updated_at }}</td>
            </tr>

        </table>

        <a href="{{ route('produk.index') }}" class="btn btn-secondary">
            Kembali
        </a>

    </div>
</div>

@endsection