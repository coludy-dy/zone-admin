@php
    $notiCount = App\Models\Contact::count();
@endphp

<nav class="navbar navbar-expand-lg px-4" style="background-color: rgb(168, 231, 175);height:80px">
    <div class="container-fluid">
        <ul class="navbar-nav ms-auto align-items-center">
            <li class="nav-item position-relative">
                <a href="{{route('contact.index')}}" class="nav-link nav-cart">
                    <i class="fa-solid fa-bell"></i>
                    @if($notiCount > 0)
                        <span class="position-absolute top-10 start-100 translate-middle badge rounded-pill bg-danger" style="width:25px">
                            {{ $notiCount }}
                        </span>
                    @endif
                </a>
            </li>
            <!-- Admin Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-black" href="#" data-bs-toggle="dropdown">
                    {{ optional(Auth::guard('admin')->user())->name ?? 'Guest' }}
                </a>


                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{ route('admin.profile.show') }}">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</nav>
