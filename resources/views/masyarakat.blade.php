@extends('layouts.app')

@section('content')
<style>
    body{
        background-color: RGBA(var(--bs-secondary-rgb),var(--bs-bg-opacity,1))!important;
    }
    h1{
        text-align: center;
        font-family: fantasy;
        color: black;
    }
</style>
<div class="container"><br>
    <h1>DATA MASYARAKAT</h1>
<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">nik</th>
        <th scope="col">nama</th>
        <th scope="col">username</th>
        <th scope="col">password</th>
        <th scope="col">telp</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($masyarakat  as $masyarakat)
      <tr>
        <td>{{$masyarakat->nik}}</td>
        <td>{{$masyarakat->nama}}</td>
        <td>{{$masyarakat->username}}</td>
        <td>{{$masyarakat->password}}</td>
        <td>{{$masyarakat->telp}}</td>
        
      </tr>@endforeach
    </tbody>
  </table>
    @endsection
</div>