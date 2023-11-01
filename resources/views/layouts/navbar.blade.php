<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href={{asset("aa/bs/css/bootstrap.min.css")}}>
  </head>
  <style>
   .logout{
    border: 2px solid black;
    background-color: RGBA(var(--bs-secondary-rgb),var(--bs-bg-opacity,1))!important;
    padding-left:10px;
    padding-right: 10px;
    padding-top:4px;
    padding-bottom: 4px;
    margin-bottom: -11px;
    border-radius: 5px;
   }
   .logout:hover{
    background-color: red;
   }
  </style>
<body>
<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Pengaduan Masyarakat</a>
    <form class="d-flex">
      <a href="{{url('/logout')}}"><button class="logout" type="button">Log Out</button></a>
    </form>
    
  </div>
</nav>
</body>
</html>