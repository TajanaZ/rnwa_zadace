@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="/categories/{{$category->category_id}}" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" name="category_id" value="{{$category->category_id}}">
            <div class="row">
                <label for="category_name">Naziv</label>
                <input type="text" class="form-control" name="category_name"  value="{{$category->category_name}}">
            </div>
            <div class="row">
                <br><br>
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

@endsection
