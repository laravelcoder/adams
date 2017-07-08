<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Upper Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('upper_content', 'Upper Content:') !!}
    {!! Form::textarea('upper_content', null, ['class' => 'form-control']) !!}
</div>

<!-- Lower Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('lower_content', 'Lower Content:') !!}
    {!! Form::textarea('lower_content', null, ['class' => 'form-control']) !!}
</div>

<!-- Meta Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('meta_description', 'Meta Description:') !!}
    {!! Form::textarea('meta_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Bio Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('bio', 'Bio:') !!}
    {!! Form::textarea('bio', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image') !!}
</div>
<div class="clearfix"></div>

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

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('lawyers.index') !!}" class="btn btn-default">Cancel</a>
</div>
