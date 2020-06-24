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


<div class="border border-info rounded-md">
    <h1 class="alert-success"> {{$filmovi->naslov}} </h1><br>

    <p>
        
    Godina: <span class="btn btn-outline-success">{{$filmovi->godina}}</span> <br>
    Trajanje: <span class="btn btn-outline-success">{{$filmovi->trajanje}} min </span><br>
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        @foreach ($filmovi as $page)
<td> <img src="{{ asset('uploads/appsetting/' . $page->slika) }}" /> </td>
@endforeach
        {{ Auth::filmovi()->naslov }} <span class="caret"></span>
    </a>      
    </p>

    <p>
        <a href='{{route('filmovis.index')}}'> Natrag na listu filmova
            <i class="fas fa-hand-point-left"></i></a> 
    </p>


</div>

@endsection

@section('css')
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
@stop

@section('js')
<script> console.log('Hi!');</script>
@stop