@extends('layout')
@section('content')

 <div class="card mt-5">
                <div class="card-body">

                <a href="{{ route('kategori.create') }}" class="btn btn-primary"> 
                     <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                            Add New Kategory</a>

                    <table class="table" style="margin-top: 20px">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Kategori</th>
                                <th>OPSI</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kategori as $k)
                            <tr>
                                <td>{{ $k->id }}</td>
                                <td>{{ $k->kategori_product }}</td>

                                <td>
                                    <a onclick="return confirm('Apakah Anda yakin?');" href="{{ route('kategori.destroy', ['id' => $k->id]) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                        <br/>
                    
                </div>
            </div>
@endsection