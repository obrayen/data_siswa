<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>

<h1>Data Siswa</h1>

<a href="/siswa/create">Tambah Siswa</a>

<br><br>

<table border="1" cellpadding="8">
    <tr>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>

    @foreach ($data as $s)
    <tr>
        <td>{{ $s->nama }}</td>
        <td>{{ $s->kelas }}</td>
        <td>{{ $s->jurusan }}</td>
        <td>{{ $s->alamat }}</td>
        <td>
            <a href="/siswa/edit/{{ $s->id }}">Edit</a>

            <form action="/siswa/delete/{{ $s->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>
 
