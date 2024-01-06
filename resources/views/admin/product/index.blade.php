@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Produk
                    <a href="{{route('product.create')}}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Nama Product</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no = 1; @endphp
                            @foreach($product as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->category->category}}</td>
                                <td>{{$data->product}}</td>
                                <td>{{$data->price}}</td>
                                <td>
                                    <form action="{{route('product.destroy',$data->id)}}" method="post">
                                        @csrf @method('delete')
                                        <a href="{{route('product.edit',$data->id)}}" class="btn btn-success">Edit</a>
                                        <a href="{{route('product.show',$data->id)}}" class="btn btn-warning">Show</a>
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Apakah Anda Yakin ?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
