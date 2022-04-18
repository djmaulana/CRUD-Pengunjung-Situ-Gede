@extends('layouts.main')


@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100 text-white bg-success">
                <div class="card-body">
                    <h3 class="card-title text-center fw-normal border-bottom">Total Pengunjung</h3>
                    <p class=" card-text text-center fs-1 fw-bolder">{{ $total_pengunjung[0]->total }} Orang</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 text-white bg-success">
                <div class="card-body">
                    <h3 class="card-title text-center fw-normal border-bottom">Total Kota</h3>
                    <p class=" card-text text-center fs-1 fw-bolder">{{ $total_kota[0]->total }} Kota</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 text-white bg-success">
                <div class="card-body">
                    <h3 class="card-title text-center fw-normal border-bottom">Total Kategori</h3>
                    <p class=" card-text text-center fs-1 fw-bolder">{{ $total_kategori[0]->total }}</p>
                </div>
            </div>
        </div>
      </div>
@endsection
