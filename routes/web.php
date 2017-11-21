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
    //return view('welcome');
    return view('stx.login');
    //return view('auth.login');
});

Auth::routes();
//$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
//$this->post('login', 'Auth\LoginController@login');
//$this->post('logout', 'Auth\LoginController@logout')->name('logout');
$this->get('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/home', 'HomeController@index');
Route::get('site-info', 'SiteInfoController@index');

//Route::get('monitoring-analog-input');

Route::group(['prefix' => 'monitoring'], function () {
    Route::get('analog-input', 'MonitoringController@analogInput');
    Route::get('digital-input', 'MonitoringController@digitalInput');
    Route::get('temperature', 'MonitoringController@temperatureHumidity');
    Route::get('sps', 'MonitoringController@solarPanel');
});

Route::group(['prefix' => 'ajax-monitoring'], function () {
    Route::get('analog-input', 'MonitoringController@ajaxAnalogInput');
    Route::get('digital-input', 'MonitoringController@ajaxDigitalInput');
    Route::get('temperature', 'MonitoringController@ajaxTemperatureHumidity');
    Route::get('sps', 'MonitoringController@ajaxSolarPanel');
});

Route::group(['prefix' => 'settings'], function () {
    Route::get('date-time', 'SettingsController@dateTime');
    Route::get('site-info', 'SettingsController@siteInformation');
    Route::get('networks', 'SettingsController@network');
    Route::get('analog-input', 'SettingsController@analogInput');
    Route::get('digital-input', 'SettingsController@digitalInput');
    Route::get('temperature', 'SettingsController@temperatureHumidity');
    Route::get('sps', 'SettingsController@solarPanel');
});

Route::group(['prefix'=>'save_ajax'],function (){
   Route::post('date-time','SettingsController@saveDateTime')->name('save dtime');
   //Route::post('site-information',)


});

Route::group(['super-admin'], function () {
    Route::get('factory-reset', 'SuperAdminController@factoryReset');
    Route::get('users-administration', 'SuperAdminController@userAdministration');
});

Route::group(['prefix'=>'datalogs'],function (){
    Route::get('monitoring', 'DataLogController@index');
    Route::get('alarm', 'AlarmLogController@index');

});

Route::any('animate',function (){
    return view('debug.animate_test');
});


