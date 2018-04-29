<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| learn module routes
|--------------------------------------------------------------------------
*/
Route::prefix('learn')->group(function () {
    Route::get('/',  'learn_module\TrackHomeController@index');
    Route::get('/track/{track_name}/',  'learn_module\TrackController@index');

});
/*
Route::prefix('quiz')->group(function()){
  Route::get('/','quiz_module\TrackHomeController@index');
  Route::get('/track/{quiz_name}','quiz_module')
});
*/



Route::get('/learn-module', function () {

  // $menus = App\models\learn_module\menuParent::with('menus')->get();
  // echo nl2br($menus[0]["menus"][12]);
  // echo "<br>";

  $tracks = App\models\learn_module\track_category::with('tracks')->get();
  echo nl2br($tracks[0]["tracks"][1]);
  echo "<br>";
  $menuParent= App\models\learn_module\tracks::with('menuParent')->get();
  echo ($menuParent);

});

Route::get('/quiz-module', function () {

  // $menus = App\models\learn_module\menuParent::with('menus')->get();
  // echo nl2br($menus[0]["menus"][12]);
  // echo "<br>";
/*
  $tracks = App\models\quiz_module\track_category::with('tracks')->get();
  echo ($tracks); */

  $quizList= App\models\quiz_module\QuizParent::with('quizList')->get();

return $quizList;


});
/*
Route::get('/learn-module-track', function () {

  $tracks = App\models\learn_module\track_category::with('tracks')->get();

  echo($tracks[0]["tracks"][1]);
});  */
