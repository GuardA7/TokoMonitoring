@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4 fw-bold">Dashboard</h1>

    <div class="row g-4">
        @php
            $cards = [
                ['label' => 'Uang Keseluruhan', 'value' => 'Rp. 30.000.000', 'icon' => 'bi-cash-coin', 'color' => 'primary'],
                ['label' => 'Uang yang bisa ditarik', 'value' => 'Rp. 12.000.000', 'icon' => 'bi-wallet2', 'color' => 'success'],
                ['label' => 'Total Order', 'value' => '11.8M', 'icon' => 'bi-bag-check', 'color' => 'info'],
                ['label' => 'Order Hari ini', 'value' => '100', 'icon' => 'bi-cart-check', 'color' => 'warning'],
                ['label' => 'Siap Kirim', 'value' => '24', 'icon' => 'bi-truck', 'color' => 'secondary'],
                ['label' => 'Belum Packing', 'value' => '55', 'icon' => 'bi-box', 'color' => 'danger'],
                ['label' => 'Barang Masuk Hari Ini', 'value' => '24', 'icon' => 'bi-box-arrow-in-down', 'color' => 'dark'],
                ['label' => 'Barang Keluar Hari Ini', 'value' => '24', 'icon' => 'bi-box-arrow-up', 'color' => 'primary'],
            ];
        @endphp

        @foreach ($cards as $card)
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="icon-circle bg-{{ $card['color'] }} bg-opacity-10 text-{{ $card['color'] }}">
                        <i class="bi {{ $card['icon'] }} fs-3"></i>
                    </div>
                    <div>
                        <div class="text-muted small">{{ $card['label'] }}</div>
                        <div class="fs-5 fw-bold">{{ $card['value'] }}</div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{-- Spacer --}}
    <div class="my-5"></div>

    {{-- Chart --}}
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white fw-bold">
            Statistik Penjualan
        </div>
        <div class="card-body">
            @include('components.chart')
        </div>
    </div>
</div>


@endsection
