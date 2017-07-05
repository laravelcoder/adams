<table class="table table-responsive" id="attorneys-table">
    <thead>
        <th>Name</th>
        <th>Slug</th>
        <th>Lang</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($attorneys as $attorney)
        <tr>
            <td>{!! $attorney->name !!}</td>
            <td>{!! $attorney->slug !!}</td>
            <td>{!! $attorney->lang !!}</td>
            <td>
                {!! Form::open(['route' => ['attorneys.destroy', $attorney->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('attorneys.show', [$attorney->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('attorneys.edit', [$attorney->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>