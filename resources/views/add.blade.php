@extends('layouts.main')

@section('container')
 
	<h3 style="text-align: center;" class="mt-4">Tambah Data Gudang</h3>
 

	<div style="width:100%; margin:50px 10px; align:center; margin-left:270px;">
		<form action="/Gudang/store" method="post">
			{{ csrf_field() }}
				<div class="col mb-6">
					<div class="row mb-3">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Kode</label>
						<div class="col-sm-3">
						<input type="text" class="form-control" id="inputEmail3" name="kode" required readonly value="{{ $kode }}">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
						<div class="col-sm-3">
						<input type="text" class="form-control" id="inputEmail3" name="nama" required>
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
						<div class="col-sm-3">
							<select class="form-select" name="kategori" aria-label="Example select with button addon">
								<option selected>Choose...</option>
								<option value="Anak-Anak">Anak-Anak</option>
								<option value="Remaja">Remaja</option>
								<option value="Dewasa">Dewasa</option>
							  </select>
							{{-- <input type="text" class="form-control" id="inputEmail3" name="kategori" required> --}}
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Kota Asal</label>
						<div class="col-sm-3" style="margin-left:5px;">
						<input type="text" class="form-control" id="inputEmail3" name="kota" required>
						</div>
					</div>
          			<div class="row mb-3">
						<label for="inputEmail3" class="col-sm-2 col-form-label">No HP</label>
						<div class="col-sm-3" style="margin-left:5px;">
						<input type="phonenumber" class="form-control" id="inputEmail3" name="nohp" required>
						</div>
          			</div>
					<div class="row mb-3">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Masuk</label>
						<div class="col-sm-3" style="margin-left:5px;">
						<input type="date" class="form-control" id="inputEmail3" name="masuk" required>
						</div>
					</div>
					<div class="col-6 text-center mt-3" style="margin-bottom: 10px;">
						<button type="submit" class="btn btn-success" value="Simpan Data">Simpan</button>
						<a href="/inventory" class="btn btn-danger">Batal</a>
					</div>
				</div>
			</div>
		</form>
	</div>
@endsection