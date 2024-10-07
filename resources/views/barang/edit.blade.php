@extends('layouts.app') 

@section('content')
<div class="container">
    <h2>Daftar Barang</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Kategori</th>
                <th>Tanggal Masuk</th>
                <th>Tersedia</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barangs as $item)
                <tr>
                    <td>{{ $item->nama_barang }}</td>
                    <td>{{ $item->stok }}</td>
                    <td>{{ $item->kategori }}</td>
                    <td>{{ $item->tanggal_masuk }}</td>
                    <td>{{ $item->tersedia ? 'Ya' : 'Tidak' }}</td>
                    <td>
                        <a href="{{ route('barang.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        
                        <form action="{{ route('barang.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
