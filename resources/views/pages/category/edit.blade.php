@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('category.update', $categories->id)}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="">Category Name</label>
                    <input type="text" name="category_name" class="form-control" value="{{ $categories->category_name }}">
                </div>
                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-sm btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection