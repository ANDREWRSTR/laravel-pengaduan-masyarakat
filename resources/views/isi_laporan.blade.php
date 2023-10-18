
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAPOR</title>
    <link rel="stylesheet" href="aa/bs/css/bootstrap.min.css">
</head>
   <style>
    .home{
        font-size: 30px;
        font-family: fantasy;
        text-decoration: none;
        color: black;
        margin-left: 30px;
        cursor: pointer;
    }
    .text-bg-secondary{
        height:100%;
    }
    body{
        background-color: RGBA(var(--bs-secondary-rgb),var(--bs-bg-opacity,1))!important; 
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
        
     
       <a href="{{  ('table') }}" class="home">Home</a><br>
     
      
        <div class="container">
      <form action="isi_laporan" method="POST" enctype="multipart/form-data">
        @method("POST")
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" style="color:black"><b>Laporan Anda</b></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="isi_laporan" required></textarea>
            @error ('isi_laporan')
                <div> {{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label" style="color:black"><b>Foto</b></label>
            <input class="form-control" type="file" id="formFile" name="gambar">
        </div>
<button type="submit" class="btn btn-dark">kirim</button>
  </form>
    </div>

</body>
</html>

