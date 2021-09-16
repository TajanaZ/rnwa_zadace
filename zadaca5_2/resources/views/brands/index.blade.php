@extends('layouts.app')

@section('content')

    <div class="row">
        <a class="btn btn-block btn-primary" href="/brands/create">New</a>
    </div>
    <table class="table">
        <tr>
            <th>#</th>
            <th>Naziv</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($brands as $brand)
            <tr>
                <td>{{$row->brand_id}} </td>
                <td> {{$row->brand_name}}</td>
                <td><a href="/posts/{{$row->brand_id}}/edit" class="btn btn-primary btn-xs"> Edit</a>
                </td>
                <td>
                    <form action="/posts/{{$row->brand_id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
