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


Route::group(array('prefix' => 'bn'), function()
{
    Route::get('/', function () {
    return view('index');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/contactus', function () {
    return view('contactus');
});
Route::get('/test', function () {
    return view('test');
});
Route::auth();
Auth::routes();
Route::get('/adultnames','AdultNamesController@show');
Route::post('/adultnames','AdultNamesController@generate');
Route::get('/process_adult','AdultNamesController@process_adult');
Route::get('/adultgallery/{type}','AdultGalleryController@show');
Route::post('/adultgallery','AdultGalleryController@store');
Route::get('/babynames','BabynameController@show');
Route::get('/process_baby','BabynameController@generate');
Route::get('/babygallery/{type}','BabyGalleryController@show');
Route::post('/babygallery','BabyGalleryController@store');
Route::get('/sendmail','ContactusController@sendmail');
Route::get('/home', 'HomeController@index');
Route::get('/addcharacter',function(){
    return view('addcharacter');
});
Route::post('/addcharacter','CharacterController@store');
Route::get('/characterlist','CharacterController@show');
Route::get('/character/delete/{id}','CharacterController@delete');


Route::get('/addpeople',function(){
    return view('addpeople');
});
Route::post('/addpeople','PeopleController@store');
Route::get('/peoplelist','PeopleController@show');
Route::get('/people/delete/{id}','PeopleController@delete');

Route::get('/addname',function(){
    return view('addname');
});
Route::post('/addname','NameController@store');
Route::get('/namelist','NameController@show');
Route::get('/name/delete/{id}','NameController@delete');
Route::post('/updatename','NameController@update');
Route::get('/importnames','NameController@import');
Route::get('/product/delete/{id}', 'ProductsController@delete');
Route::get('/addproduct',function(){
    return view('addproduct');
});
});


Route::group(array('prefix' => 'v1'), function()
{
   Route::post('/createorder', 'OrdersController@storev1');

    Route::get('/createorder', function() {
        return view('v1/CreateOrder');
    });
    Route::post('/updateorder', 'OrdersController@UpdateOrderv1');
    Route::get('/updateorder', function() {
        return view('v1/UpdateOrder');
    });

    Route::post('/updatehawb', 'OrdersController@UpdateHAWBv1');

    Route::get('/updatehawb', function() {
        return view('v1/UpdateHawb');
    });

    

    Route::get('/importExport', function() {
        return view('v1/importExport');
    });
    Route::post('/importExcel', 'MaatwebsiteDemoController@importExcelv1');
});

Route::group(array('prefix' => 'v2'), function()
{
   Route::post('/createorder', 'OrdersController@storev2');

    Route::get('/createorder', function() {
        return view('v2/CreateOrder');
    });
    Route::post('/updateorder', 'OrdersController@UpdateOrderv2');
    Route::get('/updateorder', function() {
        return view('v2/UpdateOrder');
    });

    Route::post('/cancelorder', 'OrdersController@CancelOrderv2');

    Route::get('/cancelorder', function() {
        return view('v2/CancelOrder');
    });

    Route::post('/getlabels', 'OrdersController@GetLabelsv2');

    Route::get('/getlabels', function() {
        return view('v2/GetLabels');
    });
    
    Route::post('/wrapshipment', 'OrdersController@WrapShipmentv2');

    Route::get('/wrapshipment', function() {
        return view('v2/WrapShipment');
    });

    Route::get('/importExport', function() {
        return view('v2/importExport');
    });
    Route::post('/importExcel', 'MaatwebsiteDemoController@importExcelv2');
});