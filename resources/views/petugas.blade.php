<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/style3.css">
  <title>Document</title>
</head>
<body>
  <div class="background-wrap">
    <div class="background"></div>
  </div>
  
  <form id="accesspanel" action="petugas" method="post">
    @method("POST")
    @csrf
    <h1 id="litheader">Registrasi</h1>
    <div class="inset">
      <p>
        <input type="text" name="nama_petugas"  placeholder="Nama" autocomplete="off">
      </p>
      <p>
        <input type="text" name="username"  placeholder="Username" autocomplete="off">
      </p>
      <p>
        <input type="password" name="passowrd"  placeholder="Password" autocomplete="off">
      </p>
      <p>
        <input type="text" name="telp"  placeholder="No Telepon" autocomplete="off">
      </p>
      <p>
        <select name='level' class="select">
          <option selected ></option>
          <option value="1">admin</option>
          <option value="2">petugas</option>
        </select> 
      </div>
      </p>
    <p class="p-container">
      <input type="submit" name="Login" id="go" value="Register">
    </p>
    <p class="mid">sudah memiliki akun? <a link href="{{ ('login_petugas')}}" class="link" > masuk</a></p>
  </form>
</body>
</html>