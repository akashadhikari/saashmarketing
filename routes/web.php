<?php
/*Route::get('/', function () { return redirect('/admin/home'); });*/

Route::get('/', ['uses' => 'WelcomeController@index']);

Route::get('appointment', ['uses' => 'AppointmentController@index'])->name('frontend.appointment');
Route::post('appointment', ['uses' => 'AppointmentController@store']);

Route::post('/', ['uses' => 'PlanController@index', 'as' => 'plan']);
Route::post('standardplan', ['uses' => 'StandardplanController@index', 'as' => 'standardplan']);
Route::post('premiumplan', ['uses' => 'PremiumplanController@index', 'as' => 'premiumplan']);

Route::get('client', ['uses' => 'ClientController@create', 'as' => 'client']);
Route::post('client', ['uses' => 'ClientController@store', 'as' => 'client'])->name('client.store');

Route::get('mail',['uses' => 'WelcomeController@mail', 'as' => 'mail']);

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('clients', 'Admin\ClientsController');
    Route::post('clients_mass_destroy', ['uses' => 'Admin\ClientsController@massDestroy', 'as' => 'clients.mass_destroy']);
    Route::post('clients_restore/{id}', ['uses' => 'Admin\ClientsController@restore', 'as' => 'clients.restore']);
    Route::delete('clients_perma_del/{id}', ['uses' => 'Admin\ClientsController@perma_del', 'as' => 'clients.perma_del']);
    Route::resource('employees', 'Admin\EmployeesController');
    Route::post('employees_mass_destroy', ['uses' => 'Admin\EmployeesController@massDestroy', 'as' => 'employees.mass_destroy']);
    Route::post('employees_restore/{id}', ['uses' => 'Admin\EmployeesController@restore', 'as' => 'employees.restore']);
    Route::delete('employees_perma_del/{id}', ['uses' => 'Admin\EmployeesController@perma_del', 'as' => 'employees.perma_del']);
    Route::resource('working_hours', 'Admin\WorkingHoursController');
    Route::post('working_hours_mass_destroy', ['uses' => 'Admin\WorkingHoursController@massDestroy', 'as' => 'working_hours.mass_destroy']);
    Route::post('working_hours_restore/{id}', ['uses' => 'Admin\WorkingHoursController@restore', 'as' => 'working_hours.restore']);
    Route::delete('working_hours_perma_del/{id}', ['uses' => 'Admin\WorkingHoursController@perma_del', 'as' => 'working_hours.perma_del']);
    Route::resource('appointments', 'Admin\AppointmentsController');
    Route::post('appointments_mass_destroy', ['uses' => 'Admin\AppointmentsController@massDestroy', 'as' => 'appointments.mass_destroy']);
    Route::post('appointments_restore/{id}', ['uses' => 'Admin\AppointmentsController@restore', 'as' => 'appointments.restore']);
    Route::delete('appointments_perma_del/{id}', ['uses' => 'Admin\AppointmentsController@perma_del', 'as' => 'appointments.perma_del']);

    Route::get('/services', 'Admin\ServiceController@index')->name('services.index');
    Route::get('/services/create', 'Admin\ServiceController@create')->name('services.create');
    Route::post('/services/create', 'Admin\ServiceController@store')->name('services.store');
    Route::get('/services/{id}/show', 'Admin\ServiceController@create')->name('services.show');
    Route::delete('/services/{id}/delete', 'Admin\ServiceController@destroy')->name('services.destroy');
});

Route::get('/custom', ['uses' => 'CustomController@index', 'as' => 'custom']);

