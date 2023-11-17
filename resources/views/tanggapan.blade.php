<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href={{asset("aa/bs/css/bootstrap.min.css")}}>
</head>
    <style>
        body{
              background-color: RGBA(var(--bs-secondary-rgb),var(--bs-bg-opacity,1))!important; 
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
          </form>
        </div>
    </nav>
    <a href="{{url('petugas')}}" class="home">Home</a><br>
        <div class="container">
            <form action={{url ("/katakata/$pengaduan->id_pengaduan")}} method="POST">
              @method("POST")
              @csrf
              <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label" style="color:black"><b>Tanggapan</b></label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="keterangan" required></textarea>
                  @error ('isi_laporan')
                      <div> {{$message}}</div>
                  @enderror
              </div> 
              {{-- <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label" style="color:black"><b>Proses</b></label><br>
                 <select name="status" class="form-select" >
                    <option selected></option>
                    <option value="proses" >proses</option>
                    <option value="selesai" >selesai</option>
                  </select>  
            </div> --}}
            <button type="submit" class="btn btn-dark">Simpan</button>
            </form>
</div>
</body>
</html>