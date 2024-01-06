@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tamabh Data Produk
                </div>
                <div class="card-body">
                    <form action="{{route('product.update',$product->id)}}" method="post">
                        @csrf @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="">Pilih Kategori</label>
                            <select name="category_id" id="" class="form-control">
                                @foreach($category as $data)
                                <option value="{{$data->id}}">{{$data->category}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Produk</label>
                            <input type="text" name="product" class="form-control" value="{{$product->product}}"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="number" name="price" class="form-control" value="{{$product->price}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Stok</label>
                            <input type="number" name="stock" class="form-control" value="{{$product->stock}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <input type="text" name="status" class="form-control" value="{{$product->status}}" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
