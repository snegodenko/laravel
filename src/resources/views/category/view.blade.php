
@extends('layouts.main')

@section('content')
    <h1>All categories</h1>
    @if($categories->isNotEmpty())
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Updated</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>

            @foreach($categories as $cat)
                <tr>
                    <th scope="row">{{ ($loop->index + 1) }}</th>
                    <td>{{ $cat->id }}</td>
                    <td><a href="{{ route('category.update', ['id' => $cat->id]) }}" class="link-primary">{{ $cat->name }}</a></td>
                    <td>{{ $cat->description }}</td>
                    <td>{{ $cat->updated_at }}</td>
                    <td>
                        <a href="{{ route('category.update', ['id' => $cat->id]) }}" class="link-primary">Update</a>
                        <a href="{{ route('category.delete', ['id' => $cat->id]) }}" class="link-primary">Delete</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    @else
        <div class="empty-string">У вас немає жодної категорії(:</div>
    @endif
@endsection
