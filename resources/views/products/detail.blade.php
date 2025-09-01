@extends('layouts.app',[
    'active' => 'product'
])
@php
    $route = $product? 'product.update' : 'product.store'
@endphp
@section('content')

<div class="container">
    <div class="d-flex justify-content-end mb-3">
        <a href="{{route('product.index')}}" class="btn btn-success shadow-sm">
            <i class="fa-solid fa-arrow-left me-1"></i>Back
        </a>
    </div>
    <div class="d-flex justify-content-center">
        <div class="card col-md-10">
            <di class="card-header">
                <h5>Product Detail</h5>
            </di>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="name" class="form-label">Name</label>
                        </div>
                        <div class="col-md-1">
                            <label for="name" class="form-label"><b>:</b></label>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">{{ $product->name}}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="brand" class="form-label">Brand Name</label>

                        </div>
                        <div class="col-md-1">
                            <label for="name" class="form-label"><b>:</b></label>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">{{ $product->brand->name}}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="description" class="form-label">Description</label>
                        </div>
                        <div class="col-md-1">
                            <label for="name" class="form-label"><b>:</b></label>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">{{ $product->description}}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="camera">Camera</label>
                        </div>
                        <div class="col-md-1">
                            <label for="name" class="form-label"><b>:</b></label>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">{{ $product->camera}}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                             <label for="battery" class="form-label">Battery</label>
                        </div>
                        <div class="col-md-1">
                            <label for="name" class="form-label"><b>:</b></label>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">{{ $product->battery}}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="ram" class="form-label">RAM</label>
                        </div>
                        <div class="col-md-1">
                            <label for="name" class="form-label"><b>:</b></label>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">{{ $product->ram}}</label>
                        </div>
                    </div>
                   <div class="row">
                        <div class="col-md-3">
                            <label for="storage" class="form-label">Storage</label>
                        </div>
                        <div class="col-md-1">
                            <label for="name" class="form-label"><b>:</b></label>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">{{ $product->storage}}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="color" class="form-label">Status</label>
                        </div>
                        <div class="col-md-1">
                            <label for="name" class="form-label"><b>:</b></label>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">{{ $product->status}}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="price" class="form-label">Price</label>
                        </div>
                        <div class="col-md-1">
                            <label for="name" class="form-label"><b>:</b></label>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">{{ $product->price}}</label>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-3">
                            <label for="image" class="form-label"> Main Product Image</label>
                        </div>
                        <div class="col-md-1">
                            <label for="name" class="form-label"><b>:</b></label>
                        </div>
                        <div class="col-md-6">
                            <a href="{{asset( $product->img_path)}}" class="btn btn-success btn-sm"><i class="fa fa-solid fa-eye"></i></a>
                        </div>
                    </div>
                   <div class="row mb-2">
                        <div class="col-md-3">
                            <label for="additionals" class="form-label">Additional Images</label>
                        </div>
                        <div class="col-md-1">
                            <label for="name" class="form-label"><b>:</b></label>
                        </div>
                        <div class="col-md-6">
                            @foreach ($product->photos as $photo)
                                <a href="{{asset($photo->path)}}" class="btn btn-success btn-sm"><i class="fa fa-solid fa-eye"></i></a>
                                &nbsp;
                            @endforeach
                        </div>
                    </div>
                   <div class="row">
                        <div class="col-md-3">
                            <label for="screen_size">Display Size</label>
                        </div>
                        <div class="col-md-1">
                            <label for="name" class="form-label"><b>:</b></label>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">{{ $product->screen_size}}</label>
                        </div>
                    </div>
                   <div class="row">
                        <div class="col-md-3">
                            <label for="color" class="form-label">Color</label>
                        </div>
                        <div class="col-md-1">
                            <label for="name" class="form-label"><b>:</b></label>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">{{ $product->color}}</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <label for="stock" class="form-label">Stock</label>
                        </div>
                        <div class="col-md-1">
                            <label for="name" class="form-label"><b>:</b></label>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">{{ $product->stock}}</label>
                        </div>
                    </div>


        </div>
</div>
@endsection