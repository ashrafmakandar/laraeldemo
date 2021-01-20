@extends('layout')
@section('maincontent')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">


<h1 class="display-8" style="margin: 20px">Items </h1>
    <table class="table table-bordered border-primary">
        <thead class="table-dark">
          <tr>
            <th scope="col" ><h5>Sr No</h5></th>
            <th scope="col"><h5>Name</h5></th>
            <th scope="col"><h5>Job</h5></th>
            <th scope="col" colspan="2" style="text-align: center"><h5>Action</h5></th>
          </tr>
        </thead>

    @foreach ($item as $item)


        <tbody>
          <tr>
            <td >{{$item->id}}</td>


            <td >  {{ $item->name }}</td>
            <td>  {{ $item->job }}</td>
            <td><a href = 'delete/{{ $item->id }}'><button type="button" class="btn btn-danger">DELETE</button></a></td>
            <td><a href = 'edit/{{ $item->id }}'>
                <button type="button" class="btn btn-info">UPDATE</button></a></td>
          </tr>

        </tbody>


@endforeach
</table>

@endsection
