<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        h1{
            text-align: center;
            color: aqua;
            
        }
    </style>
</head>
<body>
    <div>
        <a href="{{  url('table') }}">Table</a>  |
        <a href="{{  url('registrasi') }}">Registrasi</a>  |
        <a href="{{  url('login') }}">Login</a>  |
        
    </div>
    <h1>{{$TextJudul}}</h1>
</body>
</html>