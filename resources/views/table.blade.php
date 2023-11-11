
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
    .x{
      color: black;
      font-weight: bold;
      background-color: red;
    }
    .opsi{
      width: 30px;
    }
    

</style>

     @extends('layouts.app')

        @section('content')
     
         <a class="buat" href="{{ url('isi_laporan') }}">Buat</a>
    
     <h1>Rekap Laporan Anda</h1>
    
    <div class="container">
     <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      {{--  <th scope="col">Tanggal Kejadian</th>
      <th scope="col">Nik</th> --}}
      <th scope="col"> Laporan</th>
      <th scope="col">Foto</th>
      {{-- <th scope="col">Status</th> --}}
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
   @foreach ($pengaduan  as $pengaduan)
       
   
    <tr>
       <td>{{$pengaduan->id_pengaduan}}</td>
      {{-- <td>{{$pengaduan->tgl_pengaduan}}</td>
      <td>{{$pengaduan->nik}}</td> --}}
      <td  style="max-width:400px;">{{$pengaduan->isi_laporan}}</td>
      <td><img src='{{asset("storage/image/".$pengaduan->foto)}}' width="70px" /></td>
      {{-- <td>{{$pengaduan->status}}</td> --}}
      <td>
        <a href="/hapus_pengaduan/{{$pengaduan->id_pengaduan}}"><button class="btn btn-danger"><img src="/img/bin.png" class="opsi"></button></a>
        <a href="/detail_pengaduan/{{$pengaduan->id_pengaduan}}"><button class="btn btn-info"><img src="/img/loupe.png" class="opsi"></button></a>
        <a href="/update_pengaduan/{{$pengaduan->id_pengaduan}}"><button class="btn btn-light"><img src="/img/edit.png" class="opsi"></button></a>
       </td>
    </tr>@endforeach
  </tbody>
</table>
  @endsection
</div>
