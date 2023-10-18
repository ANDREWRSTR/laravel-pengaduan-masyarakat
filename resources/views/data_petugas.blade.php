
<style>
    body{
        background-color: RGBA(var(--bs-secondary-rgb),var(--bs-bg-opacity,1))!important;
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
</style>

     @extends('layouts.app')

        @section('content')
     
         <a class="buat" href="{{ url('data_petugas') }}">Buat</a>
    <div class="container">
     <h1>Rekap Laporan Anda</h1>

     <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Id petugas</th>
      <th scope="col">nama petugas </th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">telp</th>
      <th scope="col">level</th>
      
    </tr>
  </thead>
  <tbody>
   @foreach ($petugas  as $petugas)
       
   
    <tr>
      <td>{{$petugas->id_petugas}}</td>
      <td>{{$petugas->nama_petugas}}</td>
      <td>{{$petugas->username}}</td>
      <td>{{$petugas->password}}</td>
      <td>{{$petugas->telp}}</td>
      <td>{{$petugas->level}}</td>
      
    </tr>@endforeach
  </tbody>
</table>
  @endsection
</div>
