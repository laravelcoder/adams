@extends('layouts.app')

@section('content')
<section class="ls ms section_padding_top_50 section_padding_bottom_50 columns_padding_5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h3>Staff
                    <small><a href="{!! route('staff.create') !!}">Add New</a></small>
                </h3>
            </div>
        </div>
        <!-- .row -->
        <div class="row">
            <div class="clearfix"></div>
            @include('flash::message')
            <div class="col-xs-12">
                <div class="with_background with_padding">
                    <div class="table-responsive">
                        @include('staff.table')
                    </div>
                </div>
            </div>
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
@endsection


