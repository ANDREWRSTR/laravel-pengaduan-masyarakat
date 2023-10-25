<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="aa/bs/css/bootstrap.min.css">
    <title>Document</title>
</head>
<style>
    body{
        background-color:RGBA(var(--bs-secondary-rgb),var(--bs-bg-opacity,1))!important;
    }
    h1{
        font-family: fantasy;
        text-align: center;

    }
</style>
<body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Pengaduan Masyarakat</a>
          <form class="d-flex">
            <a href="{{url('/petugas/logout')}}" class="btn btn-secondary" type="button">Log Out</button></a>
          </form>
        </div>
      </nav>
      <br>
    <div class="container">
        <h1>Laporan masyarakat</h1>
   
        <table class="table table-dark table-striped">
     <thead>
       <tr>
         <th scope="col">Id</th>
         <th scope="col">Tanggal Kejadian</th>
         <th scope="col">Nik</th>
         <th scope="col">Isi Laporan</th>
         <th scope="col">Foto</th>
         {{-- <th scope="col">Status</th> --}}
         
       </tr>
     </thead>
     <tbody>
      @foreach ($pengaduan  as $pengaduan)
          
      
       <tr>
         <td>{{$pengaduan->id_pengaduan}}</td>
         <td>{{$pengaduan->tgl_pengaduan}}</td>
         <td>{{$pengaduan->nik}}</td>
         <td  style="max-width:200px;">{{$pengaduan->isi_laporan}}</td>
         <td><img src='{{asset("storage/image/".$pengaduan->foto)}}' width="70px"/></td>
         {{--<td>{{$pengaduan->status}}</td>--}}
         
       </tr>@endforeach
     </tbody>
   </table>
     
   </div>
   
</html>