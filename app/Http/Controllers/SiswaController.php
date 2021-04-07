<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = DB::table('employee')->get();
        
        return view('siswa/index', ['siswa' => $siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('/siswa/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|unique:employee',
            'nama' => 'required',
            'alamat' => 'required',
            'gender' => 'required',
            'tgl_lahir' => 'required',
            'email' => 'required',
            'jurusan' => 'required',
        ]);

        $siswa = new Siswa;
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->gender = $request->gender;
        $siswa->tgl_lahir = $request->tgl_lahir;
        $siswa->email = $request->email;
        $siswa->jurusan = $request->jurusan;

        $siswa->save();

        return redirect('/siswa')->with('status', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        return view('/siswa/edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'gender' => 'required',
            'tgl_lahir' => 'required',
            'email' => 'required',
            'jurusan' => 'required',
        ]);

        Siswa::where('id', $siswa->id)
        ->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'gender' => $request->gender,
            'tgl_lahir' => $request->tgl_lahir,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
        ]);

        return redirect('/siswa')->with('status', 'Data berhasil dirubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        Siswa::destroy($siswa->id);
        return redirect('/siswa')->with('status', 'Data berhasil dihapus!');
    }
}
