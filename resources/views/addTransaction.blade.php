@extends('layouts.main')

@section('container')
 
	<h3 style="text-align: center;" class="mt-4">Tambah Data Transaction</h3>
	<div style="width:100%; margin:50px 10px; align:center; margin-left:270px;">
		<form action="/transaction/store" method="post">
			{{ csrf_field() }}
				<div class="col mb-6">
					<div class="row mb-3">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Kode</label>
						<div class="col-sm-3">
						<input type="text" class="form-control" id="inputEmail3" name="kode" required readonly value="{{$kode}}">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Invoice</label>
						<div class="col-sm-3">
						<input type="text" class="form-control" id="inputEmail3" name="invoice" required>
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Date</label>
						<div class="col-sm-3">
							<input type="date" class="form-control" id="inputEmail3" name="date" required>
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Total</label>
						<div class="col-sm-3" style="margin-left:5px;">
						<input type="number" class="form-control" id="inputEmail3" name="total" required>
						</div>
					</div>
					<div class="col-6 text-center mt-3" style="margin-bottom: 10px;">
						<button type="submit" class="btn btn-success" value="Simpan Data">Simpan</button>
						<a href="/transaction" class="btn btn-danger">Batal</a>
					</div>
				</div>
			</div>
		</form>
	</div>
@endsection