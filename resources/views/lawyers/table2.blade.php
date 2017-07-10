<table class="table table-responsive table-striped" id="lawyers-table">
    <thead>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Status</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($lawyers as $lawyer)
        <tr>
            <td>
                <div class="media">
                    <div class="media-left">
                    @if($lawyer->image)
                        <img src="{!! url('/images/lawyers/') !!}/{!! $lawyer->image !!}" alt="{!! $lawyer->name !!} image" />
                    @else
                    <img class="image_fade" src="http://lorempixel.com/800/800/people/" style="border: 1px solid #bdc3c7;" alt="{!! $lawyer->name !!} image" itemprop="image" />
                    @endif
                    </div>
                    <div class="media-body">
                        <h4><a href="{!! route('lawyers.edit', [$lawyer->id]) !!}">{!! $lawyer->name !!}</a></h4>
                        &lt;{!! $lawyer->email !!}&gt;
                    </div>
                </div>
            </td>
            {{-- <td>{!! $lawyer->name !!}</td> --}}
            <td class="media-middle">{!! $lawyer->phone !!}</td>
            <td class="media-middle">{!! $lawyer->email !!}</td>
            <td class="media-middle"><h5>{!! $lawyer->status!!}</h5></td>
            <td class="media-middle">
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

<div style="clear:both"></div>
