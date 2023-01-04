@extends('layouts.app')

@section('content')
 <div class="container">
    <div class="d-flex justify-content-between mt-5 mb-4">
        <h1 class="text-decoration-underline text-capitalize">Create Product</h1>
        <div>
            <a href="{{ route('index') }}" class="btn btn-dark">Back</a>
        </div>
    </div>
   <form action="{{ route('update', ['id' => $product->id]) }}" enctype="multipart/form-data" method="post">
    @csrf
      <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" value="{{ old('title') ?? $product->title }}" placeholder="Product title" name="title" class="form-control @error('title')
                            is-invalid
                        @enderror">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="number" value="{{ old('price') ?? $product->price }}" placeholder="Product price" name="price" class="form-control @error('price')
                            is-invalid
                        @enderror">
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
               </div>
               <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" value="{{ old('description') ?? $product->description }}" class="form-control @error('description')
                    is-invalid
                @enderror" placeholder="Product description" cols="30" rows="10"></textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
               </div>
        </div>
        <div class="col-md-3 mt-0 mt-md-4">
            <img src="/storage/{{ $product->photo }}" id="photo-img" alt="" class="img-fluid product-profile">
            <input type="file" name="photo" hidden id="photo-input">
            <button type="button" class="btn btn-dark btn-lg w-100" onclick="previewImage()">Upload Photo</button>
            <div class="mt-2 text-center">
                @error('photo')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
      </div>
      <button type="submit" class="btn btn-dark btn-lg">Create Product</button>
   </form>
 </div>
@endsection