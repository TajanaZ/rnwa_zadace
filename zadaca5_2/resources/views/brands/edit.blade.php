@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="/brands/{{$brand->brand_id}}" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" name="brand_id" value="{{$brand->brand_id}}">
            <input type="hidden" name="_method" value="PUT">
            <div class="row">
                <label for="brand_name">Name</label>
                <input type="text" class="form-control" name="brand_name"  value="{{$brand->brand_name}}">
            </div>
            <div class="row">
                <br><br>
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

@endsection
