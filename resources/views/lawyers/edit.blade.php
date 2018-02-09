@extends('layouts.app')

@section('content')

<section class="ls ms section_padding_top_50 section_padding_bottom_50 columns_padding_5">
  <div class="container-fluid">
      <div class="row">
          <div class="col-sm-12">
              <h3>Lawyer </h3>
          </div>
      </div>
      <!-- .row -->
      <div class="row">
          <div class="clearfix"></div>
          @include('adminlte-templates::common.errors')
          <div class="clearfix"></div>
          <div class="col-xs-12">
              <div class="with_background with_padding">
                  {!! Form::model($lawyer, ['route' => ['lawyers.update', $lawyer->id], 'method' => 'patch','enctype'=>'multipart/form-data']) !!}
                  @include('lawyers.fields')
                  {!! Form::close() !!}
              </div>
          </div>
      </div>
  </div>
</section>



@endsection


@section('bottom-scripts')

    <script>
        jquery(document).on('ready', function($) {
            if($("#input-image").length){
                $("#input-image").fileinput({
                    uploadUrl: $("#input-image").attr('data-upload'),
                    allowedFileExtensions: ['jpg', 'png', 'gif'],
                    overwriteInitial: false,
                    initialPreview:
                        ($("#input-image").attr('data-src'))?jQuery.parseJSON( $("#input-image").attr('data-src')):'',
                    initialPreviewConfig:
                        ($("#input-image").attr('data-config'))?jQuery.parseJSON( $("#input-image").attr('data-config')):'',
                    initialPreviewAsData: true, // defaults markup
                    maxFileSize: 500000,
                    maxFilesNum: 4,
                    // allowedFileTypes: ['image', 'video', 'flash'],
                    slugCallback: function (filename) {
                        return filename.replace('(', '_').replace(']', '_');
                    }
                });
            }
            {{--$("#input-image").fileinput({--}}
                {{--uploadUrl: "/images/lawyers/",--}}
                {{--@if($lawyer->image)--}}
                {{--initialPreview: [--}}
                    {{--'<img src="{{ url("images/lawyers").'/' . $lawyer->image }}" />'--}}
                {{--],--}}

                {{--@endif--}}
                {{--uploadAsync: false,--}}
                {{--minFileCount: 1,--}}
                {{--maxFileCount: 1,--}}
                {{--overwriteInitial: false,--}}
                {{--initialPreviewAsData: false,--}}
                {{--initialPreviewFileType: 'image',--}}
                {{--initialPreviewDownloadUrl: '{{ url("images/lawyers").'/' . $lawyer->image }}',--}}

                {{--previewFileType: "image",--}}
                {{--browseClass: "btn btn-success",--}}
                {{--browseLabel: "Pick Image",--}}
                {{--browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",--}}
                {{--removeClass: "btn btn-danger",--}}
                {{--removeLabel: "Delete",--}}
                {{--removeIcon: "<i class=\"glyphicon glyphicon-trash\"></i> ",--}}
                {{--uploadClass: "btn btn-info",--}}
                {{--uploadLabel: "Upload",--}}
                {{--uploadIcon: "<i class=\"glyphicon glyphicon-upload\"></i> "--}}
            {{--});--}}

            $("#input-banner").fileinput({
                previewFileType: "image",
                browseClass: "btn btn-success",
                browseLabel: "Pick Image",
                browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",
                removeClass: "btn btn-danger",
                removeLabel: "Delete",
                removeIcon: "<i class=\"glyphicon glyphicon-trash\"></i> ",
                uploadClass: "btn btn-info",
                uploadLabel: "Upload",
                uploadIcon: "<i class=\"glyphicon glyphicon-upload\"></i> "
            });
        });
    </script>
@endsection