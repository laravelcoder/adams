<table class="table table-responsive" id="lawyers-table">
    <thead>
        <th>Name</th>
        <th>Slug</th>
        <th>Lang</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($lawyers as $lawyer)
        <tr>
            <td>{!! $lawyer->name !!}</td>
            <td>{!! $lawyer->slug !!}</td>
            <td>{!! $lawyer->lang !!}</td>
            <td>
                {!! Form::open(['route' => ['lawyers.destroy', $lawyer->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('lawyers.show', [$lawyer->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('lawyers.edit', [$lawyer->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>