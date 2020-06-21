@extends('layouts.app')
@section('title', 'Svi žanrovi')
@section('content_header')
<h1>Žanrovi</h1>
@stop


@section('content')
<!-- @TODO prikazi poruku kada se doda nova glumica -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- Laravel > 7.* -->
@error('success') 
<div class="alert alert-success">{{ $success }}</div>
@enderror

<h3>Žanrovi:</h3>

<br>

    @foreach ($zanrovi as $zanr)
    <h5>
        <ul>
    <li>
        &nbsp;&nbsp;<a href='{{url("/zanrs/{$zanr->zanr_id}")}}'> {{$zanr->naziv }} </a>
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