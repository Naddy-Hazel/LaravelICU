@extends('layouts.main')

@section('title', 'AI Page')

@section('content')
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
<div class="container">
    <form action=" {{ route('ai.feed') }}" method="POST">
    @csrf
    @method('GET')
        <h1 class="text-center">Ask the AI</h1>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter your title" required>
        </div>
        <button type="submit" class="btn btn-primary">Generate</button>


        <h1>AI Generated Content</h1>
    
        @if(isset($data) && isset($data['candidates']))
            <div>
                <h2>Generated Response:</h2>
                @foreach($data['candidates'] as $item)
                    @if(isset($item['content']['parts']))
                        @foreach($item['content']['parts'] as $part)
                            <div>
                                {!! $part['text'] !!} <!-- Render HTML directly -->
                            </div>
                        @endforeach
                    @endif
                @endforeach
            </div>
        @elseif(isset($error))
            <div>
                <h2>Error:</h2>
                <p>{{ $error }}</p>
            </div>
        @else
            <p>No content generated.</p>
        @endif
</div>

@endsection