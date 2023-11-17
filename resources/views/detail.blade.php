<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="stylesheet" href={{asset("aa/bs/css/bootstrap.min.css")}}>
  </head>
<style>
    body{
            background-color:RGBA(var(--bs-secondary-rgb),var(--bs-bg-opacity,1))!important;
        }
    .buat{
        font-size: 30px;
        font-family: fantasy;
        text-decoration: none;
        color: black;
        margin-left: 30px;
        cursor: pointer;

    }
    h1{
        text-align: center;
        font-family: fantasy;
        color: black;
    }
    .home{
        font-size: 30px;
        font-family: fantasy;
        text-decoration: none;
        color: black;
        margin-left: 30px;
        cursor: pointer;
    }
    .tabel{
      text-align: center;
      width: 320px;
      background-color: #2c3034;
    }
    .trtr{
      background-color: #212529;
      color: white;
      padding: 5px;
      height: 40px;
    }
    .gambar{
      display: flex;
      justify-content: center;
      align-items: center;
      width: 320px;
      margin-bottom: 8px;
      margin-top: 8px;
    }
</style>
<body>
  <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Laporan Pengaduan Masyarakat</a>
      <form class="d-flex">
        {{-- <button class="btn btn-secondary" type="button">Log Out</button> --}}
      </form>
    </div>
  </nav>
    
  
    <a href="{{url('table')}}" class="home">Home</a><br>
    {{-- @extends('layouts.app')

    @section('content') --}}
        
    <div class="container">
     <h1>Detail Laporan Anda</h1>

     <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Tanggal Kejadian</th>
      <th scope="col">Nik</th>
      <th scope="col">Isi Laporan</th>
      {{-- <th scope="col">Foto</th> --}}
      <th scope="col">Status</th>
      
    </tr>
  </thead>
  <tbody>
   @foreach ($pengaduan  as $pengaduan)
       
   
    <tr>
      <td>{{$pengaduan->id_pengaduan}}</td>
      <td>{{$pengaduan->tgl_pengaduan}}</td>
      <td>{{$pengaduan->nik}}</td>
      <td  style="max-width:200px;">{{$pengaduan->isi_laporan}}</td>
      {{-- <td><img src='{{asset("storage/image/".$pengaduan->foto)}}' width="70px"/></td> --}}
      <td>{{$pengaduan->status}}</td>
      
    </tr>
  </tbody>

     </table>
     <table class="tabel">
  <thead>
    <tr class="trtr">
      <th scope="col">Foto</th>
    </tr>  
  </thead>
  <tbody>
     <tr>

       <td class="gambar" ><img src='{{asset("storage/image/".$pengaduan->foto)}}' width="300px" /></td>
       
     </tr>@endforeach
   </tbody>
     </table><br>
    <table class="table table-dark table-striped">
      <thead>
        <tr>
          <th scope="col">Id Petugas</th>
          <th scope="col">Tanggapan</th>
          <th scope="col">Tanggal Tanggapan</th>
          {{-- <th scope="col">Nama Petugas</th> --}}
        </tr>
      </thead>
        <tbody>
     @foreach ($tanggapan  as $tanggapan) 
     
        <tr>
          <td>{{$tanggapan->id_petugas}}</td> 
          <td>{{$tanggapan->tanggapan}}</td>
          <td>{{$tanggapan->tgl_tanggapan}}</td>
          {{-- <td>{{$tanggapan->nama_petugas}}</td>  --}}
      </tr> 
    
    @endforeach
 </tbody>
    </table>     
        
</div><br><br><br>
