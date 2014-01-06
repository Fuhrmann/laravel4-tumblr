<?php

Route::group(array('prefix' => Config::get('tumblr::route_prefix')), function() {
    Route::get('/', 'Unm\Laravel\Tumblr\TumblrController@index');
});