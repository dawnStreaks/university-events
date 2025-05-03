@extends('layouts.app')

@section('content')
    <h2>Register for {{ $event->title }}</h2>
    <form method="POST" action="{{ url('/register') }}">
        @csrf
        <input type="hidden" name="event_id" value="{{ $event->id }}">
        <input name="name" class="form-control" placeholder="Your Name"><br>
        <input name="email" class="form-control" placeholder="Your Email"><br>
        <button class="btn btn-success">Register</button>
    </form>
@endsection
