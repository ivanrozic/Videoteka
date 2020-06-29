@extends('layouts.app')
@section('naslov')
@section('content_header')
<h1>{{$filmovi->naslov}}</h1>
@stop


@section('content')
@if (Session::has('message'))
<div class="alert alert-success">{{ Session::get('message') }}
</div>
@endif 

<h3>Detalji filma:</h3>



<p>

    <img src="{{asset('/images/' . $filmovi->slika)}}" width="150" height="220"><br><br>
    <i>{{$filmovi->naslov}} ({{$filmovi->godina}})</i> <br>
    <i>Trajanje: {{$filmovi->trajanje}} min</i><br>

</p>

<p>
    <a href='{{route('filmovis.index')}}'> Natrag na listu filmova
        <i class="fas fa-hand-point-left"></i></a> 
</p>



@endsection

@section('css')
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
@stop

@section('js')
<script> console.log('Hi!');</script>
@stop