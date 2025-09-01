{{-- @php
    $notiCount = App\Models\Order::where('status','=','pending')->count();
@endphp
<div class="sidebar d-flex flex-column p-3 position-fixed" id="sidebar">
    <img src="{{ asset('img/Mobilezone.png') }}" alt="img" width="220px">
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li><a href="{{route('dashboard')}}" class="nav-link ">Dashboard</a></li>
        <li><a href="{{route('brand.index')}}" class="nav-link ">Brand</a></li>
        <li><a href="{{route('product.index')}}" class="nav-link ">Product</a></li>
        <li class="nav-item position-relative">
            <a href="{{route('order.index')}}" class="nav-link ">
                Order
                @if($notiCount > 0)
                    <span class="position-absolute top-50 start-50 translate-middle badge rounded-pill bg-danger">
                        {{ $notiCount }}
                    </span>
                @endif
            </a>
        </li>
        <li><a href="{{route('user.index')}}" class="nav-link ">Customer</a></li>
        <li><a href="{{route('contact.index')}}" class="nav-link ">Feedback</a></li>
    </ul>
</div> --}}
@php
    $notiCount = App\Models\Order::where('status', 'pending')->count();
    $currentRoute = Route::currentRouteName();
@endphp

<div class="sidebar d-flex flex-column p-3 position-fixed" id="sidebar">
    <img src="{{ asset('img/Mobilezone.png') }}" alt="img" width="220px">
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li>
            <a href="{{ route('dashboard') }}" 
               class="nav-link {{ str_starts_with($currentRoute, 'dashboard') ? 'active' : '' }}">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('brand.index') }}" 
               class="nav-link {{ str_starts_with($currentRoute, 'brand.') ? 'active' : '' }}">
                Brand
            </a>
        </li>
        <li>
            <a href="{{ route('product.index') }}" 
               class="nav-link {{ str_starts_with($currentRoute, 'product.') ? 'active' : '' }}">
                Product
            </a>
        </li>
        <li class="position-relative">
            <a href="{{ route('order.index') }}" 
               class="nav-link {{ str_starts_with($currentRoute, 'order.') ? 'active' : '' }}">
                Order
                @if($notiCount > 0)
                    <span class="position-absolute top-50 start-50 translate-middle badge rounded-pill bg-danger">
                        {{ $notiCount }}
                    </span>
                @endif
            </a>
        </li>
        <li>
            <a href="{{ route('user.index') }}" 
               class="nav-link {{ str_starts_with($currentRoute, 'user.') ? 'active' : '' }}">
                Customer
            </a>
        </li>
        <li>
            <a href="{{ route('contact.index') }}" 
               class="nav-link {{ str_starts_with($currentRoute, 'contact.') ? 'active' : '' }}">
                Feedback
            </a>
        </li>
    </ul>
</div>

