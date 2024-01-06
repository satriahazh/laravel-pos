@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Produk
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for=""> Kategori</label>
                        <input type="text" name="product" class="form-control" value="{{$product->category->category}}"
                            disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Produk</label>
                        <input type="text" name="product" class="form-control" value="{{$product->product}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Harga</label>
                        <input type="number" name="price" class="form-control" value="{{$product->price}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Stok</label>
                        <input type="number" name="stock" class="form-control" value="{{$product->stock}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        <input type="text" name="status" class="form-control" value="{{$product->status}}" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
