
@extends('layouts.main')

@section('content')
    <h1>Update category {{ $category->name }}</h1>
    <div class="page-content mt-5">
        <div class="form" style="max-width: 400px;">
            <form action="{{ route('category.update', ['id' => $category->id]) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input class="form-control" type="text" name="name" required placeholder="Category name" value="{{ $category->name }}">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" name="description" required placeholder="Category discription" value="{{ $category->description }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
