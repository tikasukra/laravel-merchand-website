@extends("layout.app")

@push("style")
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush

@section("content")

<section class="section">
  
    <div class="section-header">
      <h1 style="padding-left: 20px">Data Kategori</h1>
    </div>
  
    <div class="section-body">
      <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header">
				<br/>
              <a href="{{route('kategori.create')}}">
                <button type="button" class="btn btn-primary">Add New</button>
              </a><br/>
            </div>
  
            <div class="card-body">
              <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
    
                        <script>
                            $('#delete-form').submit(function(event){
                                if(!confirm('Anda yakin mau menghapus item ini ?')){
                                    event.preventDefault();
                                }
                            });
                        </script>
    
                        {!! $html->table() !!}
                    </div>
                </div>
            </div>
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

@push("script")
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    {!! $html->scripts() !!}
@endpush