<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/style2.css">
  <title>Registrasi</title>
</head>
<body>
  <div class="background-wrap">
    <div class="background"></div>
  </div>
  
  <form id="accesspanel" action="registrasi" method="post">
    @method("POST")
    @csrf
    <h1 id="litheader">Registrasi</h1>
    <div class="inset">
      <p>
        <input type="text" name="nik"  placeholder="Nik" autocomplete="off" required>
      </p>
      <p>
        <input type="text" name="nama"  placeholder="Nama" autocomplete="off" required>
      </p>
      <p>
        <input type="text" name="username"  placeholder="Username" autocomplete="off" required>
      </p>
      <p>
        <input type="text" name="telp"  placeholder="No Telepon" autocomplete="off" required>
      </p>
      <p>
        <input type="password" name="password"  placeholder="Kata Sandi" autocomplete="off" required>
      </p>
    <p class="p-container">
      <input type="submit" name="Login" id="go" value="Register">
    </p>
    <p class="mid">sudah memiliki akun? <a link href="{{ ('login')}}" class="link" > masuk</a></p>
  </form>
</body>
</html>