<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $timeline->id !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $timeline->title !!}</p>
</div>

<!-- Notes Field -->
<div class="form-group">
    {!! Form::label('notes', 'Notes:') !!}
    <p>{!! $timeline->notes !!}</p>
</div>

<!-- Dated At Field -->
<div class="form-group">
    {!! Form::label('dated_at', 'Dated At:') !!}
    <p>{!! $timeline->dated_at !!}</p>
</div>

<!-- Case Id Field -->
<div class="form-group">
    {!! Form::label('case_id', 'Case Id:') !!}
    <p>{!! $timeline->case_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $timeline->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $timeline->updated_at !!}</p>
</div>

