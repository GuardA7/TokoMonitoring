@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>Dashboard</h2>
    <p>Selamat datang di aplikasi monitoring toko Anda!</p>

    <div class="card mt-4">
        <div class="card-header">Ringkasan</div>
        <div class="card-body">
            <p>Total Hari Ini: <strong>Rp 1.250.000</strong></p>
            <p>Total Bulan Ini: <strong>Rp 25.300.000</strong></p>
        </div>
    </div>
@endsection
