@extends('master')

@section('content')

<h1>Crear Pelicula</h1>

<form action="/movies/create" method="POST">
@csrf

<div>
    <label for="titulo"> TITULO </label>
    <input type="text" name="title" value= "{{ old('title')}}"/>
</div>
<div>
    <label for="rating"> RATING </label>
    <input type="text" name="rating" value= "{{ old('rating')}}"/>
</div>
<div>
    <label for="duracion"> DURACIÓN </label>
    <input type="text" name="length" value= "{{ old('length')}}"/>
</div>
<div>
    <label for="premios"> PREMIOS </label>
    <input type="text" name="awards" value= "{{ old('awards')}}"/>
</div>
<div>
    <label for="release_date"> FECHA DE ESTRENO </label>
    <select name="dia">
        <option value="">Dia</option>
        <?php for ($i=1; $i < 32; $i++) { ?>
        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php } ?>
    </select>
    <select name="mes">
        <option value="">Mes</option>
        <?php for ($i=1; $i < 13; $i++) { ?>
        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php } ?>
    </select>
    <select name="anio">
        <option value="">Anio</option>
        <?php for ($i=1900; $i < 2017; $i++) { ?>
        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php } ?>
    </select>
</div>

<input type="submit" value="Agregar Pelicula" name="submit" />


</form>

@endsection