@extends('layouts.app')

@section('content')

<section class="ls ms section_padding_top_50 section_padding_bottom_50 columns_padding_5">
  <div class="container-fluid">
      <div class="row">
          <div class="col-sm-12">
              <h3>Service </h3>
          </div>
      </div>
      <!-- .row -->
      <div class="row">
          <div class="clearfix"></div>
          @include('adminlte-templates::common.errors')
          <div class="clearfix"></div>
          <div class="col-xs-12">
              <div class="with_background with_padding">
                  {!! Form::model($service, ['route' => ['services.update', $service->id], 'method' => 'patch','enctype'=>'multipart/form-data']) !!}
                  @include('services.fields')
                  {!! Form::close() !!}
              </div>
          </div>
      </div>
  </div>
</section>

@endsection
