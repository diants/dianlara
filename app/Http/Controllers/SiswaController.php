<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Siswa::all();
        return view('tampil', compact('data'));
        // dd($data);
        // echo 'test';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('ini fungsi create');
        $sekolah = Sekolah::all();
        return view('tambah', compact('sekolah'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'nis' => 'required|integer',
            'nama' => 'required',
            'alamat' => 'required|string',
            'sekolah_id' => 'required',
        ]);
        Siswa::create($validator);
        return redirect('siswa')->with('success', 'Data Berhasil diinput!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Siswa::find($id);
        $sekolah = Sekolah::all();
        return view('edit', compact('data', 'sekolah'));
    } 
    public function update(Request $request, string $id)
    {
        $validator = $request->validate([
            'nis' => 'required|integer',
            'nama' => 'required',
            'alamat' => 'required|string',
            'sekolah_id' => 'required',
        ]);
        Siswa::find($id)->update($validator);
        return redirect('siswa')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd('ini fungsi destroy');
        Siswa::find($id)->delete();
        return redirect('siswa')->with('success', 'Data berhasil dihapus');
    }
}