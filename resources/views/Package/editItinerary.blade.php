<br>
<h2> Modificar Itinerario</h2>
<form method="POST" action="{{ route('packageTourist.updateItinerary',$packageTourist) }}"  accept-charset="UTF-8" enctype="multipart/form-data" >
  {{ csrf_field() }}
  <input name="_method" type="hidden" value="PATCH">                           <!-- Name -->

<!-- Curriculum -->
  <div class="form-group">
      <label>Itinerario </label>
      <input type="file" class="" name="itinerario" id="itinerario"  >
    </br>
      <p class="help-block">Adjuntar el archivo del itinerario del paquete turístico en formato pdf</p>
  </div>


  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="col-xs-4 col-sm-4 col-md-4">
       <button type="submit" class="btn btn-success btn-block">Modificar Archivo</button>
   </div>
   <div class="col-xs-4 col-sm-4 col-md-4">
       <button type="reset" class="btn btn-default btn-block">Limpiar</button>
   </div>
   <div class="col-xs-4 col-sm-4 col-md-4">
       <a href="{{ route('packageTourist.index') }}" class="btn btn-info btn-block" >Atrás</a>
   </div>

 </div>
</form>
