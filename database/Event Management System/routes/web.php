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

Route::get('/', 'Controller@welcome')->name('welcomeScreen');
Route::post('/eventsPages', 'EventController@showEventPage')->name('eventPage');
Route::post('/participation-view-form', 'ParticipantController@viewParticipationForm')->name('viewPartForm');
Route::post('/addParticipant', 'ParticipantController@addParticipant')->name('addPart');
Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');//dashboard->
    Route::get('/view', 'EventController@viewAddEventForm')->name('view'); //faculty incharge event add kry ga
    Route::get('/allSocietiesPage', 'EventController@allSocietiesPage');   //participant sb sy pehly is page py ay ga
    Route::get('/view-Events-list', 'EventController@viewEventList')->name('eventList');
    Route::post('/societies', 'EventController@addEvent')->name('addEvent');
    
    Route::post('/eventDetails', 'EventController@eventActions')->name('eventActions');
    Route::post('/modifyEventDetails', 'EventController@modifyEvent')->name('modifyEvent');
    Route::get('/demand-list', 'EventController@demandList')->name('demandList');
    Route::get('/participants-list', 'ParticipantController@participantslist')->name('participantsList');
    Route::get('/societies-list', 'ParticipantController@societiesList')->name('societiesList');
    Route::get('/organiser-list', 'ParticipantController@organiserList')->name('organiserList');
    Route::post('/modifyDemandList', 'EventController@UpDemandList')->name('UpDemandList');

    Route::get('/assignRole',function(){
        $user = new \App\User();
        $user->name = 'Student Affairs';
        $user->email = 'studentAffair@eventos.com';
        $user->password = bcrypt('password');
        $user->save();
        $user->assignRole("student_affairs");
    });
});
