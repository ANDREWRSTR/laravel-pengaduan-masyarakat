
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kotok</title>
    <link rel="stylesheet" href="aa/bs/css/bootstrap.min.css">
</head>
    <style>
        body{
            background-color:RGBA(var(--bs-secondary-rgb),var(--bs-bg-opacity,1))!important;
        }
        .btn{
            margin-left:10px;
            border:1px solid white;
        }
        .btn:hover{
            border:1px solid white;
            background-color:black;    
        }
        .kotok {
            text-align: center;
            padding: 40px 0;
            margin-left:20px;
        }
        .welcome {
            font-size: 30px;
            margin-bottom: 20px;
        }
        .gambar {
            max-width: 100%;
            height: auto;
            
        }
        .lapor {
            background-color: black;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            border:1px solid white;
            cursor: pointer;
        }
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        footer {
            background-color: black;
            padding:10px;
            margin-top: auto; 
        }

        .tk {
            max-width: 800px;
            margin: 0 auto;
            text-align: left;
            margin:10px;
            color:white;
        }
        a{
            text-decoration:none;
            color:white;
        }
    </style>
<body>
<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand">Pengaduan Masyarakat</a>
    <form class="d-flex">
        <a href="{{('login')}}"><button class="btn btn-secondary" type="button">Masuk</button></a>
        <a href="{{('registrasi')}}"><button class="btn btn-secondary" type="button">Daftar</button></a>
      </form>
  </div>
</nav>
<div class="kotok">
    <div class="welcome"><b>Selamat datang di Kotok!</b></div>
         <img class="gambar" src="img/lapor.png">
         <h4><b>Laporkan masalah atau keluhan Anda</b></h4>
        
</div>
<footer>
        <div class="tk">
            <p>© Kotok 2023. Hak Cipta Dilindungi.</p>
        </div>
    </footer>
       
</body>
</html>