<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang UNIB Store</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Edit Barang UNIB Store</h1>
        <form action="{{ route('update', $barang->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $barang->nama_barang }}" required>
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" value="{{ $barang->stok }}" required>
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select class="form-select" id="kategori" name="kategori" required>
                    <option value="fashion" {{ $barang->kategori == 'fashion' ? 'selected' : '' }}>Fashion</option>
                    <option value="alat_tulis" {{ $barang->kategori == 'alat_tulis' ? 'selected' : '' }}>Alat Tulis</option>
                    <option value="rumah_tangga" {{ $barang->kategori == 'rumah_tangga' ? 'selected' : '' }}>Rumah Tangga</option>
                    <option value="lainnya" {{ $barang->kategori == 'lainnya' ? 'selected' : '' }}>Lainnya</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
                <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" value="{{ $barang->tanggal_masuk }}" required>
            </div>
            <div class="mb-3">
                <label for="tersedia" class="form-label">Status</label>
                <select class="form-select" id="tersedia" name="tersedia" required>
                    <option value="1" {{ $barang->tersedia ? 'selected' : '' }}>Tersedia</option>
                    <option value="0" {{ !$barang->tersedia ? 'selected' : '' }}>Tidak Tersedia</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Barang</button>
        </form>
    </div>
</body>
</html>
