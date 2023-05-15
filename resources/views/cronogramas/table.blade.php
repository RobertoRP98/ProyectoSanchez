<div class="table-responsive">
    <table class="table" id="cronogramas-table">
        <thead>
        <tr>
            <th>Id Info Autos</th>
        <th>Ult Mp</th>
        <th>Ult Fecha</th>
        <th>Id Ejecucion</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cronogramas as $cronograma)
            <tr>
                <td>{{ $cronograma->id_info_autos }}</td>
            <td>{{ $cronograma->ult_mp }}</td>
            <td>{{ $cronograma->ult_fecha }}</td>
            <td>{{ $cronograma->id_ejecucion }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['cronogramas.destroy', $cronograma->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cronogramas.show', [$cronograma->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('cronogramas.edit', [$cronograma->id]) }}"
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
