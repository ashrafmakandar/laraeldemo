<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

</head>
<body>
<div class="container" style="background-color:snow;width:100%;">
    <nav class="navbar navbar-dark bg-dark" style="background-color: royalblue;margin:10px">
        <div class="container-fluid" style="margin: ">
          <a class="navbar-brand" href="/add" style="color: white">Add</a>

          <a class="navbar-brand" href="/blogs" style="color:white">Show</a>
          <a class="navbar-brand" href="/items" style="color:white">List</a>
          <a class="navbar-brand" href="/additems" style="color:white">Add item</a>
          <a class="navbar-brand" href="/reg" style="color:white">Register</a>
          <a class="navbar-brand" href="/login" style="color:white">Login</a>

               <a class="navbar-brand" href="/newtask" style="color:white">NEWTASK</a>
               <a class="navbar-brand" href="/newshow" style="color:white">LISTTASK</a>
        </div>
      </nav>

@yield('maincontent')
<footer id="sticky-footer" class="py-4 bg-dark text-white-50" style="background-color:rgb(64, 197, 131)">
    <div class="container text-center" style="margin: 250px">
      <h6 style="margin: 20px">Copyright &copy; Kalyani Motors</h6>
    </div>
  </footer>

</div>
