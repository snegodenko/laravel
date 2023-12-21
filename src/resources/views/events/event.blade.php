
@extends('layouts.main')

@section('content')
    <h1>{{ 'Event ' . $event->name }}</h1>
    <div class="page-content">
        <table class="table">

            <tbody>
            <tr>
                <th scope="row">Event: </th>
                <td>{{ $event->name }}</td>
            </tr>
            <tr>
                <th scope="row">Description:</th>
                <td>{{ $event->description }}</td>
            </tr>
            <tr>
                <th scope="row">Date:</th>
                <td colspan="2">{{ $event->event_date }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
