

@extends('layouts.main')

@section('title', 'Home Page')

@section('content')  
    {{-- @php
        $_name= $name ?? 'Alia'
    @endphp --}}
    @php($_name= $name ?? 'Alia')

    <h1>Hello youu! Home, {{ $_name }} </h1>

    {{--
    1. If name equal to abu, I wan to display 'You are banned!' 
    2. If name equal to arina, I wan to display 'Hi and welcome ARINA!'
    3. If name equal to other than abu/arina, I wan to display 'Hi! Who are you?'
    --}}
    @if ($_name == 'abu')
        <p>You are banned!</p>
    @elseif ($_name == 'arina')
        <p>Hi and welcome ARINA!</p>
    @else
    <p>Hi! Who are you?</p>
    @endif

    <button type="button" class="btn btn-outline-info">CLICK ME</button>
@endsection
