@extends('main')

@section('title', 'Recipes list')

@section('content')
    <div class="container">
        <h1>Recipes List</h1>

        <a href="/recipes/create" class="btn btn-primary" role="button" aria-pressed="true">Add new recipe</a>
        <br><br>
        <ul class="list-group">
            @foreach($recipes as $recipe)
                <li class="list-group-item">
                    <a href="/recipes/{{ $recipe->id }}">{{ $recipe->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection