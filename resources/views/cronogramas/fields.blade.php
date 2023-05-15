<!-- Id Info Autos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_info_autos', 'Id Info Autos:') !!}
    {!! Form::number('id_info_autos', null, ['class' => 'form-control']) !!}
</div>

<!-- Ult Mp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ult_mp', 'Ult Mp:') !!}
    {!! Form::text('ult_mp', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
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

<!-- Id Ejecucion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_ejecucion', 'Id Ejecucion:') !!}
    {!! Form::number('id_ejecucion', null, ['class' => 'form-control']) !!}
</div>