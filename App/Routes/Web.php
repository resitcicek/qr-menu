<?php
use \Reschit\App\Core\Route;
use Reschit\App\Core\Session;

/** Get class's function */
Route::get('/',function(){
   return view('index');
});
Route::get('/menu/:username','Home@Menu')->name('menu');

/** Admin Pages */
Route::prefix('/admin')->group(function (){
    Route::get('/', 'Admin@Index')->name('home');
    Route::get('/profile', 'Admin@Profile')->name('profile');
    $user = Session::read('user');
    if(@$user->type == 1) {
        Route::get('/add-user', 'Admin@AddUser')->name('add-user');
        Route::get('/users', 'Admin@Users')->name('users');
        Route::get('/edit-user/:username', 'Admin@EditUser')->name('edit-user');
        Route::get('/delete-user/:username', 'Admin@DeleteUser')->name('delete-user');
        Route::get('/admin-settings', 'Admin@AdminSettings')->name('admin-settings');
    }
    else {
        Route::get('/categories', 'Admin@Categories')->name('categories');
        Route::get('/add-category', 'Admin@AddCategory')->name('add-category');
        Route::get('/edit-category/:id', 'Admin@EditCategory')->name('edit-category');
        Route::get('/delete-category/:id', 'Admin@DeleteCategory')->name('delete-category');
        Route::get('/foods', 'Admin@Foods')->name('foods');
        Route::get('/add-food', 'Admin@AddFood')->name('add-food');
        Route::get('/edit-food/:id', 'Admin@EditFood')->name('edit-food');
        Route::get('/delete-food/:id', 'Admin@DeleteFood')->name('delete-food');
        Route::get('/settings', 'Admin@Settings')->name('settings');
    }
    Route::get('/logout', function (){
        \Reschit\App\Core\Session::delete('logged');
        \Reschit\App\Core\Session::delete('user');
        header('Location:'.url('home'));
    })->name('logout');

});

/** Redirect method */
Route::redirect('/ankara', '/hatay', 301);