<table class="table table-responsive" id="services-table">
    <thead>
    	<th>Active</th>
        {{--<th>Id</th>--}}
        <th>Service</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($services as $service)
        <tr>
        	<td><a href="#" id="{!! $service->id !!}" class="publish">
                    {!! ($service->is_published) ? '<i class="fa fa-check-circle-o fa-2x text-success" style="color:green"></i>' : '<i class="fa fa-times-circle fa-2x text-danger" style="color:red"></i>'  !!}

                </a>
            </td>
            {{--<td>{!! $service->id !!}</td>--}}
            <td><a href="{!! route('services.edit', [$service->id]) !!}" class='bold'>{!! $service->service !!}</a></td>
            <td>
                {!! Form::open(['route' => ['services.destroy', $service->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    {{-- <a href="{!! route('services.show', [$service->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a> --}}
                    <a href="{!! route('services.edit', [$service->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
