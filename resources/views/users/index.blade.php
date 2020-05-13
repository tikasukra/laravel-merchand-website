@extends("layout.app")

@section("content")

<section class="section">
  
    <div class="section-header">
      <h1 style="padding-left: 20px">My Profile</h1>
    </div>
  
    <div class="section-body">
      <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header">
              
            </div>
  
            <div class="card-body">
                <form action="{{ route('users.index') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">

                    <!-- tipe request bermacam - macam -->
                    <!-- Application/json -> tidak bisa kirim data -->
                    <!-- form/wwware -> tidak bisa kirim data -->
            
                    @csrf
                    <!-- laraveel v5.5 ke bawah -->
                    <!-- {{ csrf_field() }} -->
            
                    <div class="form-group">
                        <p>Nama : </p>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">NIM</label>
                        <input type="text" name="nim" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Alamat</label>
                        <textarea class="form-control" name="address" rows="10" required></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Foto</label>
                        <input type="file" name="photo">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Update Profile</button>
                    </div>
                </form>    
            </div>
          </div>
        </div>  
    </div>
  
  </section>
    
@endsection