<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href={{asset("aa/bs/css/bootstrap.min.css")}}>
</head>
<style>
    body{
            background-color:RGBA(var(--bs-secondary-rgb),var(--bs-bg-opacity,1))!important;
        }
    .home{
        font-size: 30px;
        font-family: fantasy;
        text-decoration: none;
        color: black;
        margin-left: 30px;
        cursor: pointer;
    }
    

</style>
    <body>
        <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
            <div class="container-fluid">
            <a class="navbar-brand" >Pengaduan Masyarakat</a>
            <form class="d-flex">
                <button class="btn btn-secondary" type="button">Log Out</button>
            </form>
            </div>
        </nav>
        
       <a href="{{url('table')}}" class="home">Home</a><br>


    <div class="text-bg-secondary p-3">
    <div class="container">
        <form action={{url ("/update_pengaduan/$pengaduan->id_pengaduan")}} method="POST">
            @method("POST")
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label" style="color:black"><b>Laporan Anda</b></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="isi_laporan" required>{{$pengaduan->isi_laporan}}</textarea>
            </div>
            <button type="submit" class="btn btn-dark">Edit</button>
        </form>
    </div>
    </div>  
</body>
</html>