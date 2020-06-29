@extends('layouts.app')
@section('title', 'Žanr')
@section('content_header')
<h1>Žanrovi</h1>
@stop


@section('content')
@if (Session::has('message'))
<div class="alert alert-success">{{ Session::get('message') }}
</div>
@endif 

<h3>{{$lista_filmova_odabranog_zanra->first()->zanr()->first()->naziv}}:</h3>
<br>

    @foreach ($lista_filmova_odabranog_zanra ?? '' as $f)


    <h5>
        <ul>
    <li>
        &nbsp;&nbsp; {{$f->naslov}} ({{$f->godina }}) 
    </li>
    </ul>
    </h5>

    @endforeach



@endsection

@section('css')
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
@stop

@section('js')
<script> console.log('Hi!');</script>
@stop