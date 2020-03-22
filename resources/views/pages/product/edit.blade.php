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
        <h2 class="card-title">Edit Product</h2>
        <form action="{{ route('product.update', $products->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" name="product_name" required 
                    value="{{ $products->product_name }}"
                    class="form-control {{ $errors->has('product_name') ? 'is-invalid':'' }}">
                <p class="text-danger">{{ $errors->first('product_name') }}</p>
            </div>
            <div class="form-group">
                <label for="">Stock</label>
                <input type="number" name="stock" required 
                    value="{{ $products->stock }}"
                    class="form-control {{ $errors->has('stock') ? 'is-invalid':'' }}">
                <p class="text-danger">{{ $errors->first('stock') }}</p>
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="number" name="price" required 
                    value="{{ $products->price }}"
                    class="form-control {{ $errors->has('price') ? 'is-invalid':'' }}">
                <p class="text-danger">{{ $errors->first('price') }}</p>
            </div>
            <div class="form-group">
                <label for="">Category</label>
                <select name="category_id" id="category_id" 
                    required class="form-control {{ $errors->has('category_id') ? 'is-invalid':'' }}">
                    <option value="">Pilih</option>
                    @foreach ($categories as $row)
                        <option value="{{ $row->id }}" {{ $row->id == $products->category_id ? 'selected':'' }}>
                            {{ ucfirst($row->category_name) }}
                        </option>
                    @endforeach
                </select>
                <p class="text-danger">{{ $errors->first('category_id') }}</p>
            </div>
            <div class="form-group">
                <label for="">Photo</label>
                <input type="file" name="photo" class="form-control">
                <p class="text-danger">{{ $errors->first('photo') }}</p>
                @if (!empty($products->photo))
                    <hr>
                    <img src="{{ asset($products->photo) }}" 
                        alt="{{ $products->product_name }}"
                        width="150px" height="150px">
                @endif
            </div>
            <div class="form-group">
                <button class="btn btn-info btn-sm">
                    <i class="fa fa-refresh"></i> Update
                </button>
            </div>
        </form>
    </div>
</div>

@endsection