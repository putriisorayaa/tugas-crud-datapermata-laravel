<!DOCTYPE html>
<html>
<head>
    <title>EDIT DATA BATU PERMATA</title>
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

<h1>EDIT DATA BATU PERMATA</h1>

<!-- tombol kembali -->
<a href="{{ route('batu.index') }}">← Kembali</a>

<form action="{{ route('batu.update', $data->id) }}" method="POST">
@csrf
@method('PUT')

<input type="text" name="nama" value="{{ $data->nama }}" placeholder="Nama">
<input type="text" name="jenis" value="{{ $data->jenis }}" placeholder="Jenis">
<input type="number" name="berat" value="{{ $data->berat }}" placeholder="Berat (Karat)">
<input type="number" name="harga" value="{{ $data->harga }}" placeholder="Harga">

<button type="submit">Update</button>
</form>

</body>
</html>