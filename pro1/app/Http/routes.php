<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// to get muliple variable 
/*Route::get('user/{name}',function($name){
	$view = view('user.profile')->with('name' ,$name);
    $view->adress = 'Adress 2323 .st';
    $view->age ='27';
    $view->country = array('gada' ,'maka', 'elryad','saudia');

    return $view;
});
*/

// to make controller 
//Route::get('user/{id}','UserController@showprofile');
Route::resource('cat' ,'CatController');

Route::resource('user','UserController');

//reguler expression
//1 for digit 
/*Route::get('page/{id}',function($id){
      
      return $id;
})->where('id', '\d+');

*/
//2 for character
/*Route::get('page/{username}',function($username){
      
      return $username;
})->where('username', '[A-Za-z]+');
*/

// for digit and character
Route::get('page/{username}',function($username){
      
      return $username;
})->where('username', '[A-z \d]+');


Route::get('boot',function(){
  return view('bootstrap');

});

Route::get('login',function(){
    // to check if pass is authenticated 
    // $pass = Hash::make('password');
     //return $pass;
     return view('user.login');

});

Route::post('login',function(){
    if ( Auth::attempt(
      array('email'=>Input::get('email'),
             'password'=>Input::get('password'))))
    {
      return Redirect::intended('dashboard');
    
}
});

Route::get('dashboard', array('before'=>'auth', function(){
   Auth::logout();
  return 'this is dashboard !';

}));

Route::get('file',function(){
       return view('file.upload');
});
Route::post('file',function(){
      if (Input::hasFile('file')){
        $dest = 'images/';
        $name = str_random(6).'_'.Input::file('file')->getClientOriginalName();
        Input::file('file')->move($dest, $name);
        return Redirect::to('file');

      }
});

Route::get('test', function(){
  return view('layout.page')->with('title',' this is page titlesw');

});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
