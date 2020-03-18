@extends('layout')
@section('content')

<div class="card-body">
                    <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="{{ route('product.update', ['id' => $product->id]) }}">

                        @csrf

                        
                       <div class="form-group">
                            <label class="control-label">Nama Product</label>
                            <input type="text" name="nama_product" class="form-control" value="{{ $product->nama_product }}">

                        </div>

                         <div class="form-group">
                            <label class="control-label">Kategori</label>
                            <select class="form-control" name="kategori">
                               <option value="" hidden>pilih kategori</option>
                                @foreach($kategori as $k)
                                    <option value="{{ $k->id }}" {{ ($k->kategori == $k->id) ? 'selected' : ''}} >{{ $k->kategori_product }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label class="control-label">Harga</label>
                            <input name="harga" class="form-control" value="{{ $product->harga }}"></input>
                        </div>

                          <div class="form-group">
                            <label class="control-label">Keterangan</label>
                            <select class="form-control" name="kategori">
                               <option value="" hidden>pilih keterangan</option>
                                @foreach($keterangan as $ket)
                                    <option value="{{ $ket->id }}" {{ ($ket->keterangan == $ket->id) ? 'selected' : ''}} >{{ $ket->keterangan_product }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Stok</label>
                            <input name="stok" class="form-control" value="{{ $product->stok }}"></input>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Pre Order Date</label>
                            <input name="date" class="form-control" value="{{ $product->date }}"></input>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Color</label>
                            <input name="color" class="form-control" value="{{ $product->color }}"></input>
                        </div>

                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroupFileAddon01">Photo</span>
                            </div>
                            <div class="custom-file">
                              <input id="file-upload" type="file" name="image" accept="image/*" onchange="readURL(this);" aria-describedby="inputGroupFileAddon01">
                              <label class="custom-file-label" label for="file-upload" id="file-drag">Choose file</label>
                            </div>
                          </div>

                        <div class="form-group">
                            <label class="control-label">Description Product</label>
                            <textarea class="form-control" name="description" rows="10" cols="5">{{ $product->description }}</textarea>
                        </div>
                       
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                            <a href="{{ route('product.index') }}" class="btn btn-danger">Batal</a>
                        </div>


                    </form>

                </div>

@stop