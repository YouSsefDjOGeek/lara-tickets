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


Route::get('/', 'Controller@index')->name('home');
Route::get('/eshop', 'Controller@eshop')->name('eshop');
Route::post('/sendMail', 'Controller@mail')->name('sendMail');


//-------  Prestations Routes ----/

//------- Consulting
Route::get('/services/consulting',function ()  {
    return view('public.consulting');
})->name('consulting');
//----- Integration
Route::get('/services/integration',function ()  {
    return view('public.integration');
})->name('integration');
//--------- Commisionning
Route::get('/services/commissioning',function ()  {
    return view('public.commissioning');
})->name('commissioning');
//-------- Training
Route::get('/services/training',function ()  {
    return view('public.training');
})->name('training');
//-------- Infogerence
Route::get('/services/infogerance',function ()  {
    return view('public.infogerance');
})->name('infogerance');
//------------
Route::get('/services/assistance',function ()  {
    return view('public.assistance');
})->name('assistance');
//-------------------------------------------------------/

//------------- Solutions Routes --------------------------/
///---- Réseaux ---/
Route::get('/solutions/reseaux',function ()  {
    return view('public.reseaux');
})->name('reseaux');
//------------Sécurité ------------/
Route::get('/solutions/securite',function ()  {
    return view('public.securite');
})->name('securite');
//-------- Ondulation --------
Route::get('/solutions/ondulation',function ()  {
    return view('public.ondulation');
})->name('ondulation');
//------- Voix IP / TElecom ------
Route::get('/solutions/voip',function ()  {
    return view('public.voip');
})->name('voip');

//------- videosurveillance------
Route::get('/solutions/videosurveillance',function ()  {
    return view('public.videosurveillance');
})->name('videosurveillance');

//------- Voix IP / TElecom ------
Route::get('/solutions/videosurveillance',function ()  {
    return view('public.videosurveillance');
})->name('videosurveillance');


//------- alarme ------
Route::get('/solutions/alarme',function ()  {
    return view('public.alarme');
})->name('alarme');


//------- detection ------
Route::get('/solutions/detection',function ()  {
    return view('public.detection');
})->name('detection');

//------- detection ------
Route::get('/solutions/controle',function ()  {
    return view('public.controle');
})->name('controle');
///-------------------------/
//--------------------- Expertise -----------------------------/

//------------Micosoft -----------/
Route::get('/expertise/microsoft',function ()  {
    return view('public.microsoft');
})->name('microsoft');
///-------------------------//
///
///  /------------Micosoft -----------/
Route::get('/expertise/microsoft',function ()  {
    return view('public.microsoft');
})->name('microsoft');
///-------------------------///
///
///  /  /------------backup -----------/
Route::get('/expertise/backup-restaurastion',function ()  {
    return view('public.microsoft');
})->name('backup');
///-------------------------////  /  /------------backup -----------/
Route::get('/expertise/cloud',function ()  {
    return view('public.cloud');
})->name('cloud');
///-------------------------//
///
///  //  /  /------------backup -----------/
Route::get('/expertise/virtulisation',function ()  {
    return view('public.virtulisation');
})->name('virtulisation');
///-------------------------/



Route::group(['prefix' => 'clientarea'], function () {
    Voyager::routes();
});

//----------

Route::group( ['middleware' => 'admin.user'], function()
{
    Route::get('/clientarea/tickets', 'TicketsController@index')->name('tickets');
    Route::get('/clientarea/tickets/create', 'TicketsController@create')->name('create_ticket');
    Route::post('/clientarea/tickets/create', 'TicketsController@store')->name('store_Ticket');
    Route::get('/clientarea/tickets/show/{id}', 'TicketsController@show')->name('showTicket');
    Route::get('/clientarea/tickets/{id}/affecter/', 'TicketsController@affeecterTicket')->name('affecterTicket');
    Route::post('/clientarea/tickets/{id}/affecter/', 'TicketsController@affeecterTicket')->name('affecterTicket');
    Route::get('/clientarea/tickets/cancel/{id}', 'TicketsController@destroy')->name('cancelTicket');
    Route::get('/clientarea/tickets/resolve/{id}', 'TicketsController@marquerresolu')->name('marquerresolu');
    Route::get('/clientarea/tickets/notresolve/{id}', 'TicketsController@notresolve')->name('notresolve');

//------- Commentaires
    Route::post('/clientarea/tickets/ReplyTicket/{id}', 'ReplyController@store')->name('ReplyTicket');

  
});





