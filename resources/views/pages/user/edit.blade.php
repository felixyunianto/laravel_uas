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
        <h2 class="card-title">
            <form action="{{ route('user.update',$users->id) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $users->name }}" required>
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control" value="{{ $users->username }}" required>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $users->email }}" required>
                </div>
                <div class="form-group">
                    <label for="password"">New Password</label>
                    <input id=" password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="password-confirm">Confirm New Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                </div>
                <div class="form-group">
                    <label for="">Status User</label>
                    <select name="status" id="" class="form-control">
                        <option value="{{ $users->role_id }}">{{ $users->role->role_name }}</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Tambah" class="btn btn-primary pull-right">
                </div>
            </form>
        </h2>
    </div>
</div>
@endsection