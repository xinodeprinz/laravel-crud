{{-- @extends('layouts.app')

@section('content')
 <div class="container">
    <h1 class="mt-5 text-decoration-underline">Products CRUD Application</h1>
    <div class="mb-3 mt-5">
        <a href="{{ route('create') }}" class="btn btn-lg btn-success">Create Product</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Title</th>
                <th>Price (FRS)</th>
                <th>Created On</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($products as $id => $product)
            <tr>
                <td>{{ ++$id }}</td>
                <td>
                    <a href="/storage/{{ $product->photo }}" target="_blank">
                        <img src="/storage/{{ $product->photo }}" alt="{{ $product->title }}" class="img-fluid product-photo">
                    </a>
                </td>
                <td>{{ $product->title  }}</td>
                <td>{{ number_format($product->price, 2)}}</td>
                <td>{{ \Carbon\Carbon::parse($product->created_at)->format('d-M-Y') }}</td>
                <td class="d-flex">
                    <a href="{{ route('update', ['id' => $product->id]) }}" class="btn btn-outline-primary btn-sm">Update</a>
                    <form action="{{ route('delete', ['id' => $product->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="ms-2 btn btn-outline-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
           @endforeach
        </tbody>
    </table>
 </div>
@endsection --}}

<?php 
print_r(array_count_values([1, 1, 2, 3, 4]));