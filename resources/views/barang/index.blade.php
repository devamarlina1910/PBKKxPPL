<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Daftar Barang</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Stok</th>
                    <th>Kategori</th>
                    <th>Tanggal Masuk</th>
                    <th>Tersedia</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barang as $br)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $br->nama_barang }}</td>
                    <td>{{ $br->stok }}</td>
                    <td>{{ $br->kategori }}</td>
                    <td>{{ $br->tanggal_masuk }}</td>
                    <td>{{ $br->tersedia ? 'Tersedia' : 'Tidak Tersedia' }}</td>
                    <td>
                        <a href="{{ route('edit', $br->id) }}">edit</a>
                        <form action="{{ route('destroy', $br->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button>hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
