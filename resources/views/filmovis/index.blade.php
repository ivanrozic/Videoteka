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


<div class="container">
    <div class="jumbotron">
        <h1>Filmovi:</h1> <br>
        <a href='{{route('filmovis.create')}}'>
            <h4><i class="fas fa-plus"></i> <span class="label label-info">Dodaj novi film</span></a></h4>
        <br><br>
        <table class="table table-stripped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"> Slika </th>
                    <th scope="col"> Naslov filma </th>
                    <th scope="col"> Godina </th>
                    <th scope="col"> Trajanje </th>
                    <th scope="col"> Akcija </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($filmovi ?? '' as $f)
                <tr>
                    <th> <img src="{{ asset('uploads/appsetting/' . $f->slika) }}" widht="100" height="100"></th>
                    <th> {{$f->naslov }}</th>
                    <th> {{$f->godina }}</th>
                    <th> {{$f->trajanje }}</th>
                    <th>             <form style="display:inline" class="form-inline" name="actor_delete" 
                                           action="{{url("/filmovis/{$f->filmovi_id}")}}" 
                                           method="POST" enctype="multipart/form-data">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger" style="font-size: xx-medium" <span class="label label-info">Obriši</span> 

                            </button>
                        </form>
                </tr>
                @endforeach
            </tbody>

            @endsection

            @section('css')
            <link rel="stylesheet" href="/css/app.css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
            @stop

            @section('js')
            <script> console.log('Hi!');</script>
            @stop


