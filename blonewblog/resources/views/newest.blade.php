@extends('layout')
@section('maincontent')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">


<h1 class="display-1" style="margin: 10px">show </h1>
    <table class="table table-bordered border-primary">
        <thead class="table-dark">
          <tr>
            <th scope="col">Sr No</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Class</th>
            <th scope="col">Action</th>
          </tr>
        </thead>

    @foreach ($blog as $blog)


        <tbody>
          <tr>
            <td >{{$blog->id}}</td>
            <td >  {{ $blog->name }}</td>
            <td>  {{ $blog->age }}</td>
            <td >{{ $blog->class }}</td>
            <td><a href = 'blogs/{{ $blog->id }}'>Delete</a></td>
          </tr>

        </tbody>


@endforeach
</table>

@endsection
