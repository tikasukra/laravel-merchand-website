@extends('layout.app')

@section('content')

<section class="section">
  
    <div class="section-body">
      <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-header">
                <h2>Tambah Data Kategori</h2>
            </div>
            <div class="card-header">
              <a href="{{ route('kategori.index') }}"> 
                <button type="button" class="btn btn-outline-info">
                  <i class="fas fa-arrow-circle-left"></i> Back
                </button>
            </a>
            </div>
            <div class="card-body">

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
          
            <br/>

              <form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
                
                @csrf
  
                <div class="form-group">
                  <label>Kategori</label>
                  <input type="text" name="kategori_product" class="form-control">
                </div>
  
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">SAVE</button>
                </div>
                </form>
            </div>
          </div>
        </div>  
    </div>
  
  </section>
    
@endsection