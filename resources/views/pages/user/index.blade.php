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
        <div class="card-title">
            <a href="{{ route('user.create') }}" class="btn btn-primary">Create New</a>
        </div>
        <table id="example1" class="table table-striped table-bordered" style="text-align: center">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Username</td>
                    <td>Email</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <form action="{{ route('user.destroy', $user->id) }}" method="post"
                                class="sa-remove" id="data-{{ $user->id }}">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                              </form>
                                <a href="{{route('user.edit', $user->id)}}" class="btn btn-warning btn-sm"><i
                                        class="fa fa-edit"></i><span>Edit</span></a>
                                
                                <button onclick="deleteRow({{ $user->id }})" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
<script>
    function deleteRow(id){
      swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this data!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      }).then((willDelete) => {
        if(willDelete){
          $('#data-' + id).submit();
        }
      })
    }
  </script>