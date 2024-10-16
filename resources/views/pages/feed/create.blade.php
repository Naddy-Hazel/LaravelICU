
@extends('layouts.main')

@section('title', 'Feed List')

@section('content')
{{-- {{ dd($feed) }} --}}
<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

<form action="{{ route('feed.store') }}" method="POST">
@csrf {{-- cross site request forgery --}}

    <h1 class="text-center">Feed Create Page</h1>

    <div class="container">
        <div class="mb-3" >
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" col="30" rows="10" maxlength=100 minlength=3></textarea>
        </div>
        <button type="submit" class="btn btn-success">Save Feed</button>
    </div>

</form>
@endsection