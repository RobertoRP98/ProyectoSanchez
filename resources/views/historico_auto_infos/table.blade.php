<div class="table-responsive">
    <table class="table" id="historicoAutoInfos-table">
        <thead>
        <tr>
            <th>Fecha Anio</th>
        <th>Fecha Mes</th>
        <th>Id Autos Info</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($historicoAutoInfos as $historicoAutoInfo)
            <tr>
                <td>{{ $historicoAutoInfo->fecha_anio }}</td>
            <td>{{ $historicoAutoInfo->fecha_mes }}</td>
            <td>{{ $historicoAutoInfo->id_autos_info }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['historicoAutoInfos.destroy', $historicoAutoInfo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('historicoAutoInfos.show', [$historicoAutoInfo->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('historicoAutoInfos.edit', [$historicoAutoInfo->id]) }}"
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
