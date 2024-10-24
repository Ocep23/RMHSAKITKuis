<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pasien;


class PasienController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function daftar()
    {
        return view('daftarpasien');
    }
    public function tambah()
    {
        return view('tambahpasien');
    }

    public function storepasien(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required|date',
            'poliklinik' => 'required',
        ]);
    
        Pasien::create($validatedData);
    
        return redirect()->route('tampilpasien')->with('success', 'Data mahasiswa berhasil ditambahkan');
    }

    public function tampilpasien()
    {
        $pasiens = Pasien::all();
        return view('tampilpasien', ['pasiens' => $pasiens]);
    }

    public function destroy($nopendaftaran)
    {
    // Use DB::table to delete the record from the 'anggota' table by its ID
    $deleted = DB::table('pasiens')->where('nopendaftaran', $nopendaftaran)->delete();

    if ($deleted) {
        return redirect()->route('tampilpasien')->with('success', 'Pasien berhasil dihapus.');
    } else {
        return redirect()->route('tampilpasien')->with('error', 'Pasien tidak ditemukan atau tidak dapat dihapus.');
    }
    }

}
