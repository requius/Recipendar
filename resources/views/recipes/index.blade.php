@extends('main')

@section('title', 'Recipes list')

@section('content')
    <h1>Recipes List</h1>
    <ul>
        @foreach($recipes as $recipe)
            <li><a href="/recipes/{{ $recipe }}">{{ $recipe->title }}</a></li>
        @endforeach
    </ul>
@endsection