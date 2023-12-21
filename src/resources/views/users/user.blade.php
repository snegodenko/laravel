
@extends('layouts.main')

@section('content')
    <h1>{{ 'User ' . $user->name }}</h1>
    <div class="page-content">
        <table class="table">

            <tbody>
            <tr>
                <th scope="row">User id: </th>
                <td>{{ $user->id }}</td>
            </tr>
            <tr>
                <th scope="row">Email:</th>
                <td>{{ $user->email }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
