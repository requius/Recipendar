@extends('main')

@section('title', 'Add New Recipe')

@section('content')
    <form action="/recipes" method="post">
        @csrf
        <div>
            <input type="text" name="title" placeholder="Recipe Title">
        </div>
        <div>
            <textarea name="description" cols="30" rows="10" placeholder="Recipe Description"></textarea>
        </div>
        <div>
            <textarea name="note" cols="30" rows="5" placeholder="Some notes"></textarea>
        </div>
        <div>
            <textarea name="link" cols="30" rows="1" placeholder="Link to recipe"></textarea>
        </div>
        <button type="submit">Add new recipe</button>

        <div class="notifications">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    </form>
@endsection
