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
        <div class="card-title">
            <a href="{{route('product.create')}}" class="btn btn-primary">Create Product</a>
        </div>
        <table id="example1" class="table table-striped table-bordered" style="text-align: center">
            <thead>
                <tr align="center">
                    <th>#</th>
                    <th width=10%"">Product Code</th>
                    <th width="20%">Product Name</th>
                    <th width="7%">Stock</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td style="text-align: center">
                        @if (!empty($product->photo))
                        <img src="{{ asset($product->photo) }}" alt="{{ $product->product_name }}" width="50px"
                            height="50px">
                        @else
                        <img src="http://via.placeholder.com/50x50" alt="{{ $row->name }}">
                        @endif
                    </td>
                    <td>{{ $product->code_product }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->category->category_name }}</td>
                    <td>
                        <form action="{{ route('product.destroy', $product->id) }}" method="post" class="sa-remove"
                            id="data-{{ $product->id }}">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                        </form>
                        <a href="{{route('product.edit', $product->id)}}" class="btn btn-warning btn-sm"><i
                            class="fa fa-edit"></i><span>Edit</span></a>
                        <button onclick="deleteRow({{ $product->id }})" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
<script>
    function deleteRow(id) {
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this data!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                $('#data-' + id).submit();
            }
        })
    }

</script>
