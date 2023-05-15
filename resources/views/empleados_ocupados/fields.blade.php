<!-- Id Ejecucion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_ejecucion', 'Id Ejecucion:') !!}
    {!! Form::number('id_ejecucion', null, ['class' => 'form-control']) !!}
</div>

<!-- Ultima Hora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ultima_hora', 'Ultima Hora:') !!}
    {!! Form::text('ultima_hora', null, ['class' => 'form-control']) !!}
</div>