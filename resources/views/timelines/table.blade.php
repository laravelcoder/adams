<table class="table table-responsive" id="timelines-table">
    <thead>
        <th>Title</th>
        <th>Case Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($timelines as $timeline)
        <tr>
            <td>{!! $timeline->title !!}</td>
            <td>{!! $timeline->case_id !!}</td>
            <td>
                {!! Form::open(['route' => ['timelines.destroy', $timeline->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('timelines.show', [$timeline->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('timelines.edit', [$timeline->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>