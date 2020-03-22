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
        <h2 class="card-title">Create New User</h2>
        <form action="{{ route('user.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name')}}" required>
            </div>
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" class="form-control" value="{{ old('username')}}" required>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email')}}" required>
            </div>
            <div class="form-group">
                <label for="password"">{{ __('Password') }}</label>
                <input id=" password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>
            <div class="form-group">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password">
            </div>
            <div class="form-group">
                <label for="">Role</label>
                <div class="form-group default-select">
                <select name="role_id" id="role_id" required
                    class="form-control {{ $errors->has('role_id') ? 'is-invalid':'' }} select2" style="width: 200px" data-placeholder="Choice Role">
                    <option value=""></option>
                    @foreach ($roles as $row)
                    <option value="{{ $row->id }}">{{ ucfirst($row->role_name) }}</option>
                    @endforeach
                </select>
                </div>
                <p class="text-danger">{{ $errors->first('role_id') }}</p>
            </div>
            <div class="form-group">
                <input type="submit" value="Tambah" class="btn btn-primary pull-right">
            </div>
        </form>
    </div>
</div>
@endsection