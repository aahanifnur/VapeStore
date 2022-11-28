@extends('admin.index')
@section('content')
@if(Auth::user()->role == 'admin')
<div class="jumbotron">
    <h1 class="display-4">Selamat Datang, Admin !</h1>
    <p class="lead">Disini adalah tempat dimana semua data dari VapeStore ini terkumpul, sebagai Admin kamu bisa menambah, mengedit, dan menghapus data yang ada disini !</p>
    <hr class="my-4">
    <p align="center">Tolong gunakan wewenangmu sebagai Admin dengan bijak !</p>
    <p align="center"><strong>Terimakasih !</strong></p>
    {{-- <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> --}}
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@else
    include('admin.access_denied')
@endif
@endsection