@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">Dashboard</h1>

    <div class="row">
        {{-- Kartu-kartu data --}}
        @php
            $cards = [
                ['label' => 'Uang Keseluruhan', 'value' => 'Rp. 30.000.000'],
                ['label' => 'Uang yang bisa ditarik', 'value' => 'Rp. 12.000.000'],
                ['label' => 'Total Order', 'value' => '11.8M'],
                ['label' => 'Order Hari ini', 'value' => '100'],
                ['label' => 'Siap Kirim', 'value' => '24'],
                ['label' => 'Belum Packing', 'value' => '55'],
                ['label' => 'Barang Masuk Hari Ini', 'value' => '24'],
                ['label' => 'Barang Keluar Hari Ini', 'value' => '24'],
            ];
        @endphp

        @foreach ($cards as $card)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="bg-light p-3 rounded shadow-sm h-100">
                    <div class="text-muted">{{ $card['label'] }}</div>
                    <div class="fs-5 fw-bold">{{ $card['value'] }}</div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Include grafik --}}
    @include('components.chart')
</div>
@endsection
