
@extends('layouts.main')


@section('content')
    <h1>Events</h1>
@if($events)

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Location</th>
            <th scope="col">Date</th>
        </tr>
        </thead>
        <tbody>

        @foreach($events as $event)
            <tr>
                <th scope="row">{{ ($loop->index + 1) }}</th>
                <td><a href="{{ route('event', ['id' => $event->id]) }}" class="link-primary">{{ $event->name }}</a></td>
                <td>{{ $event->location }}</td>
                <td>{{ $event->event_date }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>

@else
    <div class="empty">Нічого не знайдено!</div>
@endif
@endsection
