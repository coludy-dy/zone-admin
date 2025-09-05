@extends('layouts.app',['active' => 'product'])

@php
    $route = $product ? 'product.update' : 'product.store';
@endphp

@section('content')
<div class="container">

    <!-- Back Button -->
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('product.index') }}" class="btn  btn-success shadow-sm">
            <i class="fa-solid fa-arrow-left me-1"></i> Back
        </a>
    </div>

    <!-- Product Form Card -->
    <div class="d-flex justify-content-center">
        <div class="card shadow-lg rounded-4 col-md-10">
            <div class="card-header bg-success text-white fw-bold">
                <h5 class="mb-0">{{ $product ? 'Edit Product' : 'Create Product' }}</h5>
            </div>

            <form action="{{ route($route, ['product' => $product]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if($product)
                    @method('POST')
                @endif
                <div class="card-body">
                    <!-- Product Name & Brand -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Product Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" value="{{ $product? $product->name : '' }}" placeholder="Enter product title" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Brand <span class="text-danger">*</span></label>
                            <select name="brand" class="form-control select2" required>
                                <option value="">Select Brand</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}" {{ $product && $product->brand_id == $brand->id ? 'selected' : '' }}>
                                        {{ $brand->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="mb-3">
                        <label class="form-label">Description <span class="text-danger">*</span></label>
                        <textarea name="description" class="form-control" rows="7" placeholder="Enter product description" required>{{ $product? $product->description : '' }}</textarea>
                    </div>

                    <!-- Camera & Battery -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Camera <span class="text-danger">*</span></label>
                            <input type="text" name="camera" class="form-control" value="{{ $product? $product->camera : '' }}" placeholder="e.g. 50MP Dual Camera" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Battery <span class="text-danger">*</span></label>
                            <input type="text" name="battery" class="form-control" value="{{ $product? $product->battery : '' }}" placeholder="e.g. 5000mAh" required>
                        </div>
                    </div>

                    <!-- RAM & Storage -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">RAM <span class="text-danger">*</span></label>
                            <select name="ram" class="form-control select2" required>
                                <option value="">Choose RAM</option>
                                @foreach ($rams as $key => $ram)
                                    <option value="{{ $key }}" {{ $product && $product->ram == $key? 'selected' : '' }}>{{ $ram }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Storage <span class="text-danger">*</span></label>
                            <select name="storage" class="form-control select2" required>
                                <option value="">Choose Storage</option>
                                @foreach ($storages as $key => $storage)
                                    <option value="{{ $key }}" {{  $product && $product->storage == $key? 'selected' : '' }}>{{ $storage }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Status & Price -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Status <span class="text-danger">*</span></label>
                            <select name="status" class="form-control select2" required>
                                <option value="">Choose Status</option>
                                @foreach ($status as $key => $value)
                                    <option value="{{$key}}" {{ $product && $product->status== $key? 'selected' : '' }}>{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Price <span class="text-danger">*</span></label>
                            <input type="number" name="price" class="form-control" value="{{ $product? $product->price : '' }}" placeholder="e.g. 650000 MMK" required>
                        </div>
                    </div>

                    <!-- Images -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Main Image <span class="text-danger">*</span></label>
                            <input type="file" name="image" class="form-control" accept="image/*" @if(!$product) required @endif>
                            @if ($product && $product->img_path)
                            <br>
                                <a href="{{asset( $product->img_path)}}" class="btn btn-success btn-sm"><i class="fa fa-solid fa-eye"></i></a>
                                <a href="{{route('product.trash-main',['product' => $product])}}" class="btn btn-danger btn-sm"><i class="fa fa-solid fa-trash"></i></a>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Additional Images</label>
                            <input type="file" name="additionals[]" class="form-control" accept="image/*" multiple @if(!$product) required @endif>
                            <br>
                            @if ($product && $product->photos)
                            <span class="fw-bold">Totals: {{$product->photos->count()}}</span> &nbsp;
                            @foreach ($product->photos as $photo)
                                <a href="{{asset($photo->path)}}" class="btn btn-success btn-sm"><i class="fa fa-solid fa-eye"></i></a>
                            @endforeach
                            @endif
                        </div>
                    </div>

                    <!-- Display Size & Color -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Display Size <span class="text-danger">*</span></label>
                            <input type="text" name="screen_size" class="form-control" value="{{ $product? $product->screen_size : '' }}" placeholder='e.g. 6.3" AMOLED' required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Color <span class="text-danger">*</span></label>
                            <select name="color" class="form-control select2" required>
                                <option value="">Choose Color</option>
                                @foreach(['White','Black','Blue','Pink','Gray','Purple'] as $color)
                                    <option value="{{ strtolower($color) }}" {{ $product && $product->color == strtolower($color) ? 'selected' : '' }}>{{ $color }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Stock -->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <label class="form-label">Stock <span class="text-danger">*</span></label>
                            <input type="number" name="stock" class="form-control" value="{{ $product? $product->stock : '' }}" placeholder="Enter stock" required>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-success shadow-sm">
                            <i class="fa-solid {{ $product ? 'fa-pen-to-square' : 'fa-plus' }} me-1"></i>
                            {{ $product ? 'Update' : 'Create' }}
                        </button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection
