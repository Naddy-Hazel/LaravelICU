@extends('layouts.main')

@section('title', 'Feed List')

@section('content')
    {{-- {{ dd($feeds) }} --}}
    
    

    <div class="container">

        @if (@session('success'))
            <div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif 

        <h1 class="text-center">Feed List</h1>

        <a type="button" class="btn btn-primary mb-3" href="{{ route('feed.create')}}">New Feed</a>
        @foreach ($feeds as $feed)
            <div class="card mb-3" style="width: 85%;">
                <div class="card-body">
                    <h5 class="card-title">{{ $feed->title }}</h5>
                    <p class="card-text" style="color: #646363">{{ $feed->description }}</p>
                </div>
            </div>
        @endforeach

        <div class="d-flex justify-content-start">
            {{ $feeds->links() }}
        </div>
    </div>
@endsection