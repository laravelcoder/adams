<table class="table table-responsive" id="courthouses-table">
    <thead>
        <th>Courthouse</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($courthouses as $courthouse)
        <tr>
            <td>{!! $courthouse->courthouse !!}</td>
            <td>
                {!! Form::open(['route' => ['courthouses.destroy', $courthouse->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('courthouses.show', [$courthouse->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('courthouses.edit', [$courthouse->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>