<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'maket'], function () {
    // ... (ваш остальной код)

    // Убран префикс '/maket'
    Route::post('/onProfile', 'Solkalove\Maket\Components\Maket@onProfile');
});
