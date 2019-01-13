@extends('main')

@section('title', 'Add New Recipe')

@section('content')
    <div class="container">
        <h1>Edit recipe</h1>
        <form action="/recipes/{{ $recipe->id }}" method="post">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Name of the amazing dish!" required value="{{ $recipe->title }}">
                @if ($errors->has('title'))
                    <a class="text-danger">{{ $errors->first('title') }}</a>
                @endif
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" rows="3" placeholder="What are the steps?">{{ $recipe->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="note">Notes</label>
                <textarea class="form-control" name="note" rows="3">{{ $recipe->note }}</textarea>
            </div>
            <div class="form-group">
                <label for="link">URL Link</label>
                <textarea class="form-control" name="link" rows="1" placeholder="Where did you find it?">{{ $recipe->link }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="/recipes/{{ $recipe->id }}" class="btn btn-secondary" role="button" aria-pressed="true">Cancel</a>
        </form>
    </div>
@endsection
