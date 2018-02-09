




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



<!-- Intro Field -->
<div class="form-group col-sm-11">
    {!! Form::label('intro', 'Intro:') !!}
    {!! Form::text('intro', null, ['class' => 'form-control']) !!}
    <small>this is the small text in the popups on homepage and attorneys</small>
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


<div class="col-md-6">
    {{--@if ($lawyer->image)--}}
        {{--<img src="/images/lawyers/{{ $lawyer->image }}">--}}
    {{--@else--}}
        {{--<p>No image found</p>--}}
    {{--@endif--}}
    {{--{!! Form::file('image',['id' => 'input-image', 'class' => 'file', 'accept' => 'image/*']) !!}--}}
    <div class="file-loading">
        {{--<input id="input-image" name="image" type="file" accept="image/*" class="file">--}}
        <input id="input-image" type="file" name="image" class="file" data-overwrite-initial="false" data-src='{!!@$image!!}' data-config='{!!@$image_config!!}' data-upload="{!! url('lawyers/uploadimage?_token=' . csrf_token()) !!}">
    </div>
</div>
{{-- image here
{!!@$image!!}
image config here
{!!@$image_config!!} --}}
<div class="form-group col-sm-6">

    <!-- Facebook Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('facebook', 'Facebook:') !!}
        {!! Form::text('facebook', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Twitter Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('twitter', 'Twitter:') !!}
        {!! Form::text('twitter', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Googleplus Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('googleplus', 'Googleplus:') !!}
        {!! Form::text('googleplus', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Youtube Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('youtube', 'Youtube:') !!}
        {!! Form::text('youtube', null, ['class' => 'form-control']) !!}
    </div>

</div>


<!-- linkedin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('linkedin', 'Linkedin:') !!}
    {!! Form::text('linkedin', null, ['class' => 'form-control']) !!}
</div>

<!-- other_link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('other_link', 'Other Link:') !!}
    {!! Form::text('other_link', null, ['class' => 'form-control']) !!}
</div>

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
    {!! Form::file('banner',['id' => 'input-banner', 'class' => 'file']) !!}
</div>
<div class="clearfix"></div>
<hr />

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('lawyers.index') !!}" class="btn btn-default">Cancel</a>
</div>


<div style="clear:both"></div>
