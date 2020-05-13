@extends("layout.app")

@section("content")

<section class="section">
  
    <div class="section-header">
      <h1 style="padding-left: 20px">Data Produk</h1>
    </div>
  
    <div class="section-body">
      <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header">
              <form method="GET" class="form-inline">
                <div class="form-group">
                  <input type="text" name="search" class="form-control" placeholder="Search" value="{{ request()->get('search') }}">
                </div>
                <div class="form-group" style="padding-left: 20px">
                  <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                </div>
                <a href="{{ route('product.index') }}" class="pull-right" style="padding-left: 20px">
                    <button type="button" class="btn btn-info">All Data</button>
                  </a>
              </form>
              
            </div>
            <div class="card-header">
              <a href="{{ route('product.create') }}">
                <button type="button" class="btn btn-primary">Add New</button>
              </a><br/><br/>
            <a href="{{ route('excel') }}">
              <button type="button" class="btn btn-success">
                <i class="fas fa-file-excel"></i> &nbsp; Export Excel
              </button>
            </a>
            </div>
  
            <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr align="center">
                      <th scope="col">No.</th>
                      <th scope="col">Nama Produk</th>
                      <th scope="col">Kategori</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Image</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php $no = 1; ?>
                   @forelse($product as $prd)
                    <tr>
                      <td align="center">{{ $no++ }}</td>
                      <td>{{ $prd->nama_product }}</td>
                      <td align="center">{{ $prd->kategori->kategori_product}}</td>
                      <td align="center">IDR - {{ $prd->harga }}</td>
                      <td align="center"> <img src="{{ Storage::url($prd->image) }}" width="80px"> </td>
                      <td align="center">
                        <form action="{{ route('product.destroy', $prd->id) }}" method="POST">
                            <div class="btn-group">
                                <a class="btn btn-sm btn-success edit_modal color" href="{{ route('product.show', $prd->id) }}"><i class="fas fa-th-list"></i></a>
                                <a class="btn btn-sm btn-warning edit_modal color" href="{{ route('product.edit', $prd->id) }}"><i class="fas fa-pen"></i></a>
                                <a onclick="return confirm('Apakah Anda yakin?');" class="btn btn-sm btn-danger delete color"><i class="fas fa-trash"></i></a>
                            </div>
                        </form>
                      </td>
                    </tr>
                   @empty
                    <tr>
                      <td colspan="3"><center>Data Belum Tersedia</center></td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>
                <br/>
                {!! $product->links() !!}

              </div>
            </div>
          </div>
        </div>  
    </div>
  
  </section>
    
@endsection