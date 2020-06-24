@extends('layouts.app')
@section('naslov', 'Uredi')
@section('content_header')
<h1>Promjeni detalje o filmu</h1>
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


<form method="POST" action="/filmovis/{{$filmovi->filmovi_id}}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="name"> Naslov filma:</label>
        <br>
        <input maxlength="150" type="text" name="naslov" required="true"
               value="{{ $filmovi->naslov }}"><br><br>
        <label for="godina<"> Godina:</label> <br>     
            <select name="godina">
                <option value=""></option>
@for ($godina=1900; $godina <= 2015; $godina++)
  <option value="<?=$godina;?>"><?=$godina;?></option>
@endfor
</select><br><br>
        <label for="trajanje"> Trajanje:</label>
        <br>
        <input maxlength="5" type="numeric" name="trajanje" required="true"
               value="{{ $filmovi->trajanje }}"><br>
   <a class="dropdown-item" href="{{ route('filmovis.index') }}">Dodaj sliku</a>
    </div>
   
    <div class="form-group">
        <input type="submit" name="actor_sbm" value="Izmijeni detalje filma">
    </div>
</form>

@endsection

@section('css')
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
@stop

@section('js')
<script> console.log('Hi!');</script>
@stop