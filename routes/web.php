<?php

    Route::get('/r', function () {
        function philsroutes()
        {
            $routeCollection = Route::getRoutes();
            echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">';
            echo "<div class='container'><div class='col-md-12'><table class='table table-striped' style='width:100%'>";
            echo '<tr>';
            echo "<td width='10%'><h4>HTTP Method</h4></td>";
            echo "<td width='30%'><h4>URL</h4></td>";
            echo "<td width='30%'><h4>Route</h4></td>";
            echo "<td width='30%'><h4>Corresponding Action</h4></td>";
            echo '</tr>';
            foreach ($routeCollection as $value) {
                echo '<tr>';
                echo '<td>'.$value->methods()[0].'</td>';
                echo "<td><a href='".$value->uri()."' target='_blank'>".$value->uri().'</a> </td>';
                echo '<td>'.$value->getName().'</td>';
                echo '<td>'.$value->getActionName().'</td>';
                echo '</tr>';
            }
            echo '</table></div></div>';
            echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>';
        }

        return philsroutes();
    });

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* admin areas  */


Route::get('tasks' , ['as' => 'tasks', 'uses' => 'TasksController@index']);
Route::get('tasks/{task}', ['as' => 'tasks.show', 'uses' => 'TasksController@show']);


Auth::routes();

Route::get('/home', 'HomeController@index');


Route::resource('posts', 'PostController');

Route::resource('services', 'ServiceController');

Route::resource('pages', 'PageController');

Route::resource('attorneys', 'AttorneyController');

Route::resource('staff', 'StaffController');

Route::resource('cases', 'CaseController');

Route::resource('courthouses', 'CourthouseController');

Route::resource('courtdates', 'CourtdateController');

Route::resource('timelines', 'TimelineController');



/* live site areas  */



Route::get('/', [ 'as' => 'homepage', 'uses' => 'SiteController@index']);
Route::get('services/{service}', [ 'as' => 'homepage', 'uses' => 'ServiceController@show']);
