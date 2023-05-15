<div class="table-responsive">
    <table class="table" id="empleadosOcupados-table">
        <thead>
        <tr>
            <th>Id Ejecucion</th>
        <th>Ultima Hora</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($empleadosOcupados as $empleadosOcupados)
            <tr>
                <td>{{ $empleadosOcupados->id_ejecucion }}</td>
            <td>{{ $empleadosOcupados->ultima_hora }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['empleadosOcupados.destroy', $empleadosOcupados->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('empleadosOcupados.show', [$empleadosOcupados->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('empleadosOcupados.edit', [$empleadosOcupados->id]) }}"
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
