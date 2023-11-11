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
    .select{
        width: 900px;
        height: 40px;
        border-radius: 5px;
    }
    

</style>
    <body>
        <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
            <div class="container-fluid">
            <a class="navbar-brand" >Pengaduan Masyarakat</a>
            {{-- <form class="d-flex">
                <button class="btn btn-secondary" type="button">Log Out</button>
            </form> --}}
            </div>
        </nav>
        
       <a href="{{url('petugas')}}" class="home">Home</a><br>


    <div class="text-bg-secondary p-3">
    <div class="container">
        <form action={{url ("/status/$pengaduan->id_pengaduan")}} method="POST">
            @method("POST")
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label" style="color:black"><b>Proses</b></label><br>
                 <select name="status" class="form-select" >
                    <option selected>{{$pengaduan->status}}</option>
                    <option value="proses" >proses</option>
                    <option value="selesai" >selesai</option>
                  </select>  
            </div>
            <button type="submit" class="btn btn-dark">Simpan</button>
        </form>
    </div>
    </div>  
</body>
</html>