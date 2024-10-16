@extends('layouts.main')

@section('title', 'Feed List')

@section('content')
{{-- {{ dd($feed) }} --}}

<form action="{{ route('feed.update',['feed' => $feed->id]) }}" method="POST">
@csrf {{-- cross site request forgery --}}
@method('PUT')
    <h1>Feed Edit Page</h1>

    <div class="container">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $feed->title) }}" required>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" col="30" rows="10" maxlength=100 minlength=3 required>{{ old('description', $feed->description) }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update Feed</button>
    </div>
</form>
@endsection