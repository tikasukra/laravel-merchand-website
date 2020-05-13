@extends("layout.app")

@section("content")

<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-sm-6">
		<h1 class="m-0 text-dark">Detail Data Produk</h1>
		</div><!-- /.col -->
	</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<ul>
					<li>ID : {{ $data->id }}</li>
					<li>Nama : {{ $data->name }} </li>
					<li>NIM : {{ $data->nim }} </li>
					<li>Alamat : {{ $data->address }} </li>
					{{-- <li>File Path : {{ $data->photo }} </li> --}}
					<li>Gambar : </li>
				
					<li><img src="{{ Storage::url($data->photo) }}" height="150px"></li>
				</ul>
				
				<!-- punya helper route -->
				<a href="{{ route('biodata.index') }}">Kembali</a>
			</div>
		</div>
	</div>
</section>


@endsection