<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('update', $barang->id)}}" method="POST">
        @method('PUT')
        @csrf
        <input type="text" name="no" placeholder="masukkan no" value="{{old('no', $barang->no)}}">
        @error('no')
            {{$message}}
        @enderror
        <input type="text" name="nama barang" placeholder="masukkan nama barang" value="{{old('nama barang', $barang->nama_barang)}}">
        @error('nama barang')
            {{$message}}
        @enderror
       <input type="number" name="stok" placeholder="masukkan stok" value="{{old('stok', $barang->stok)}}">
        @error('stok')
            {{$message}}
        @enderror
        <input type="text" name="kategori" placeholder="masukkan kategori" value="{{old('kategori', $barang->kategori)}}">
        @error('kategori')
            {{$message}}
        @enderror
        <input type="date" name="tanggal masuk" placeholder="masukkan tanggal masuk" value="{{old('tanggal masuk', $barang->tanggal_masuk)}}">
        @error('tanggal_masuk')
            {{$message}}
        @enderror
        <input type="text" name="tersedia" placeholder="masukkan tersedia" value="{{old('tersedia', $barang->tersedia)}}">
        @error('tersedia')
            {{$message}}
        @enderror
        <select name="status">
            <option value="Tersedia">Tersedia</option>
            <option value="Tidak Tersedia">Tidak Tersedia</option>
        </select>
        <input type="submit" value="simpan">
    </form>
</body>
</html>
