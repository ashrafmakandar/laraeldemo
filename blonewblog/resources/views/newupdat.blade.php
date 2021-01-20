@extends('layout')
@section('maincontent')

<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

<h1 style="margin: 20px">Update Item</h1>
<form action = "/update/<?php echo $newtask[0]->id; ?>" method = "post" style="margin: 20px">
    @csrf
    <label for="fname">Name</label><br><br>

    <input type="text"  id="name" name="name" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1" value = '<?php echo$newtask[0]->name; ?>'>
    <br>
    <br>
    <label for="lname">task</label><br><br>
    <input type="text"   id="task" name="task"  class="form-control" placeholder="Job" aria-label="Username" aria-describedby="basic-addon1" value = '<?php echo$newtask[0]->task; ?>'>
    <br>
    <br>


    <button type="submit" class="btn btn-primary" value="submit">UPDATE</button>
  </form>
@endsection
