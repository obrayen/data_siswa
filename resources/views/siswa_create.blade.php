<h1>Tambah Siswa</h1>

<form action="/siswa/store" method="POST">
    @csrf

    Nama:
    <input type="text" name="nama"><br><br>

    Kelas:
    <input type="text" name="kelas"><br><br>

    Jurusan:
    <input type="text" name="jurusan"><br><br>

    Alamat:
    <input type="text" name="alamat"><br><br>

    <button type="submit">Simpan</button>
</form>
<a href="/siswa">Kembali ke Data Siswa</a>
