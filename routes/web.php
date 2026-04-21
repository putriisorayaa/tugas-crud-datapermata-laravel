<?php

use App\Http\Controllers\BatuPermataController;

Route::get('/', function () {
    return redirect('/batu');
});

Route::resource('batu', BatuPermataController::class);