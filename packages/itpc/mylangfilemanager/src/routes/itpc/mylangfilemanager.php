<?php

// Admin Interface Routes

    Route::get('my-language/texts/{lang?}/{file?}', 'LanguageCrudController@showTexts');
    Route::post('my-language/texts/{lang}/{file}', 'LanguageCrudController@updateTexts');
    CRUD::resource('my-language', 'LanguageCrudController');

