<!-- Fecha Programada Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_programada', 'Fecha Programada:') !!}
    <p>{{ $ejecucion->fecha_programada }}</p>
</div>

<!-- Fecha De Ejecucion Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_de_ejecucion', 'Fecha De Ejecucion:') !!}
    <p>{{ $ejecucion->fecha_de_ejecucion }}</p>
</div>

<!-- Hora De Ejecucion Field -->
<div class="col-sm-12">
    {!! Form::label('hora_de_ejecucion', 'Hora De Ejecucion:') !!}
    <p>{{ $ejecucion->hora_de_ejecucion }}</p>
</div>

<!-- Tiempo De Ejecucion Field -->
<div class="col-sm-12">
    {!! Form::label('tiempo_de_ejecucion', 'Tiempo De Ejecucion:') !!}
    <p>{{ $ejecucion->tiempo_de_ejecucion }}</p>
</div>

<!-- Responsable Field -->
<div class="col-sm-12">
    {!! Form::label('responsable', 'Responsable:') !!}
    <p>{{ $ejecucion->responsable }}</p>
</div>

<!-- Resultado Final Field -->
<div class="col-sm-12">
    {!! Form::label('resultado_final', 'Resultado Final:') !!}
    <p>{{ $ejecucion->resultado_final }}</p>
</div>

