<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengunjungController extends Controller
{
    public function index()
	{
    	// mengambil data dari table gudang
		$pengunjung = DB::table('pengunjung')->get();
		$showData= DB::table('pengunjung')->paginate(10);
 
    	// mengirim data pengunjung ke view index
		return view('inventory',['pengunjung' => $pengunjung, 'showData' => $showData]);
 
	}
 
	// method untuk menampilkan view form tambah pengunjung
	public function tambah()
	{
 
		// memanggil view tambah
		return view('tambah');
 
	}
 
	// method untuk insert data ke table pengunjung
	public function store(Request $request)
	{
		// insert data ke table pengunjung
		DB::table('pengunjung')->insert([
			'kode' => $request->kode,
			'nama' => $request->nama,
			'kategori' => $request->kategori,
			'kota' => $request->kota,
			'nohp' => $request->nohp,
			'masuk' => $request->masuk,
		]);
		// alihkan halaman ke halaman pengunjung
		return redirect('/inventory');
 
	}
 
	// method untuk edit data pengunjung
	public function edit($id)
	{
		// mengambil data pengunjung berdasarkan id yang dipilih
		$pengunjung = DB::table('pengunjung')->where('kode',$id)->get();
		// passing data pengunjung yang didapat ke view edit.blade.php
		return view('edit',['pengunjung' => $pengunjung]);
 
	}
 
	// update data pengunjung
	public function update(Request $request)
	{
		// update data pengunjung
		DB::table('pengunjung')->where('kode',$request->id)->update([
			'kode' => $request->kode,
			'nama' => $request->nama,
			'kategori' => $request->kategori,
			'kota' => $request->kota,
			'nohp' => $request->nohp,
			'masuk' => $request->masuk,
		]);
		// alihkan halaman ke halaman pengunjung
		return redirect('/inventory');
	}
 
	// method untuk hapus data pengunjung
	public function hapus($id)
	{
		// menghapus data pengunjung berdasarkan id yang dipilih
		DB::table('pengunjung')->where('kode',$id)->delete();
		
		// alihkan halaman ke halaman pengunjung
		return redirect('/inventory');
	}

	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$pengunjung = DB::table('pengunjung')
		->where('nama','like',"%".$cari."%")
		->paginate();

		$showData= DB::table('pengunjung')->paginate(10);

 
    		// mengirim data pegawai ke view index
		return view('inventory',['pengunjung' => $pengunjung, 'showData' => $showData]);
 
	}
}
