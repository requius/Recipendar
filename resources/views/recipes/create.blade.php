@extends('main')

@section('title', 'Add New Recipe')

@section('content')
    <div class="container">
        <h1>Add new recipe</h1>
        <form action="/recipes" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Name of the amazing dish!"  value="{{ old('title') }}">
                @if ($errors->has('title'))
                    <a class="text-danger">{{ $errors->first('title') }}</a>
                @endif
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" rows="3" placeholder="What are the steps?">{{ old('description') }}</textarea>
            </div>
            <div class="form-group">
                <label for="note">Notes</label>
                <textarea class="form-control" name="note" rows="3">{{ old('note') }}</textarea>
            </div>
            <div class="form-group">
                <label for="link">URL Link</label>
                <textarea class="form-control" name="link" rows="1" placeholder="Where did you find it?">{{ old('link') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/recipes" class="btn btn-secondary" role="button" aria-pressed="true">Cancel</a>
        </form>

        @if ($errors->any())
            <ul>
                @foreach ($errors as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        @endif
        <ul>
            @foreach($ingredients as $ingredient)
                <li>{{ $ingredient->name }}</li>
            @endforeach
        </ul>
    </div>
@endsection
