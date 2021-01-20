@extends('layout')
@section('maincontent')

<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
<h1 class="display-1" style="margin: 10px">Add </h1>

    <form action="/additem" method="POST" style="margin: 10px">
        @csrf
        <label for="fname">Name</label><br><br>

        <input type="text"  id="name" name="name" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
        <br>
        <label for="lname">Job</label><br><br>
        <input type="text"   id="job" name="job"  class="form-control" placeholder="Age" aria-label="Username" aria-describedby="basic-addon1">
        <br>


        <button type="submit" class="btn btn-primary" value="submit">Primary</button>
      </form>

@endsection
