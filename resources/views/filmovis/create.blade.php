@extends('layouts.app')
@section('title', 'Dodaj novi film')
@section('content_header')
<h1>Novi film</h1>
@stop


@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@error('message')
<div class="alert alert-success">{{ $message }}</div>
@enderror

<h3>Uredi detalje filma:</h3>


<form method="POST" action="/filmovis" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name"> Naslov filma:</label>
        <br>
        <input maxlength="150" type="text" name="naslov" required="true"
               value=""><br><br>

        <label for="zanr_id<"> Žanr:</label> <br>     
        <select name="zanr_id" id="zanr_id" required="true">
            <option value=""></option>
            @foreach (App\Zanr::all() as $z)
            <option value="{{$z->zanr_id}}">{{$z->naziv}}</option>
            @endforeach
        </select>  
        <br><br>
        <label for="godina<"> Godina:</label><br>     
        <select name="godina">
            <option value=""></option>
            @for ($godina=1900; $godina <= 2020; $godina++)
            <option value="<?= $godina; ?>"><?= $godina; ?></option>
            @endfor
        </select><br><br>
        <label for="trajanje"> Trajanje:</label>
        <br>
        <input maxlength="5" type="numeric" name="trajanje" required="true"
               value=""><br><br>
        <label> Slika</label>
        <div class="form-group">
            <input type="file" name="slika" id="slika" class="form-control-file" required>
        </div>

    </div>
    <br>
    <div class="form-group">
        <input type="submit" name="actor_sbm" value="Dodaj novi film">
    </div>
</form>

@endsection

@section('css')
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
@stop

@section('js')
<script> console.log('Hi!');</script>
<script>
    document.querySelector("#ova_godina").max = new Date().getFullYear();
</script>
@stopcument.querySelector("#ova_godina").max = new Date().getFullYear();
</script>
@stop