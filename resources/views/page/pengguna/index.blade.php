@extends('layouts.app')
@section('title', 'Pengguna')

@section('content')
<div class="container-fluid bg-white p-4 shadow rounded">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold mb-0">Pengguna</h2>
        <a href="{{ url('/pengguna/tambah') }}" class="btn btn-primary">Tambah</a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th><input type="checkbox"></th>
                    <th>Nama Pengguna</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $users = [
                        ['id' => 1, 'name' => 'Andi Susanto', 'role' => 'owner'],
                        ['id' => 2, 'name' => 'Budi Hartono', 'role' => 'mod'],
                        ['id' => 3, 'name' => 'Citra Lestari', 'role' => 'packing'],
                    ];
                @endphp

                @foreach($users as $user)
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><i class="bi bi-person me-2"></i> {{ $user['name'] }}</td>
                        <td class="text-capitalize">{{ $user['role'] }}</td>
                        <td>
                            <!-- Tombol Edit -->
                            <a href="{{ route('pengguna.edit', $user['id']) }}" class="btn btn-warning btn-sm me-1" title="Edit">
                                <i class="bi bi-pencil"></i>
                            </a>

                            <!-- Tombol Hapus -->
                            <button
                                type="button"
                                class="btn btn-danger btn-sm btn-hapus"
                                data-bs-toggle="modal"
                                data-bs-target="#modalHapus"
                                data-id="{{ $user['id'] }}"
                                title="Hapus">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="modalHapus" tabindex="-1" aria-labelledby="modalHapusLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="modalHapusLabel">Konfirmasi Hapus</h5>
        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah Anda yakin ingin menghapus pengguna ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <form id="formHapus" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Ya, Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const formHapus = document.getElementById('formHapus');
        const buttons = document.querySelectorAll('.btn-hapus');

        buttons.forEach(button => {
            button.addEventListener('click', function () {
                const userId = this.getAttribute('data-id');
                formHapus.setAttribute('action', '/pengguna/' + userId);
            });
        });
    });
</script>
@endpush
