<?php
Route::resource('employee','EmployeeController');
Route::resource('company','CompanyController');
// Route::post('company','CompanyController@store')->name('company.index');
//Route::resource('admin','AdminController');

Route::get('/',function()
{
  return view('welcome');
}
);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
