@extends('layouts.main')

@section('container')
    <h2 class="text-center mt-5">Data Product</h2>
    <div class="row mb-3 mt-5">
        <div class="col-4">
        </div>
        <div class="col-4"></div>
        <div class="col-4">
            <div class="input-group">
			<form action="/Gudang/cari/{cari}">
                <input type="text" class="form-control rounded" value = "cari"name="cari"placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <button type="submit" class="btn btn-success" value="Simpan Data">Search</button>
            </form>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-md align-middle">
            <thead>
            <tr>
                <th scope="col">Kode</th>
                <th scope="col">Nama</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Jumlah</th>                
                <th scope="col">Expired</th>
                <th scope="col">Harga</th>

            </tr>
            </thead>
            <tbody>
            @foreach($gudang as $p)
			<tr>
				<td>{{ $p->kode }}</td>
				<td>{{ $p->nama }}</td>
				<td>{{ $p->deskripsi }}</td>
				<td>{{ $p->jumlah }}</td>
                <td>{{ $p->expired }}</td>
				<td>{{ $p->harga }}</td>					
                <td style="width:50px;">
					<a href="/Gudang/edit/{{ $p->kode }}" button type="button" class="btn btn-warning" style="width:100%; height:100%;">Edit</a>				
				</td>
				<td style="width:50px;">
					<a href="/Gudang/hapus/{{ $p->kode }}"  button type="button" class="btn btn-danger" style="width:100%; height:100%;">Hapus</a>
				</td>	
			</tr>
            
			@endforeach
            </tbody>
        </table>
    </div>
@endsection
