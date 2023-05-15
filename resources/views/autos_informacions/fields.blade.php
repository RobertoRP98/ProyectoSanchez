<!-- Num Economico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_economico', 'Num Economico:') !!}
    {!! Form::text('num_economico', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Modelo Auto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modelo_auto', 'Modelo Auto:') !!}
    {!! Form::text('modelo_auto', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Marca Auto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('marca_auto', 'Marca Auto:') !!}
    {!! Form::text('marca_auto', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Anio Modelo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anio_modelo', 'Anio Modelo:') !!}
    {!! Form::text('anio_modelo', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Tipo Unidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_unidad', 'Tipo Unidad:') !!}
    {!! Form::text('tipo_unidad', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Departamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('departamento', 'Departamento:') !!}
    {!! Form::text('departamento', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Ult Mp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ult_mp', 'Ult Mp:') !!}
    {!! Form::text('ult_mp', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Ult Hra Km Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ult_hra_km', 'Ult Hra Km:') !!}
    {!! Form::number('ult_hra_km', null, ['class' => 'form-control']) !!}
</div>

<!-- Ult Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ult_fecha', 'Ult Fecha:') !!}
    {!! Form::text('ult_fecha', null, ['class' => 'form-control','id'=>'ult_fecha']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#ult_fecha').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Act Hra Km Field -->
<div class="form-group col-sm-6">
    {!! Form::label('act_hra_km', 'Act Hra Km:') !!}
    {!! Form::number('act_hra_km', null, ['class' => 'form-control']) !!}
</div>

<!-- Act Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('act_fecha', 'Act Fecha:') !!}
    {!! Form::text('act_fecha', null, ['class' => 'form-control','id'=>'act_fecha']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#act_fecha').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Periocidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('periocidad', 'Periocidad:') !!}
    {!! Form::text('periocidad', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Km Prom Mensual Field -->
<div class="form-group col-sm-6">
    {!! Form::label('km_prom_mensual', 'Km Prom Mensual:') !!}
    {!! Form::number('km_prom_mensual', null, ['class' => 'form-control']) !!}
</div>

<!-- Prox Mp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prox_mp', 'Prox Mp:') !!}
    {!! Form::text('prox_mp', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Prox Hra Km Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prox_hra_km', 'Prox Hra Km:') !!}
    {!! Form::number('prox_hra_km', null, ['class' => 'form-control']) !!}
</div>

<!-- Prox Hra Km Faltante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prox_hra_km_faltante', 'Prox Hra Km Faltante:') !!}
    {!! Form::number('prox_hra_km_faltante', null, ['class' => 'form-control']) !!}
</div>

<!-- Prox Dias Faltantes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prox_dias_faltantes', 'Prox Dias Faltantes:') !!}
    {!! Form::number('prox_dias_faltantes', null, ['class' => 'form-control']) !!}
</div>

<!-- Prox Fecha Estim Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prox_fecha_estim', 'Prox Fecha Estim:') !!}
    {!! Form::text('prox_fecha_estim', null, ['class' => 'form-control','id'=>'prox_fecha_estim']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#prox_fecha_estim').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Fecha Recomendada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_recomendada', 'Fecha Recomendada:') !!}
    {!! Form::text('fecha_recomendada', null, ['class' => 'form-control','id'=>'fecha_recomendada']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_recomendada').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Programar Por Km Field -->
<div class="form-group col-sm-6">
    {!! Form::label('programar_por_km', 'Programar Por Km:') !!}
    {!! Form::text('programar_por_km', null, ['class' => 'form-control','maxlength' => 10,'maxlength' => 10]) !!}
</div>

<!-- Programar Por Tiempo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('programar_por_tiempo', 'Programar Por Tiempo:') !!}
    {!! Form::text('programar_por_tiempo', null, ['class' => 'form-control','maxlength' => 10,'maxlength' => 10]) !!}
</div>