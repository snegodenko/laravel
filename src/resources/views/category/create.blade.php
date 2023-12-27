
@extends('layouts.main')

@section('content')
    <h1>Create new category</h1>
    <div class="form" style="max-width: 400px;">
        <form action="{{ route('category.create') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input class="form-control" type="text" name="name" required placeholder="Category name">
            </div>
            <div class="mb-3">
                <input class="form-control" type="text" name="description" required placeholder="Category discription">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
