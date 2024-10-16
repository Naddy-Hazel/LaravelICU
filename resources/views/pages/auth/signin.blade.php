@extends('layouts.main')

@section('title', 'Sign In')

@section('content')

<div class="container" mt-5>
    <h1 class="text-center">Sign In</h1>
    <form>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
        <button type="submit" class="btn btn-primary">Sign In</button>
      </form>
</div>

@endsection