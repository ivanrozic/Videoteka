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

<h3>{{$zanrovi->naziv}} ({{$lista_filmova_odabranog_zanra->count()}}) :</h3>
<br>

    @foreach ($lista_filmova_odabranog_zanra ?? '' as $f)


    <h5>
        <ul>
    <li>
        &nbsp; <a href='{{url("/filmovis/{$f->filmovi_id}")}}'> 
            {{$f->naslov}} ({{$f->godina }})</a>
        
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