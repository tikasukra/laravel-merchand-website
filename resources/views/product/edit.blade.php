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
			<h1 class="m-0 text-dark">Edit Data Produk</h1>
		</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
<br/>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<form action="{{ route('product.update', $product->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
						{{-- <input type="hidden" name="_method" value="PUT"> --}}
						{{ method_field('PUT') }}
						@csrf
						<!-- laraveel v5.5 ke bawah -->
						<!-- {{ csrf_field() }} -->
				
						<div class="form-group">
							<label class="control-label">Nama Produk</label>
						<input type="text" name="nama_product" class="form-control" value="{{ $product->nama_product }}">
						</div>
						<div class="form-group">
							<label for="ruangan_id" class="control-label">Kategori</label>
							  <select class="form-control" name="kategori_id">
								@foreach( $kategori as $k)
								<option value="{{ $k->id_kategori }}" {{ $k->id_kategori == $product->kategori_id ? 'selected="selected"' : '' }}> {{ $k->kategori_product }} </option>
								@endforeach
							  </select>
						</div>
						<div class="form-group">
							<label class="control-label">Harga</label>
							<input class="form-control" name="harga" value="{{ $product->harga }}"</input>
						</div>
						<div class="form-group">
                            <label class="control-label">Keterangan</label>
                            <select class="form-control" name="keterangan_id">
                                @foreach($keterangan as $ket)
                                    <option value="{{ $ket->id_keterangan }}" {{ $ket->id_keterangan == $product->keterangan_id ? 'selected="selected"' : '' }}>{{ $ket->keterangan_product }}</option>
                                @endforeach
                            </select>
						</div>
						<div class="form-group">
							<label class="control-label">Stok Barang</label>
							<input class="form-control" name="stok" value="{{ $product->stok }}"></input>
						</div>
						<div class="form-group">
							<label class="control-label">Durasi Pre Order</label>
							<input class="form-control" name="date" value="{{ $product->date }}"></input>
						</div>
						<div class="form-group">
							<label class="control-label">Warna Tersedia</label>
							<input class="form-control" name="color" value="{{ $product->color }}"></input>
						</div>
						<div class="form-group">
							<label class="control-label">Deskripsi Produk</label>
							<input class="form-control" name="description" value="{{ $product->description }}"></input>
						</div>
						
						<div class="form-group">
							<img src="{{ Storage::url($product->image) }}" width="80px">
						</div>	
						<div class="form-group">
                            <label class="control-label">Upload Image</label><br/>
                            <input type="file" name="image"</input>
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