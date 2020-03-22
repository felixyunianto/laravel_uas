@extends('layouts.app')
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Management User</a>
        </li>
        <li class="breadcrumb-item active">
            <a href="#">Role</a>
        </li>
    </ol>
</nav>
<div class="card">
    <div class="card-body">
        <h2 class="card-title">Edit Role</h2>
        <form action="{{route('role.update', $roles->id)}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label for="">Role Name</label>
                <input type="text" name="role_name" class="form-control" value="{{ $roles->role_name }}">
            </div>
            <div class="form-group">
                <input type="submit" value="Update" class="btn btn-sm btn-primary">
            </div>
        </form>
    </div>
    
</div>
@endsection