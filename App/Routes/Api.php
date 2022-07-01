<?php
use \Reschit\App\Core\Route;

/** Prefix */
Route::post('/admin','Admin@api');
Route::get('/users',function (){
    return 'api users page';
});