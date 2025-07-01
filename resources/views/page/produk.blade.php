@extends('layouts.app')
@section('title', 'Produk')

@section('content')
<div class="container-fluid">
    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center flex-wrap mb-4 gap-2">
        <h2 class="fw-bold m-0">Produk</h2>

        <div class="d-flex gap-2">
            <a href="#" class="btn btn-primary">Tambah Barang</a>
            <a href="#" class="btn btn-primary">Cetak Barcode</a>
        </div>
    </div>

    {{-- Search --}}
    <div class="mb-3">
        <div class="input-group">
            <span class="input-group-text bg-white border-end-0"><i class="bi bi-search"></i></span>
            <input type="text" class="form-control border-start-0" placeholder="Search">
        </div>
    </div>

    {{-- Table --}}
    <div class="table-responsive">
        <table class="table table-hover align-middle text-center">
            <thead class="table-light">
                <tr>
                    <th scope="col"><input type="checkbox" /></th>
                    <th scope="col" class="text-start">Nama Barang <i class="bi bi-caret-down-fill ms-1"></i></th>
                    <th scope="col">Barang Masuk</th>
                    <th scope="col">Barang Keluar</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Modal</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produk as $item)
                <tr>
                    <td><input type="checkbox" /></td>
                    <td class="text-start d-flex align-items-center gap-2">
                        <img src="https://via.placeholder.com/32" class="rounded-circle" alt="foto" />
                        <div>
                            <div>{{ $item['nama'] }}</div>
                            <small class="text-muted">{{ $item['kategori'] }}</small>
                        </div>
                    </td>
                    <td>{{ $item['masuk'] }}</td>
                    <td>{{ $item['keluar'] }}</td>
                    <td>{{ $item['stok'] }}</td>
                    <td>Rp. {{ number_format($item['modal'], 0, ',', '.') }}</td>
                    <td>
                        <div class="d-flex justify-content-center gap-1">
                            <a href="#" class="btn btn-warning btn-sm text-white">
                                <i class="bi bi-pencil-fill"></i>
                            </a>
                            <form method="POST" action="#">
                                @csrf
                                <button class="btn btn-danger btn-sm" type="submit">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
