@extends('layout')
@section('maincontent')
    <h1>new show</h1>
    <table class="table table-bordered border-primary">
        <thead class="table-dark">
          <tr>
            <th scope="col">Sr No</th>
            <th scope="col">Name</th>
            <th scope="col">Task</th>
            <th  scope="col-2" colspan="2" style="text-align: center">ACTION</th>
          </tr>
        </thead>

    @foreach ($newtask as $newtask)


        <tbody>
          <tr>
            <td >{{$newtask->id}}</td>
            <td >  {{ $newtask->name }}</td>
            <td>{{$newtask->task}}</td>
            <td ><a href = 'delete/{{ $newtask->id }}'><button type="button" class="btn btn-danger">DELETE</button></a></td>
            <td><a href = 'edit/{{ $newtask->id }}'><button type="button" class="btn btn-info">UPDATE</button></a></td>
          </tr>

        </tbody>


@endforeach
</table>
@endsection
