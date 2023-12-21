
@extends('layouts.main')

@section('content')
    <h1>Users</h1>
    @if($users)
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
            </tr>
            </thead>
            <tbody>

            @foreach($users as $user)
                <tr>
                    <th scope="row">{{ ($loop->index + 1) }}</th>
                    <td><a href="{{ route('user', ['id' => $user->id]) }}" class="link-primary">{{ $user->name }}</a></td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach

            </tbody>
        </table>
    @else
    @endif
@endsection
