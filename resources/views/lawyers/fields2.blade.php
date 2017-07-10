


<!-- Status Field -->
<div class="form-group col-sm-4">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', [' Published' => ' Published', ' Un-published' => ' Un-published'], null, ['class' => 'form-control']) !!}
</div>
<div style="clear:both"></div>

<!-- Name Field -->
<div class="form-group col-sm-8">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<!-- Title Field -->
<div class="form-group col-sm-4">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-4">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-4">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Upper Content Field -->
<div class="form-group col-sm-8 col-lg-8">
    {!! Form::label('upper_content', 'Upper Content:') !!}
    {!! Form::textarea('upper_content', null, ['class' => 'form-control']) !!}
</div>

<!-- Bio Field -->
<div class="form-group col-sm-4 col-lg-4">
    {!! Form::label('bio', 'Bio:') !!}
    {!! Form::textarea('bio', null, ['class' => 'form-control']) !!}
</div>


<!-- Lower Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('lower_content', 'Lower Content:') !!}
    {!! Form::textarea('lower_content', null, ['class' => 'form-control']) !!}
</div>
 <hr />
<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image') !!}
</div>
<div class="clearfix"></div>

<hr />
<!-- Meta Description Field -->
<div class="form-group col-sm-12 col-lg-10">
    {!! Form::label('meta_description', 'Meta Description:') !!}
    {!! Form::textarea('meta_description', null, ['class' => 'form-control']) !!}
</div>








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

<div style="clear:both"></div>

<!-- Video Field -->
<div class="form-group col-sm-4">
    {!! Form::label('video', 'Video:') !!}
    {!! Form::text('video', null, ['class' => 'form-control']) !!}
</div>

<!-- Video2 Field -->
<div class="form-group col-sm-4">
    {!! Form::label('video2', 'Video2:') !!}
    {!! Form::text('video2', null, ['class' => 'form-control']) !!}
</div>

<!-- Video3 Field -->
<div class="form-group col-sm-4">
    {!! Form::label('video3', 'Video3:') !!}
    {!! Form::text('video3', null, ['class' => 'form-control']) !!}
</div>

<!-- Banner Field -->
<div class="form-group col-sm-6">
    {!! Form::label('banner', 'Banner:') !!}
    {!! Form::file('banner') !!}
</div>
<div class="clearfix"></div>
<hr />

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('lawyers.index') !!}" class="btn btn-default">Cancel</a>
</div>


<div style="clear:both"></div>
