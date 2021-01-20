@extends('layout')
@section('maincontent')
<h1 style="margin: 20px">Update Item</h1>
<form action = "/edit/<?php echo $item[0]->id; ?>" method = "post" style="margin: 20px">
    @csrf
    <label for="fname">Name</label><br><br>

    <input type="text"  id="name" name="name" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1" value = '<?php echo$item[0]->name; ?>'>
    <br>
    <br>
    <label for="lname">Job</label><br><br>
    <input type="text"   id="job" name="job"  class="form-control" placeholder="Job" aria-label="Username" aria-describedby="basic-addon1" value = '<?php echo$item[0]->job; ?>'>
    <br>
    <br>


    <button type="submit" class="btn btn-primary" value="submit">UPDATE</button>
  </form>
@endsection
