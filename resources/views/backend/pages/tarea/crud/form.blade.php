
<div class="form-group">
	<label>Autor Tarea</label>
	<input type="text" class="form-control" name="autor" value="{{ old('autor', $tarea->str_autor ) }}">
	@error('codigo') <span> <b style="color: #DC0000;"> {{ $message }}</b></span> @enderror
</div>

<div class="form-group">
	<label>Descripción Tarea</label>
	<input type="text" class="form-control" name="descripcion" value="{{ old('descripcion', $tarea->str_descripcion ) }}">
	@error('codigo') <span> <b style="color: #DC0000;"> {{ $message }}</b></span> @enderror
</div>

<div class="form-group">
	<label>Fecha Inicio</label>
	<input type="date" class="form-control" name="fecha_inicio" value="{{ old('fecha_inicio', $tarea->dt_fecha_inicio ) }}">
	@error('nombre') <span> <b style="color: #DC0000;"> {{ $message }}</b></span> @enderror
</div>

<div class="form-group">
	<label>Estado Tarea</label>
	<input type="text" class="form-control" name="estado" value="{{ old('estado', $tarea->str_estado ) }}">
	@error('codigo') <span> <b style="color: #DC0000;"> {{ $message }}</b></span> @enderror
</div>

<div class="form-group">
	<label>Fecha Fin</label>
	<input type="date" class="form-control" name="fecha_fin" value="{{ old('fecha_fin', $tarea->dt_fecha_fin ) }}">
	@error('riesgo') <span> <b style="color: #DC0000;"> {{ $message }}</b></span> @enderror
</div>
