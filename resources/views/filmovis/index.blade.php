@extends('layouts.app')
@section('title', 'Svi filmovi')
@section('content_header')
<h1>Filmovi</h1>
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

<h3>Filmovi:</h3>

<br>

    @foreach ($filmovi ?? '' as $f)
<h5>
    <ul>

    <li>
       &nbsp;&nbsp;<a href='{{url("/filmovis/{$f->filmovi_id}")}}'> 
            {{$f->naslov}} ({{$f->godina }})</a>
    </li>
</ul>
    </h5>

    @endforeach
</ol>

@endsection

@section('css')
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
@stop

@section('js')
<script> console.log('Hi!');</script>
@stop