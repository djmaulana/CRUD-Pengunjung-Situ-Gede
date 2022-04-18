<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class DashboardController extends Controller
{
    public function index(){
        $total_pengunjung = DB::table('pengunjung')
                ->select(DB::raw("COUNT(nama) as total"))
                ->get();
		$total_kota = DB::table('pengunjung')
                ->select(DB::raw("COUNT(distinct nama) as total"))
                ->get();
		$total_kategori = DB::table('pengunjung')
                ->select(DB::raw("COUNT(distinct kategori) as total"))
                ->get();


        return view('dashboard', ['total_pengunjung' => $total_pengunjung, 'total_kota' => $total_kota, 'total_kategori' => $total_kategori]);
    }

    public function inventory(){

        return view('inventory');
    }

    public function addData(){
        $faker = Faker::create();

        $kode = $faker->unique()->bothify('?-####');

        return view('add', ['kode' => $kode]);
    }
    public function edit(){
        return view('edit');
    }
    
    public function transaction(){
		$transaction = DB::table('transaction')->get();
        $showData= DB::table('transaction')->paginate(10);
        return view('transaction', ['transaction' => $transaction, 'showData' => $showData]);
    }

    public function Addtransaction(){
        $faker = Faker::create();

        $kode = $faker->unique()->bothify('?-####');
        return view('Addtransaction', ['kode' => $kode]);
    }

    public function store(Request $request)
	{
		// insert data ke table transaction
		DB::table('transaction')->insert([
			'kode' => $request->kode,
			'invoice' => $request->invoice,
			'date' => $request->date,
			'total' => $request->total,
		]);
		// alihkan halaman ke halaman pengunjung
		return redirect('/transaction');
 
	}

    public function editTransaction($id)
	{
		$transaction = DB::table('transaction')->where('kode',$id)->get();
		// passing data transaction yang didapat ke view edit.blade.php
		return view('editTransaction',['transaction' => $transaction]);
 
	}

    public function updateTransaction(Request $request)
	{
		DB::table('transaction')->where('kode',$request->id)->update([
			'kode' => $request->kode,
			'invoice' => $request->invoice,
			'date' => $request->date,
			'total' => $request->total,
		]);
		return redirect('/transaction');
	}

    public function hapus($id)
	{
		DB::table('transaction')->where('kode',$id)->delete();
		return redirect('/transaction');
	}

    public function search(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    	// mengambil data dari table pegawai sesuai pencarian data
		$transaction = DB::table('transaction')
		->where('invoice','like',"%".$cari."%")
		->paginate();

		$showData= DB::table('transaction')->paginate(10);
 
    	// mengirim data pegawai ke view index
		return view('transaction',['transaction' => $transaction, 'showData'=> $showData]);
 
	}

}
