<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;


class SiswaController extends Controller
{
    public function index()
    {
        $data = Siswa::all();
        return view('siswa', compact('data'));
    }
    public function create()
    {
        return view('siswa_create');
    }
    public function store(Request $request)
    {
        Siswa::create([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'alamat' => $request->alamat
        ]);

        return redirect('/siswa');
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa_edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);

        $siswa->update([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'alamat' => $request->alamat
        ]);

        return redirect('/siswa');
    }

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect('/siswa');
    }
}
