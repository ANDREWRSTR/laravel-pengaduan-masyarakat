<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/style.css">
  <title>Document</title>
</head>
<style>

  
  .error{
    position: absolute;
    top:20%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #ff0000; 
    width: 300px; 
    color: #ffff;
    border-radius: 5px;
    border:2px solid black;
    padding: 10px;
    text-align: center;
    font-size: 15px;
    box-shadow: 0 5px 10px 5px rgba(0,0,0,0.2);
  }
</style>
<body>
  <div class="background-wrap">
    <div class="background"></div>
  </div>
  
  @if (session("error"))
    <div class="error">{{session("error")}}</div>
  @endif 

  <form id="accesspanel" action="login_petugas" method="post">
    @method("POST")
    @csrf
    <h1 id="litheader">Login Petugas</h1>
    <div class="inset">
      <p>
        <input type="text" name="username" id="email" placeholder="Username" autocomplete="off">
      </p>
      <p>
        <input type="password" name="password" id="password" placeholder="Password" autocomplete="off">
      </p>
     
    <p class="p-container">
      <input type="submit" name="Login" id="go" value="Login">
    </p>
    <p class="mid">tidak memiliki akun? <a link href="{{ url('registrasi_petugas')}}" class="link" > buat</a></p>
  </form>
</body>
</html>