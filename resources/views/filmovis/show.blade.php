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
    <i><b>{{$filmovi->naslov}} ({{$filmovi->godina}})</b></i> <br>
    <i>Trajanje: {{$filmovi->trajanje}} min</i><br>
    @foreach ($filmovi->zanr as $f)
    <i>Žanr: {{$f->naziv}}</i><br>

    @endforeach

</p>

<p>
    <a href='{{url("/zanrs/{$f->zanr_id}")}}'> Filmovi pod žanrom: {{$f->naziv}}
        &nbsp;<i class="fas fa-hand-point-left"></i></a> 
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