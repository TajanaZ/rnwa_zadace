@extends('layouts.app')

@section('content')
    <div class="row">
        <a class="btn btn-block btn-primary" href="/categories/create">New</a>
    </div>
    <table class="table">
        <tr>
            <th>#</th>
            <th>Naziv</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($categories as $row)
            <tr>
                <th scope="row">{{$row->category_id}} </th>
                <td> {{$row->category_name}}</td>
                <td><a href="/categories/{{$row->category_id}}/edit" class="btn btn-primary btn-xs"> Edit</a>
                </td>
                <td>
                    <form action="/categories/{{$row->category_id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
