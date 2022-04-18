@extends('layouts.main')



@section('container')

<h3 style="text-align: center;" class="mt-4">Edit Data Pengunjung</h3>
@foreach($pengunjung as $p)
<div style="width:100%; margin:50px 10px; align:center; margin-left:270px;">
	<form action="/Gudang/update" method="post">
		{{ csrf_field() }}
		<div class="col-6">
			<input type="hidden" name="id" value="{{ $p->kode }}">
				Kode <input class="id form-control" type="text" name="kode" value="{{ $p->kode }}" readonly required> <br/>
				Nama <input class="nama form-control"type="text" name="nama" value="{{ $p->nama }}" required> <br/>
				kategori <select class="form-select" name="kategori" aria-label="Example select with button addon">
					<option selected>{{ $p->kategori }}</option>
					<option value="Anak-Anak">Anak-Anak</option>
					<option value="Remaja">Remaja</option>
					<option value="Dewasa">Dewasa</option>
				</select> <br/>
				Kota Asal <input class="kota form-control" type="text" name="kota" value="{{ $p->kota }}" required> <br/>
				No HP <input class="nohp form-control" type="phonenumber" name="nohp" value="{{ $p->nohp }}" required> <br/>
				Masuk <input class="masuk form-control" type="text" name="masuk" value="{{ $p->masuk }}" required> <br/>
			<input class="btn btn-success"type="submit" value="Simpan Data">
			<a href="/inventory" class="btn btn-danger">Batal</a>
		</div>
	</form>
</div>
	@endforeach
@endsection