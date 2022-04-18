@extends('layouts.main')



@section('container')

<h3 style="text-align: center;" class="mt-4">Edit Data Transaction</h3>
@foreach($transaction as $p)
<div style="width:100%; margin:50px 10px; align:center; margin-left:270px;">
	<form action="/transaction/update" method="post">
		{{ csrf_field() }}
		<div class="col-6">
			<input type="hidden" name="id" value="{{ $p->kode }}">
				Kode <input class="kode form-control" type="text" name="kode" value="{{ $p->kode }}" readonly required> <br/>
				Invoice <input class="invoice form-control"type="text" name="invoice" value="{{ $p->invoice }}" required> <br/>
				Date <input class="desk form-control" required name="date" value="{{ $p->date }}" > <br/>
				Total <input class="total form-control" type="number" name="total" value="{{ $p->total }}" required> <br/>
			<input class="btn btn-success"type="submit" value="Simpan Data">
			<a href="/transaction" class="btn btn-danger">Batal</a>
		</div>
	</form>
</div>
	@endforeach
@endsection