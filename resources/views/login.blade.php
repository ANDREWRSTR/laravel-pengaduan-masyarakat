<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/style.css">
  <title>Document</title>
</head>
<body>
  <div class="background-wrap">
    <div class="background"></div>
  </div>
  
  <form id="accesspanel" action="login" method="post">
    @method("POST")
    @csrf
    <h1 id="litheader">Login</h1>
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
    <p class="mid">tidak memiliki akun? <a link href="{{ ('registrasi')}}" class="link" > buat</a></p>
  </form>
</body>
</html>