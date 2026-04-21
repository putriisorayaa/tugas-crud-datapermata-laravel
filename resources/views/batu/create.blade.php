<!DOCTYPE html>
<html>
<head>
    <title>TAMBAH DATA BATU PERMATA</title>
    <style>
        input {
            display: block;
            margin-bottom: 10px;
            padding: 6px;
            width: 250px;
        }
        button {
            padding: 6px 10px;
        }
        a {
            display: inline-block;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<h1>TAMBAH DATA BATU PERMATA</h1>

<!-- tombol kembali -->
<a href="{{ route('batu.index') }}">← Kembali</a>

<form action="{{ route('batu.store') }}" method="POST">
@csrf

<input type="text" name="nama" placeholder="Nama">
<input type="text" name="jenis" placeholder="Jenis">
<input type="number" name="berat" placeholder="Berat (Karat)">
<input type="number" name="harga" placeholder="Harga">

<button type="submit">Simpan</button>

</form>

</body>
</html>