@extends('layouts.app')


@section('content')
    <h2>Create Event</h2>
    <form method="POST" action="{{ url('/events') }}">
        @csrf
        <input name="title" class="form-control" placeholder="Title"><br>
        <textarea name="description" class="form-control" placeholder="Description"></textarea><br>
        <input type="datetime-local" name="start_time" class="form-control"><br>
        <input type="datetime-local" name="end_time" class="form-control"><br>
        <input name="location" class="form-control" placeholder="Location"><br>
        <button class="btn btn-primary">Create</button>
    </form>
@endsection
