<h1>DATA BATU PERMATA</h1>

<a href="{{ route('batu.create') }}" > +Tambah Data</a>

@if(session('success'))
<p>{{ session('success') }}</p>
@endif

<style>
    table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 15px;
    }
    th, td {
        padding: 10px;
        border: 1px solid #ccc;
        text-align: center;
    }
    th {
        background-color: #f5f5f5;
    }
    form {
        display: inline;
    }
</style>

<table>
    <tr>
        <th>Nama</th>
        <th>Jenis</th>
        <th>Berat (Karat)</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>

    @foreach($data as $d)
    <tr>
        <td>{{ $d->nama }}</td>
        <td>{{ $d->jenis }}</td>
        <td>{{ $d->berat }}</td>
        <td>Rp {{ number_format($d->harga, 0, ',', '.') }}</td>
        <td>
            <button><a href="{{ route('batu.edit', $d->id) }}" style="text-decoration: none; color:black">Edit</a></button> |
            <form action="{{ route('batu.destroy', $d->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>