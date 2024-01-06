@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Data Kategori
                </div>
                <div class="card-body">
                    <form action="{{route('category.update',$category->id)}}" method="post">
                        @csrf @method('put')
                        <div class="form-group">
                            <label for="">Nama Kategori</label>
                            <input type="text" name="category" class="form-control" value="{{$category->category}}"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <input type="text" name="status" class="form-control" value="{{$category->status}}"
                                required>
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
