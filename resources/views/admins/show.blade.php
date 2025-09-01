@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-gray text-black text-center py-2">
                    <h5 class="mb-0">Admin Profile</h5>
                </div>
                <div class="card-body p-3">
                    <p class="mb-2"><strong>Name:</strong> {{ $admin->name }}</p>
                    <p class="mb-2"><strong>Login Name:</strong> {{ $admin->login_name }}</p>
                </div>
                <div class="card-footer text-center py-2">
                    <a href="{{ route('admin.profile.edit', Auth::guard('admin')->user()->id)  }}" class="btn btn-success btn-sm">
                        <i class="fa fa-edit me-1"></i> Edit
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
