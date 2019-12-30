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
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function() {
    return view('hello');
});

Route::post('/', function (Request $request) {
    /* $users = App\User::all();
    foreach ($users as $user) {
        echo "<br>";
        echo $user->email;
    } */
    $user = App\User::find($request->id);
    echo $user->name;
    echo "<br>";
    echo $user->email;
})->name('form');

Route::get('/user/{id}', 'UserController');

Route::get('users/{user}', function (App\User $user) {
    /* if (empty($user->id)) {
        return redirect('/');
    } */
    return $user->email;
})->middleware('exist_user');

Route::get('not18', function () {
    return "Вам нет 18-ти!";
})->name('not_18');

Route::get('/age/{age}', function ($age) {
    return "Вам $age лет.";
})->middleware('checkage');

Route::get('/helloworld', function () {
    return "Hello World!";
});

Route::get('/array', function () {
    return [1,2,3];
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
