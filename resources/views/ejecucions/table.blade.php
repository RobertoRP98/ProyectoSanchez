<div class="table-responsive">
    <table class="table" id="ejecucions-table">
        <thead>
        <tr>
            <th>Fecha Programada</th>
        <th>Fecha De Ejecucion</th>
        <th>Hora De Ejecucion</th>
        <th>Tiempo De Ejecucion</th>
        <th>Responsable</th>
        <th>Resultado Final</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ejecucions as $ejecucion)
            <tr>
                <td>{{ $ejecucion->fecha_programada }}</td>
            <td>{{ $ejecucion->fecha_de_ejecucion }}</td>
            <td>{{ $ejecucion->hora_de_ejecucion }}</td>
            <td>{{ $ejecucion->tiempo_de_ejecucion }}</td>
            <td>{{ $ejecucion->responsable }}</td>
            <td>{{ $ejecucion->resultado_final }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['ejecucions.destroy', $ejecucion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ejecucions.show', [$ejecucion->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('ejecucions.edit', [$ejecucion->id]) }}"
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
