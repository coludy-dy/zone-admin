@extends('layouts.app',['active' => request()->path()])
@section('content')
<div class="container">
    <div class="row g-4 justify-content-center">

        <div class="col-md-4">
            <a href="{{ route('product.index') }}" class="text-decoration-none">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <i class="fas fa-box fa-3x mb-3 text-primary"></i>
                        <h5 class="card-title">Total Products</h5>
                        <p class="card-text">{{ $product_count }}</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
                <a href="{{ route('product.index') }}" class="text-decoration-none">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <i class="fas fa-box fa-3x mb-3 text-primary"></i>
                        <h5 class="card-title">Best Sellers</h5>
                        <p class="card-text">{{ $best_sellers_count }}</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('order.index') }}" class="text-decoration-none">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <i class="fas fa-shopping-cart fa-3x mb-3 text-info"></i>
                        <h5 class="card-title">Total Orders</h5>
                        <p class="card-text">{{ $order_count }}</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="{{ route('user.index') }}" class="text-decoration-none">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <i class="fas fa-users fa-3x mb-3 text-warning"></i>
                        <h5 class="card-title">Registered Users</h5>
                        <p class="card-text">{{ $register_count }}</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="#" class="text-decoration-none">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <i class="fas fa-money-bill-wave fa-3x mb-3 text-success"></i>
                        <h5 class="card-title">Total Revenue</h5>
                        <p class="card-text">{{ number_format($totalRevenue, 0) }} MMK</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="#" class="text-decoration-none">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <i class="fas fa-warehouse fa-3x mb-3 text-danger"></i>
                        <h5 class="card-title">Stock</h5>
                        <p class="card-text">25</p>
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>
@endsection
