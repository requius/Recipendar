@extends('main')

@section('title', 'Recipe')

@section('content')
    <div class="container">
        <div class="row">

            <span class="align-baseline">
                <h1>{{ $recipe->title }} <a href="/recipes/{{ $recipe->id }}/edit" class="btn btn-secondary" role="button" aria-pressed="true">Edit</a></h1>

            </span>
        </div>
        <p>{{ $recipe->description }}</p>
        <p>{{ $recipe->note }}</p>
        <a href="{{ $recipe->link }}">{{ $recipe->link }}</a>
    </div>
@endsection