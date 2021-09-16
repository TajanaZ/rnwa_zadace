@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="/categories" method="post">
            @csrf
            <div class="row">
                <label for="category_name">Naziv</label>
                <input type="text" class="form-control" name="category_name">
            </div>
            <br><br>
            <div class="row">
                <br><br>
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

@endsection
