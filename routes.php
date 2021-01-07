<?php

Route::get('/welcome_movies', 'Watchlearn\Movies\Controllers\WelcomeController@index')->middleware('web');
