<!-- Fecha Anio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_anio', 'Fecha Anio:') !!}
    {!! Form::text('fecha_anio', null, ['class' => 'form-control','id'=>'fecha_anio']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_anio').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Fecha Mes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_mes', 'Fecha Mes:') !!}
    {!! Form::text('fecha_mes', null, ['class' => 'form-control','id'=>'fecha_mes']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_mes').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Id Cronograma Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cronograma', 'Id Cronograma:') !!}
    {!! Form::number('id_cronograma', null, ['class' => 'form-control']) !!}
</div>