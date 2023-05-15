<!-- Fecha Programada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_programada', 'Fecha Programada:') !!}
    {!! Form::text('fecha_programada', null, ['class' => 'form-control','id'=>'fecha_programada']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_programada').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Fecha De Ejecucion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_de_ejecucion', 'Fecha De Ejecucion:') !!}
    {!! Form::text('fecha_de_ejecucion', null, ['class' => 'form-control','id'=>'fecha_de_ejecucion']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_de_ejecucion').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Hora De Ejecucion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hora_de_ejecucion', 'Hora De Ejecucion:') !!}
    {!! Form::text('hora_de_ejecucion', null, ['class' => 'form-control']) !!}
</div>

<!-- Tiempo De Ejecucion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tiempo_de_ejecucion', 'Tiempo De Ejecucion:') !!}
    {!! Form::text('tiempo_de_ejecucion', null, ['class' => 'form-control']) !!}
</div>

<!-- Responsable Field -->
<div class="form-group col-sm-6">
    {!! Form::label('responsable', 'Responsable:') !!}
    {!! Form::text('responsable', null, ['class' => 'form-control','maxlength' => 250,'maxlength' => 250]) !!}
</div>

<!-- Resultado Final Field -->
<div class="form-group col-sm-6">
    {!! Form::label('resultado_final', 'Resultado Final:') !!}
    {!! Form::number('resultado_final', null, ['class' => 'form-control']) !!}
</div>