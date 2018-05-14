<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => ['web']], function() 
    {
        Route::get('/', function() { 
            return view('welcome');
       }) -> name('home');
      

Route::get('/home', [  
'uses' =>'PagesController@home',
'as'  => 'home',
'middleware'  => 'auth'
]);
Route::get('/football', [
    'uses' =>'PagesController@football',
    'as'  => 'football',
    ]);
Route::get('/premium',[ 
    'uses'=>'PagesController@premium',
    'as'  =>'premium',
    ]);
Route::get('/rugby', 'PagesController@rugby');
Route::get('/formula1', 'PagesController@formula1');
;
Route::get('/delete-post/{post_id}', [
    'uses' => 'PostController@getDeletePost',
    'as'  => 'post.delete',  
]);
Route::get('/stream',[
    'uses'=>'PostController@stream',
    'as' => 'stream',
    ]);

route::get('/logout',[
    'uses'=> 'userController@getLogout',
    'as' => 'logout'
]);
Route::get('/account',[
    'uses' => 'userController@getAccount',
    'as' => 'account'
]);
Route::get('/userimage/{filename}',[
    'uses' => 'userController@getuserimage',
    'as' => 'account.image'
]);
    Route::get('/signin', 'pagesController@signin');   
    Route::get('/signup', 'pagesController@signup');
        
Route::post('/signin',[
    'uses'=>'userController@postsignin',
    'as' => 'signin'
    ]);
 
Route::post('/updateaccount',[
    'uses'=>'userController@postSaveAccount',
    'as' => 'account.save'
]);
Route::post('/signup', [
    'uses' => 'userController@postsignup',
    'as' => 'signup'
] );
 route::post('/home',[
    'uses'  => 'pagesController@home',
    'as'   => 'home',
             
 ]);
          
Route::post('/football',[   
'uses' => 'pagesController@football',
  'as' => 'football'
]);
Route::post('/rugby', [  
'uses' =>'PagesController@rugby',
'as' => 'rugby'
]);
Route::post('/formula1', [
'uses'=>'PagesController@formula1',
'as'   =>  'formula1'
]);
Route::post('/',[
    'uses' => 'pagesController@welcome',
    'as'  => 'welcome'
]);

Route::post('/stream',[
    'uses' => 'PostController@stream',
    'as'  => 'stream'
    
]);
Route::post('/createpost',[
    'uses' => 'PostController@postCreatePost',
    'as'  => 'post.create',
    
]);
    });
    
