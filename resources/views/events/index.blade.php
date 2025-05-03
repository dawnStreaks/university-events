@extends('layouts.app')

@section('content')
    <h2>Upcoming Events</h2>
    @foreach ($events as $event)
        <div class="card mb-3">
            <div class="card-body">
                <h5>{{ $event->title }}</h5>
                <p>{{ $event->description }}</p>
                <p><strong>Date:</strong> {{ $event->start_time->format('d M Y H:i') }}</p>
                <a href="{{ url('/events/' . $event->id) }}" class="btn btn-primary">Details</a>
            </div>
        </div>
    @endforeach
@endsection
