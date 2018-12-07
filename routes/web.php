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
Route::get('/','IndexController@index');
Route::get('/test','TestController@index');

Route::resources([
    'department' => 'Department\DepartmentController',
]);

Route::resources([
    'project' => 'Project\ProjectController',
]);

Route::resources([
    'employee' => 'Employee\EmployeeController',
]);