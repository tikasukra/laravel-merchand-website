@extends('layout')
@section('content')

 <div class="card mt-5">
                <div class="card-body" style="text-align: center;">

                    <img src="{{ Storage::url($product->image) }}" height="250px"><br><br>

                    <table class="table">
                        <thead>
                        <tr>
                            <th>Nama Produk</th>
                            <th>{{ $product->nama_product }}</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Kategori Produk</td>
                                <td>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td>
                                    {{ $product->stok }}
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal Pre-Order</td>
                                <td>
                                    {{ $product->date }}
                                </td>
                            </tr>
                            <tr>
                                <td>Pilihan Warna</td>
                                <td>
                                    {{ $product->color }}
                                </td>
                            </tr>
                            <tr>
                                <td>Harga Produk</td>
                                <td>
                                    IDR {{$product->harga}}
                                </td>
                            </tr>
                            <tr>
                                <td>Deskripsi Produk</td>
                                <td>
                                    {{ $product->description }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
    
                </div>
            </div>
@endsection