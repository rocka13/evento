
<div class="panel panel-primary">
	<div class="panel-heading">
		<h1 class="text-center">
			<?php echo strtoupper($reg->titulo); ?>
		</h1>
	</div>
  	<div class="panel-body">
   		<div class="row articulo">
   			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 text-justify">
   				<a href="#">
   					<img src="imagenes/bbdd/<?= $resultImagen->url; ?>"  class="img-articulo img-responsive img-thumbnail center-block">
   				</a>
   				<span class=""><?php echo $reg->descripcion; ?>
   				</span>
   			</div>
   			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
   			<br><br>
   			<p class="bg-info text-center">
   				<table class="table">
	  				<tr>
	  					<td>Fecha y hora de Inicio: </td>
	  					<td><?php echo $reg->ff_inicio; ?></td>
	  				</tr>
	  				<tr>
	  					<td>Fecha de Finalicacion: </td>
	  					<td><?php echo $reg->ff_final; ?></td>
	  				</tr>
  				</table>
  				<br>
	  			<center>
	  				<a class="btn btn-primary">Suscribirme
	  				</a>
	   				<br><br>
	   			</center>
   			</div>	
   		</div>
   	</div>
  	<div class="panel-footer">
  		<div class="row">
  			<div class="col-xs-1 col-sm-2 col-md-3 col-lg-3">
  			</div>
  			<div class="col-xs-10 col-sm-8 col-md-6 col-lg-6">
  			<center>
  			<?php echo $btnAnt; ?>
  				<a href="../../" class="btn btn-info"><span>Inicio</span></a>
  			<?php echo $btnSig; ?>
  			</center>
  			</div>
  			<div class="col-xs-1 col-sm-2 col-md-3 col-lg-3">
  			</div>
  		</div>
  	</div>
</div>