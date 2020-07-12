@extends('layouts.app')
@section('title', 'Svi filmovi')
@section('content_header')
<h1>Filmovi</h1>
@stop
<?php
$firstStringCharacter=array();
foreach ($filmovi as $f) {
$firstStringCharacter[] = substr($f->naslov, 0, 1);
}
$firstStringFilter=array_unique ($firstStringCharacter);

?>

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

<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<style>
    .content {
        text-align: center;
        font-size: 18px;
    }
</style>

<div class="container">
    <div class="jumbotron">
        <h1>Filmovi:</h1> <br>
        <h4><a href='{{route('filmovis.create')}}'>
                <i class="fas fa-plus"></i> <span class="label label-info">Dodaj novi film</span></a></h4>
        <br>
        <div class="content">
            @foreach ($firstStringFilter ?? '' as $f)
            |<a href='{{url("/filmovis/naslovo/{$f}")}}'><u>{{Str::ucfirst($f)}}</u></a>
            @endforeach
        </div>
        <table class="table table-stripped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"> Slika </th>
                    <th scope="col"> Naslov filma </th>
                    <th scope="col"> Godina </th>
                    <th scope="col"> Trajanje </th>
                    <th scope="col"> Obriši </th>
                </tr>
            </thead>
            <tbody>@foreach ($filmovi ?? '' as $f)
                <tr>
                    <th> <img src="{{ asset('images/' . $f->slika) }}" widht="200" height="200"></th>
                    <th> {{$f->naslov }}</th>
                    <th> {{$f->godina }}</th>
                    <th> {{$f->trajanje }}</th>
                    <th> <form style="display:inline" class="form-inline" name="actor_delete" 
                               action="{{url("/filmovis/{$f->filmovi_id}")}}" 
                               method="POST" enctype="multipart/form-data">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger" style="font-size: xx-medium" <span class="label label-info">Obriši</span> 

                            </button>
                        </form> </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



<div class="content">
    @foreach ($firstStringFilter ?? '' as $f)
            |<a href='{{url("/filmovis/naslovo/{$f}")}}'><u>{{$f}}</u></a>
            @endforeach
</div>


@endsection

@section('css')
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
@stop

@section('js')
<script> console.log('Hi!');</script>
@stop


