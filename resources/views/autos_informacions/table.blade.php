<div class="table-responsive">
    <table class="table" id="autosInformacions-table">
        <thead>
        <tr>
            <th>Num Economico</th>
        <th>Modelo Auto</th>
        <th>Marca Auto</th>
        <th>Anio Modelo</th>
        <th>Tipo Unidad</th>
        <th>Departamento</th>
        <th>Ult Mp</th>
        <th>Ult Hra Km</th>
        <th>Ult Fecha</th>
        <th>Act Hra Km</th>
        <th>Act Fecha</th>
        <th>Periocidad</th>
        <th>Km Prom Mensual</th>
        <th>Prox Mp</th>
        <th>Prox Hra Km</th>
        <th>Prox Hra Km Faltante</th>
        <th>Prox Dias Faltantes</th>
        <th>Prox Fecha Estim</th>
        <th>Fecha Recomendada</th>
        <th>Programar Por Km</th>
        <th>Programar Por Tiempo</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($autosInformacions as $autosInformacion)
            <tr>
                <td>{{ $autosInformacion->num_economico }}</td>
            <td>{{ $autosInformacion->modelo_auto }}</td>
            <td>{{ $autosInformacion->marca_auto }}</td>
            <td>{{ $autosInformacion->anio_modelo }}</td>
            <td>{{ $autosInformacion->tipo_unidad }}</td>
            <td>{{ $autosInformacion->departamento }}</td>
            <td>{{ $autosInformacion->ult_mp }}</td>
            <td>{{ $autosInformacion->ult_hra_km }}</td>
            <td>{{ $autosInformacion->ult_fecha }}</td>
            <td>{{ $autosInformacion->act_hra_km }}</td>
            <td>{{ $autosInformacion->act_fecha }}</td>
            <td>{{ $autosInformacion->periocidad }}</td>
            <td>{{ $autosInformacion->km_prom_mensual }}</td>
            <td>{{ $autosInformacion->prox_mp }}</td>
            <td>{{ $autosInformacion->prox_hra_km }}</td>
            <td>{{ $autosInformacion->prox_hra_km_faltante }}</td>
            <td>{{ $autosInformacion->prox_dias_faltantes }}</td>
            <td>{{ $autosInformacion->prox_fecha_estim }}</td>
            <td>{{ $autosInformacion->fecha_recomendada }}</td>
            <td>{{ $autosInformacion->programar_por_km }}</td>
            <td>{{ $autosInformacion->programar_por_tiempo }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['autosInformacions.destroy', $autosInformacion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('autosInformacions.show', [$autosInformacion->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('autosInformacions.edit', [$autosInformacion->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
