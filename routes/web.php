<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//Route::group(['middleware' => ['web']], function(){
  Route::bind('book',function($slug){
    return App\Book::where('slug',$slug)->first();

  });

  Route::bind('order',function($order){
    return App\Order::find($order);

  });

  Route::bind('gender', function($gender){
    return App\Gender::find($gender);
  });

  Route::bind('editorial', function($editorial){
    return App\Editorial::find($editorial);
  });

  Route::bind('author', function($author){
    return App\Author::find($author);
  });

  Route::bind('user', function($user){
    return App\User::find($user);
  });

  Route::get('/', [
    'as' => 'home',
    'uses' => 'StoreController@index'
  ]);

  Route::get('book/{slug}', [
    'as' => 'book-detail',
    'uses' => 'StoreController@show'
  ]);

  Route::get('cart/show',[
    'as' => 'cart-show',
    'uses' => 'CartController@show'
  ]);

  Route::get('cart/add/{book}',[
    'as' => 'cart-add',
    'uses' => 'CartController@add'
  ]);

  Route::get('cart/delete/{book}',[
    'as' => 'cart-delete',
    'uses' => 'CartController@delete'
  ]);

  Route::get('cart/trash',[
    'as' => 'cart-trash',
    'uses' => 'CartController@trash'
  ]);

  Route::get('cart/update/{book}/{quantify?}',[
    'as' => 'cart-update',
    'uses' => 'CartController@update'
  ]);

  Route::get('order-detail', [
    'middleware' => 'auth',
    'as' => 'order-detail',
    'uses' => 'CartController@orderDetail'
  ]);

  Route::get('cart/sale',[
    'as' => 'cart-sale',
    'uses' => 'CartController@payment'
  ]);

  // Authentication Routes...
  Route::get('login', [
    'as' => 'login-get',
    'uses' => 'Auth\LoginController@showLoginForm'
  ]);

  Route::post('login', [
    'as' => 'login-post',
    'uses' => 'Auth\LoginController@login'
  ]);

  Route::get('logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout'
  ]);

  // Registration Routes...
  Route::get('register', [
    'as' => 'register-get',
    'uses' => 'Auth\RegisterController@showRegistrationForm'
  ]);

  Route::post('register', [
    'as' => 'register-post',
    'uses' => 'Auth\RegisterController@register'
  ]);

  // Password Reset Routes...
  Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
  Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
  Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
  Route::post('password/reset', 'Auth\ResetPasswordController@reset');

  //ADMIN
//  Route::group(array('prefix' => 'admin'), function(){
  //    Route::get('gender','GenderController@index');
//}
Route::get('admin/home',[
  'as' => 'admin-home',
  'uses' => 'StoreController@adminindex'
]);
    Route::get('admin/gender',[
      'as' => 'gender',
      'uses' => 'Admin\GenderController@index'
    ]);
    Route::get('admin/gender/create',[
      'as' => 'gender-create',
      'uses' => 'Admin\GenderController@create'
    ]);

    Route::post('admin/gender/store',[
      'as' => 'gender-store',
      'uses' => 'Admin\GenderController@store'
    ]);

    Route::get('admin/gender/{gender}/edit',[
      'as' => 'gender-edit',
      'uses' => 'Admin\GenderController@edit'
    ]);

    Route::post('admin/gender/{gender}',[
      'as' => 'gender-update',
      'uses' => 'Admin\GenderController@update'
    ]);

    Route::post('admin/gender/destroy/{gender}',[
      'as' => 'gender-destroy',
      'uses' => 'Admin\GenderController@destroy'
    ]);

    //
    Route::get('admin/editorial',[
      'as' => 'editorial',
      'uses' => 'Admin\EditorialController@index'
    ]);
    Route::get('admin/editorail/create',[
      'as' => 'editorial-create',
      'uses' => 'Admin\EditorialController@create'
    ]);

    Route::post('admin/editorial/store',[
      'as' => 'editorial-store',
      'uses' => 'Admin\EditorialController@store'
    ]);

    Route::get('admin/editorial/{editorial}/edit',[
      'as' => 'editorial-edit',
      'uses' => 'Admin\EditorialController@edit'
    ]);

    Route::post('admin/editorial/{editorial}',[
      'as' => 'editorial-update',
      'uses' => 'Admin\EditorialController@update'
    ]);

    Route::post('admin/editorial/destroy/{editorial}',[
      'as' => 'editorial-destroy',
      'uses' => 'Admin\EditorialController@destroy'
    ]);

    //Authors
    Route::get('admin/author',[
      'as' => 'author',
      'uses' => 'Admin\AuthorController@index'
    ]);
    Route::get('admin/author/create',[
      'as' => 'author-create',
      'uses' => 'Admin\AuthorController@create'
    ]);

    Route::post('admin/author/store',[
      'as' => 'author-store',
      'uses' => 'Admin\AuthorController@store'
    ]);

    Route::get('admin/author/{author}/edit',[
      'as' => 'author-edit',
      'uses' => 'Admin\AuthorController@edit'
    ]);

    Route::post('admin/author/{author}',[
      'as' => 'author-update',
      'uses' => 'Admin\AuthorController@update'
    ]);

    Route::post('admin/author/destroy/{author}',[
      'as' => 'author-destroy',
      'uses' => 'Admin\AuthorController@destroy'
    ]);

    //Books
    Route::get('admin/book',[
      'as' => 'book',
      'uses' => 'Admin\BookController@index'
    ]);
    Route::get('admin/book/create',[
      'as' => 'book-create',
      'uses' => 'Admin\BookController@create'
    ]);

    Route::post('admin/book/store',[
      'as' => 'book-store',
      'uses' => 'Admin\BookController@store'
    ]);

    Route::get('admin/book/{book}/edit',[
      'as' => 'book-edit',
      'uses' => 'Admin\BookController@edit'
    ]);

    Route::post('admin/book/{book}',[
      'as' => 'book-update',
      'uses' => 'Admin\BookController@update'
    ]);

    Route::post('admin/book/destroy/{book}',[
      'as' => 'book-destroy',
      'uses' => 'Admin\BookController@destroy'
    ]);

    //users
    Route::get('admin/user',[
      'as' => 'user',
      'uses' => 'Admin\UserController@index'
    ]);
    Route::get('admin/user/create',[
      'as' => 'user-create',
      'uses' => 'Admin\UserController@create'
    ]);

    Route::post('admin/user/store',[
      'as' => 'user-store',
      'uses' => 'Admin\UserController@store'
    ]);

    Route::get('admin/user/{user}/edit',[
      'as' => 'user-edit',
      'uses' => 'Admin\UserController@edit'
    ]);

    Route::post('admin/user/{user}',[
      'as' => 'user-update',
      'uses' => 'Admin\UserController@update'
    ]);

    Route::post('admin/user/destroy/{user}',[
      'as' => 'user-destroy',
      'uses' => 'Admin\UserController@destroy'
    ]);

    //uorder
    Route::get('admin/order',[
      'as' => 'order',
      'uses' => 'Admin\OrderController@index'
    ]);

    Route::get('admin/order/getItem',[
      'as' => 'order-getItem',
      'uses' => 'Admin\OrderController@getItems'
    ]);

    Route::post('admin/order/destroy/{order}',[
      'as' => 'order-destroy',
      'uses' => 'Admin\OrderController@destroy'
    ]);






//});
