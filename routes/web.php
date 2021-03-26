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

/*Route::get('/', function () {
    return view('welcome');
});*/

//pages routes
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/blog', 'PagesController@blog');
Route::get('/arunachal-in-its-heart','PagesController@arunachalinitsheart');
Route::get('/hidden-parts-of-northeast','PagesController@hiddenpartsofnortheast');
Route::get('/what-to-pack','PagesController@whattopack');
Route::get('/dzukou-valley-trip', 'PagesController@dzukouvalley');
Route::get('/ziro-festival-of-music', 'PagesController@zfm');
Route::get('/terms-and-conditions', 'PagesController@terms');
Route::get('/nh7', 'PagesController@nh7');
Route::get('/ecotourism', 'PagesController@ecotourism');
Route::get('/hornbill', 'PagesController@hornbill');
Route::get('/dawki', 'PagesController@dawki');
Route::get('/mawsynram','PagesController@mawsynram');
Route::get('/nongkhnum','PagesController@nongkhnum');
Route::get('/campsites','PagesController@campsites');
Route::get('/khanapara','PagesController@khanapara');
Route::get('/abc-trek', 'PagesController@abc');
Route::get('/rentals', 'PagesController@travels');
Route::get('/sevensister','PagesController@sevensis');
Route::get('/sevensister1','PagesController@sevensis1');
Route::get('/sevensister2','PagesController@sevensis2');
Route::get('/sevensister3','PagesController@sevensis3');
Route::get('/sevensister4','PagesController@sevensis4');
Route::get('/sevensister5','PagesController@sevensis5');
Route::get('/dzukou','PagesController@dzukous');
Route::get('/carbon','PagesController@carbon');
Route::get('/staycations','PagesController@staycations');
Route::get('/tours','PagesController@tours');
Route::get('/hillside','PagesController@hillside');
Route::get('/grandsevensister','PagesController@grand');
Route::get('/thank-you','PagesController@thankyou');
Route::get('/freedom-trip-to-meghalaya','PagesController@freedomTripToMeghalaya');
Route::get('/trip-to-mystical-tawang','PagesController@tripToMysticalTawang');


// tours post request

Route::post('/sevenleads','SevenSisterController@store');
Route::post('/dzukouleads','DzukouController@store');
Route::post('/freedom-trip-to-meghalaya-leads','FreedomController@store');
Route::post('/trip-to-mystical-tawang-leads','MysticalController@store');

//campsites post request
Route::post('/dawkileads','DawkiController@store');
Route::post('/mawleads','MawController@store');
Route::post('/nongleads','NongController@store');
Route::post('/khanaparaleads','KhanaparaController@store');

//contact us mail
Route::get('/contact', 'SendEmailController@index');
Route::post('/contact/send', 'SendEmailController@send');

Route::resource('leads','LeadsController');

Route::get('/nh7leads','WeekenderLeadsController@nh7leads');
Route::post('/nh7lead', 'WeekenderLeadsController@store');

Route::get('/hornbill-leads', 'HornbillController@hornbillleads');
Route::post('/hornbillfest', 'HornbillController@store');


/*Route::get('/contact', [
    'uses' => 'ContactMessageController@create'
]);

Route::post('/contact', [
    'uses' => 'ContactMessageController@store',
    'as' => 'contact.store'
]);*/

Auth::routes();

Route::get('/admin', 'HomeController@index');


