@extends('layout')
@section('content')

   <div class="card-body">
                    <br>
                    <form action="{{ route('product.store' )}}"  id="file-upload-form" accept-charset="utf-8" enctype="multipart/form-data" method="post">

                        @csrf

                        <div class="form-group">
                            <label class="control-label">Nama Product</label>
                            <input type="text" name="nama_product" class="form-control" required>

                        </div>

                         <div class="form-group">
                            <label class="control-label">Kategori</label>
                            <select class="form-control" name="kategori">
                                @foreach($kategori as $k)
                                    <option value="{{ $k->id }}">{{ $k->kategori_product }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label class="control-label">Harga</label>
                            <input name="harga" class="form-control" required="required"></input>
                        </div>

                          <div class="form-group">
                            <label class="control-label">Keterangan</label>
                            <select class="form-control" name="keterangan">
                                @foreach($keterangan as $ket)
                                    <option value="{{ $ket->id }}">{{ $ket->keterangan_product }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Stok</label>
                            <input name="stok" class="form-control"></input>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Pre Order Date</label>
                            <input name="date" class="form-control"></input>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Color</label>
                            <input name="color" class="form-control"></input>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Photo</label>
                            <input type="file" name="image" class="form-control" required="required"></input>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Description Product</label>
                            <textarea class="form-control" name="description" rows="10" cols="5"></textarea>
                        </div>
                       
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                            <a href="{{ route('product.index') }}" class="btn btn-danger">Batal</a>
                        </div>

                    </form>

                </div>

@endsection