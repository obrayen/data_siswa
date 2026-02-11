<h1>Edit Siswa</h1>

<form action="/siswa/update/{{ $siswa->id }}" method="POST">
    @csrf
    @method('PUT')

    Nama:
    <input type="text" name="nama" value="{{ $siswa->nama }}"><br><br>

    Kelas:
    <input type="text" name="kelas" value="{{ $siswa->kelas }}"><br><br>

    Jurusan:
    <input type="text" name="jurusan" value="{{ $siswa->jurusan }}"><br><br>

    Alamat:
    <input type="text" name="alamat" value="{{ $siswa->alamat }}"><br><br>

    <button type="submit">Update</button>
</form>
<a href="/siswa">Kembali ke Data Siswa</a>
