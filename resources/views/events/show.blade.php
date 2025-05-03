@extends('layouts.app')

@section('content')
    <h2>{{ $event->title }}</h2>
    <p>{{ $event->description }}</p>
    <p><strong>Location:</strong> {{ $event->location }}</p>
    <p><strong>From:</strong> {{ $event->start_time }} to {{ $event->end_time }}</p>
    <a href="{{ url('/register/' . $event->id) }}" class="btn btn-success">Register</a>
@endsection
