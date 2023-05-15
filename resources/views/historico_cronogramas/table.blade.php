<div class="table-responsive">
    <table class="table" id="historicoCronogramas-table">
        <thead>
        <tr>
            <th>Fecha Anio</th>
        <th>Fecha Mes</th>
        <th>Id Cronograma</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($historicoCronogramas as $historicoCronograma)
            <tr>
                <td>{{ $historicoCronograma->fecha_anio }}</td>
            <td>{{ $historicoCronograma->fecha_mes }}</td>
            <td>{{ $historicoCronograma->id_cronograma }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['historicoCronogramas.destroy', $historicoCronograma->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('historicoCronogramas.show', [$historicoCronograma->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('historicoCronogramas.edit', [$historicoCronograma->id]) }}"
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
