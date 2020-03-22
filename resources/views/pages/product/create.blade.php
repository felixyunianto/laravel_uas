@extends('layouts.app')
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Management Product</a>
        </li>
        <li class="breadcrumb-item active">
            <a href="#">Product</a>
        </li>
    </ol>
</nav>
<div class="card">
    <div class="card-body">
        <h2 class="card-title">Create Product</h2>
        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" name="product_name" required
                    class="form-control {{ $errors->has('product_name') ? 'is-invalid':'' }}" autofocus>
                <p class="text-danger">{{ $errors->first('product_name') }}</p>
            </div>
            <div class="form-group">
                <label for="">Stock</label>
                <input type="number" name="stock" required
                    class="form-control {{ $errors->has('stock') ? 'is-invalid':'' }}" min="1">
                <p class="text-danger">{{ $errors->first('stock') }}</p>
            </div>
            <div class="form-group">
                <label for="">price</label>
                <input type="number" name="price" required
                    class="form-control {{ $errors->has('price') ? 'is-invalid':'' }}" min="1">
                <p class="text-danger">{{ $errors->first('price') }}</p>
            </div>
            <div class="form-group">
                <label for="">Kategori</label>
                <div class="form-group default-select">
                <select name="category_id" id="category_id" required
                    class="form-control {{ $errors->has('price') ? 'is-invalid':'' }} select2" style="width: 200px" data-placeholder="Pilih Kategori">
                    <option value=""></option>
                    @foreach ($categories as $row)
                    <option value="{{ $row->id }}">{{ ucfirst($row->category_name) }}</option>
                    @endforeach
                </select>
                </div>
                <p class="text-danger">{{ $errors->first('category_id') }}</p>
            </div>
            <div class="custom-file" style="width: 300px;">
                <input type="file" class="custom-file-input" id="validatedCustomFile"name="photo">
                <label class="custom-file-label" for="validatedCustomFile"></label>
                <p class="text-danger">{{ $errors->first('photo') }}</p>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-sm" style="float: right">
                    <i class="fa fa-send"></i> Save
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
