@extends('layout')
@section('content')

 <div class="card mt-5">
                <div class="card-body">

                    <form method="GET" class="form-inline">
                                         <!-- Search form -->
                    <div class="active-cyan-3 active-cyan-4 mb-4">
                      <input class="form-control" type="text" aria-label="Search" placeholder="Cari Mahasiswa .." value="{{ request()->get('search') }}" name="search">
                    </div>

                    </form> 
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr style="text-align: center;">
                                <th>ID</th>
                                <th>NAMA PRODUCT</th>
                                <th>PHOTO</th>
                                <th>KATEGORI</th>
                                <th>HARGA</th>
                                <th>KETERANGAN</th>
                                <th>OPSI</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse($product as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->nama_product }}</td>
                                <td><img src="{{ Storage::url($data->image) }}" height="100px"></td>
                                <td>
                                    @foreach($kategori as $k)
                                    @if($data->kategori == $k->id)
                                    {{ $k->kategori_product }}
                                    @endif
                                    @endforeach
                                </td>
                                <td>IDR {{ $data->harga }}</td>
                                <td>@foreach($keterangan as $ket)
                                    @if($data->keterangan == $ket->id)
                                    {{ $ket->keterangan_product }}
                                    @endif
                                    @endforeach</td>
                                <td  style="padding-top: 10px; padding-bottom: 10px">
                                    <a href="{{ route('product.show', ['id' => $data->id]) }}" class="btn btn-secondary">Detail</a><br><br>
                    <a href="{{ route('product.edit', ['id' => $data->id]) }}" class="btn btn-warning">Edit</a><br><br>
                    <a onclick="return confirm('Apakah Anda yakin?');" href="{{ route('product.destroy', ['id' => $data->id]) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                            <!-- ditampilkan ketika data kosong -->
                            @empty
                            <tr>
                                <td colspan="6">Empty Data!</td>
                            </tr>

                            @endforelse

                        </tbody>
                    </table>

                        <br/>

    
                </div>
            </div>
@endsection