@extends('layouts.app')

@section('content')
            <section class="ls ms section_padding_top_50 section_padding_bottom_50 columns_padding_5">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Dashboard
                                <small><a href="{!! url('tasks/create') !!}">Add New</a></small>
                            </h3>
                        </div>
                    </div>
                    <!-- .row -->

                    <div class="row">
                        <div class="clearfix"></div>
                         @include('flash::message')
                         <div class="clearfix"></div>

							<div class="col-xs-12">
								<div class="with_background with_padding">
									<div class="table-responsive">
										<table class="table table-responsive table-striped">
										    <thead>
										        <th>Task</th>
										        <th>Completed</th>
										        <th>Created</th>
										        <th colspan="3">Action</th>
										    </thead>
										    <tbody>
										    @foreach($tasks as $task)
										        <tr>
										            <td><span>{!! $task->task !!}</span></td>
										            <td>{!! ($task->completed) ? '<i class="fa fa-check-circle-o fa-lg text-success" style="color:green"></i>' : '<i class="fa fa-times-circle fa-lg text-danger" style="color:red"></i>'  !!}</td>


										            <td colspan="1">{!! $task->created_at->format('F d, Y') !!}</td>
										            <td>

										            </td>
										        </tr>
										    @endforeach
										    </tbody>
										</table>
									</div>
								</div>
							</div>

                    </div>
                    <!-- .row -->

                </div>
                <!-- .container -->

            </section>
@endsection

