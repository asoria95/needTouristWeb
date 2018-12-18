




<br>
<h2> Modificar Curriculum</h2>
<form method="POST" action="{{ route('afilliate.updateFile',$afilliate->id_afiliado) }}"  accept-charset="UTF-8" enctype="multipart/form-data" >
  {{ csrf_field() }}
  <input name="_method" type="hidden" value="PATCH">                           <!-- Name -->

<!-- Curriculum -->
  <div class="form-group">
      <label>Curriculum </label>
      <input type="file" class="" name="curriculum" id="curriculum"  >
    </br>
      <p class="help-block">Adjuntar el archivo del curriculum en formato pdf</p>
  </div>


  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="col-xs-4 col-sm-4 col-md-4">
       <button type="submit" class="btn btn-success btn-block">Modificar Archivo</button>
   </div>
   <div class="col-xs-4 col-sm-4 col-md-4">
       <button type="reset" class="btn btn-default btn-block">Limpiar</button>
   </div>
   <div class="col-xs-4 col-sm-4 col-md-4">
       <a href="{{ route('afilliate.index') }}" class="btn btn-info btn-block" >Atrás</a>
   </div>

 </div>
</form>
