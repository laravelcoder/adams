<table class="table table-responsive" id="courtdates-table">
    <thead>
        <th>Title</th>
        <th>Case Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($courtdates as $courtdate)
        <tr>
            <td>{!! $courtdate->title !!}</td>
            <td>{!! $courtdate->case_id !!}</td>
            <td>
                {!! Form::open(['route' => ['courtdates.destroy', $courtdate->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('courtdates.show', [$courtdate->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('courtdates.edit', [$courtdate->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>