@extends('layouts.app', ['active' => 'contact'])

@section('content')
<div class="container-fluid px-4">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0">Feedback Management</h4>
    </div>

    <!-- Search Form -->
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-success text-white fw-bold">
            Search Feedbacks
        </div>
        <div class="card-body">
            <form action="{{ route('contact.index') }}" method="GET">
                @csrf
                <div class="row align-items-end">
                    <div class="col-md-4">
                        <label for="name" class="form-label">Date</label>
                        <input type="date" class="form-control" name="name" id="name" value="{{ request('name') ?? '' }}" placeholder="Enter brand name">
                    </div>
                    <div class="col-md-4 mt-2 mt-md-0">
                        <button type="submit" class="btn btn-primary me-2">
                            <i class="fa-solid fa-magnifying-glass me-1"></i> Search
                        </button>
                        <a href="{{ route('brand.index') }}" class="btn btn-warning text-black">
                            <i class="fa-solid fa-rotate-left"></i> Clear
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Brand List -->
    <div class="card shadow-sm">
        <div class="card-header bg-success text-white fw-bold">
            Feedbacks List
        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-light text-uppercase">
                    <tr>
                        <th style="width:50px;">No</th>
                        <th style="width:50px;">Name</th>
                        <th style="width:150px;">Email</th>
                        <th style="width:150px;">Message</th>
                        <th style="width:120px;">Date</th>
                        <th style="width:120px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($feedbacks as $key => $feed)
                        <tr>
                            <td>{{ $key + $feedbacks->firstItem() }}</td>
                            <td>{{ $feed->name }}</td>
                            <td>{{ $feed->email }}</td>
                            <td>{{ $feed->message }}</td>
                            <td>{{ Carbon\Carbon::parse($feed->created_at)->format('d-m-Y') }}</td>
                            <td>
                                <form action="{{ route('contact.destroy', $feed) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this feedback?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" title="Delete">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">No brands found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="ms-4 me-4">
            {{$feedbacks->links()}}
        </div>
    </div>
</div>
@endsection
