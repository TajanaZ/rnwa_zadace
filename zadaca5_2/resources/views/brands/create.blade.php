@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="/brands" method="post">
            @csrf
            <div class="row">
                <label for="brand_name">Name</label>
                <input type="text" class="form-control" name="brand_name">
            </div>
            <br><br>
            <div class="row">
                <br><br>
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

@endsection
