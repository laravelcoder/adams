<?php

Route::get('/r', function ()
{
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

        foreach ($routeCollection as $value)
        {
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

//$router->model('services', 'App\Models\Service');



/* admin areas  */
Route::middleware('auth')->group(function ()
{
    Route::prefix('secure')->group(function ()
    {
    	Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'HomeController@dashboard']);

        Route::get('tasks', ['as' => 'tasks', 'uses' => 'TasksController@index']);
        Route::get('tasks/{task}', ['as' => 'tasks.show', 'uses' => 'TasksController@show']);

        Route::resource('posts', 'PostController');

        Route::resource('services', 'ServiceController', ['except' => ['show'], 'names' => [
            'create' => 'services.create'
        ]]);

        Route::resource('pages', 'PageController');

        Route::resource('lawyers', 'LawyerController');

        Route::resource('staff', 'StaffController');

        Route::resource('overviews', 'OverviewController');

        Route::resource('courthouses', 'CourthouseController');

        Route::resource('courtdates', 'CourtdateController');

        Route::resource('categories', 'CategoryController');

        Route::resource('timelines', 'TimelineController');

        Route::resource('users', 'UserController');

    });
});

/* live site areas  */


Auth::routes();
Route::get('/', ['as' => 'homepage', 'uses' => 'SiteController@homepage']);

Route::get('services/{service}', ['as' => 'service', 'uses' => 'ServiceController@show']);

Route::get('blog', ['as' => 'blog', 'uses' => 'BlogController@index']);
Route::get('blog/{post}', ['as' => 'post', 'uses' => 'BlogController@show']);

Route::get('attorneys', ['as' => 'attorneys', 'uses' => 'AttorneysController@index']);
Route::get('attorneys/{attorney}', ['as' => 'attorney', 'uses' => 'AttorneysController@show']);

Route::get('team', ['as' => 'team', 'uses' => 'TeamController@index']);
Route::get('team/{staff}', ['as' => 'associate', 'uses' => 'TeamController@show']);

Route::get('contact', ['as' => 'contact', 'uses' => 'ContactController@index']);
Route::post('contact/sendrequest', ['as' => 'contact.sendreuest', 'uses' => 'ContactController@sendrequest']);




