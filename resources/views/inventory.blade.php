@extends('layouts.main')

@section('container')
    <h2 class="text-center mt-5">Data Pengunjung</h2>
    <div class="row mb-3 mt-5">
        <div class="col-4">
        </div>
        <div class="col-4"></div>
        <div class="col-4">
            <form action="/Gudang/cari" method="GET">
                <div class="input-group">
                    <input type="search" class="form-control rounded" placeholder="Search" name="cari" value="{{old('cari')}}" />
                    <button type="submit" class="btn btn-primary">search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-md align-middle">
            <thead>
            <tr>
                <th scope="col">Kode</th>
                <th scope="col">Nama</th>
                <th scope="col">Kategori</th>            
                <th scope="col">Kota Asal</th>
                <th scope="col">No HP</th>
                <th scope="col">Masuk</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pengunjung as $p)
			<tr>
				<td>{{ $p->kode }}</td>
				<td>{{ $p->nama }}</td>
				<td>{{ $p->kategori }}</td>
				<td>{{ $p->kota }}</td>
				<td>{{ $p->nohp }}</td>
                <td>{{ $p->masuk }}</td>					
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
        <div class="d-flex justify-content-center mb-5">
            {!! $showData->links() !!}
        </div>
    </div>
@endsection
