@extends('principal')
@section('content')
<section>
   <div class="conteo">
        <button class="btn btn-warning">1987</button><br></div>

    <div class="section col-xs-12 col-sm-6 col-md-4 text-justify">
        <h2 class="text-center">texto1</h2>
        <figure>

        <img src="imagenes/bbdd/img.jpg ?>" class="img-responsive img-thumbnail center-block">
        </figure>
        <p>descripcion...
        <a href="javascript:irArticulo(1); " class="btn btn-link">Leer mas
        </a>
        </p>
    </div>           
</section>
@stop