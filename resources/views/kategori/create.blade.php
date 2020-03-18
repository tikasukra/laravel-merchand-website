@extends('layout')
@section('content')

   <div class="card-body">
                    <br>
                    <form action="{{ route('kategori.store') }}"  id="file-upload-form" accept-charset="utf-8" enctype="multipart/form-data" method="post">

                        @csrf

                        <div class="form-group">
                            <label>Kategori</label>
                            <input type="text" name="kategori_product" class="form-control">

                            @if($errors->has('kategori'))
                                <div class="text-danger">
                                    {{ $errors->first('kategori')}}
                                </div>
                            @endif

                        </div>


                        <div class="form-group">
                            <input type="submit" class="btn btn-info" value="Simpan">
                        </div>

                    </form>

                </div>

@endsection