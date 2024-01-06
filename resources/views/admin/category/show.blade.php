@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Lihat Data Kategori
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Kategori</label>
                        <input type="text" name="category" class="form-control" value="{{$category->category}}"
                            disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        <input type="text" name="status" class="form-control" value="{{$category->status}}" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
