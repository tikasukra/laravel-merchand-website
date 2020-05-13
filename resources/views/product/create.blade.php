@extends("layout.app")

@section("content")

<section class="section">
 
    <div class="section-body">
      <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-body">
				
				<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
			<h1 class="m-0 text-dark">Tambah Data Produk</h1>
		</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
<br/>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">

					@if($errors->any())
						<div class="alert alert-danger alert-dismissible">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>	
						</div>
					@endif

					<form action="{{ route('product.store') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">

						<!-- tipe request bermacam - macam -->
						<!-- Application/json -> tidak bisa kirim data -->
						<!-- form/wwware -> tidak bisa kirim data -->
				
						@csrf
						<!-- laraveel v5.5 ke bawah -->
						<!-- {{ csrf_field() }} -->
				
						<div class="form-group">
							<label class="control-label">Nama Produk</label>
							<input type="text" name="nama_product" class="form-control">
						</div>
						<div class="form-group">
                            <label class="control-label">Kategori</label>
                            <select class="form-control" name="kategori_id">
                                @foreach($kategori as $k)
                                    <option value="{{ $k->id_kategori }}">{{ $k->kategori_product }}</option>
                                @endforeach
                            </select>
                        </div>
						<div class="form-group">
							<label class="control-label">Harga</label>
							<input class="form-control" name="harga"></input>
						</div>
						<div class="form-group">
                            <label class="control-label">Keterangan</label>
                            <select class="form-control" name="keterangan_id">
                                @foreach($keterangan as $ket)
                                    <option value="{{ $ket->id_keterangan }}">{{ $ket->keterangan_product }}</option>
                                @endforeach
                            </select>
						</div>
						<div class="form-group">
							<label class="control-label">Stok Barang</label>
							<input class="form-control" name="stok"></input>
						</div>
						<div class="form-group">
							<label class="control-label">Durasi Pre Order</label>
							<input class="form-control" name="date"></input>
						</div>
						<div class="form-group">
							<label class="control-label">Warna Tersedia</label>
							<input class="form-control" name="color"></input>
						</div>
						<div class="form-group">
							<label class="control-label">Deskripsi Produk</label>
							<input class="form-control" name="description"></input>
						</div>
						<div class="form-group">
                            <label class="control-label">Upload Image</label><br/>
                            <input type="file" name="image"></input>
                        </div>
						<div class="form-group">
							<button class="btn btn-primary" type="submit">Simpan</button>
							<a href="{{ route('product.index') }}" class="btn btn-danger">Batal</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
				
            </div>
            
            </div>
            
            <div class="card-footer text-right">
              <nav class="d-inline-block">
                
              </nav>
            </div>
          </div>
        </div>  
    </div>
  
  </section>



@endsection