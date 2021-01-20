@extends('layout')
@section('maincontent')

   <h1>Login</h1>
   <form action="/logincheck" method="GET" style="margin: 10px">
    @csrf
    <label for="fname">Email</label><br><br>

    <input type="email"  id="email" name="email" class="form-control" placeholder="EMAIL" aria-label="Username" aria-describedby="basic-addon1">
    <br>
    <label for="password">Password</label><br><br>
    <input type="password"   id="password" name="password"  class="form-control" placeholder="PASSWORD" aria-label="Username" aria-describedby="basic-addon1">
    <br>


    <button type="submit" class="btn btn-primary" value="submit">Primary</button>
  </form>



@endsection
