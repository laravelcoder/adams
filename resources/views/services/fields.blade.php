<!-- Service Field -->
<div class="form-group col-sm-6">
    {!! Form::label('service', 'Service:') !!}
    {!! Form::text('service', null, ['class' => 'form-control']) !!}
</div>

<!-- Intro Field -->
<div class="form-group col-sm-10">
    {!! Form::label('intro', 'Intro:') !!}
    {!! Form::text('intro', null, ['class' => 'form-control']) !!}
</div>

<!-- Upper Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('upper_content', 'Upper Content:') !!}
    {!! Form::textarea('upper_content', null, ['class' => 'form-control ckeditor']) !!}
</div>

<!-- Lower Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('lower_content', 'Lower Content:') !!}
    {!! Form::textarea('lower_content', null, ['class' => 'form-control ckeditor']) !!}
</div>

<!-- Meta Description Field -->
<div class="form-group col-sm-8 col-lg-8">
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
<div class="form-group col-sm-4">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Lang Field -->
<div class="form-group col-sm-4">
    {!! Form::label('lang', 'Lang:') !!}
    {!! Form::text('lang', null, ['class' => 'form-control']) !!}
</div>

<!-- Icon Class Field -->
<div class="form-group col-sm-4">
    {!! Form::label('icon_class', 'Icon Class:') !!}
    {!! Form::text('icon_class', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('services.index') !!}" class="btn btn-default">Cancel</a>
</div>
