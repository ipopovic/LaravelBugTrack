<?php

// PagesController

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

//TicketsController

Route::get('/contact', 'TicketsController@create');
Route::post('/contact', 'TicketsController@store');
Route::get('/tickets', 'TicketsController@index');
Route::get('/ticket/{slug?}', 'TicketsController@show');
Route::get('/ticket/{slug?}/edit','TicketsController@edit');
Route::post('/ticket/{slug?}/edit','TicketsController@update');
Route::post('/ticket/{slug?}/delete','TicketsController@destroy');

//comments
Route::post('/comment', 'CommentsController@newComment');

//mail

Route::get('sendemail', function () {
    $data = array(
        'name' => "Learning Laravel",
    );
    Mail::send('emails.welcome', $data, function ($message) {
        $message->from('issue@flance.rs', 'Laravel Ticketing System');
        $message->to('ipop@flance.rs')->subject('Learning Laravel test email');
    });
    return "Your email has been sent successfully";
});
