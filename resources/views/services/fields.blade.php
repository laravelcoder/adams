<!-- Service Field -->
<div class="form-group col-sm-6">
    {!! Form::label('service', 'Service:') !!}
    {!! Form::text('service', null, ['class' => 'form-control']) !!}
</div>

<!-- Intro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('intro', 'Intro:') !!}
    {!! Form::text('intro', null, ['class' => 'form-control']) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

<!-- Meta Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('meta_description', 'Meta Description:') !!}
    {!! Form::textarea('meta_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Banner Field -->
<div class="form-group col-sm-6">
    {!! Form::label('banner', 'Banner:') !!}
    {!! Form::file('banner') !!}
</div>
<div class="clearfix"></div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Lang Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lang', 'Lang:') !!}
    {!! Form::text('lang', null, ['class' => 'form-control']) !!}
</div>

<!-- Icon-Class Field -->
<div class="form-group col-sm-6">
    {!! Form::label('icon-class', 'Icon-Class:') !!}
    {!! Form::text('icon-class', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('services.index') !!}" class="btn btn-default">Cancel</a>
</div>
