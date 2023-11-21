<?php

// routes/web.php

use Illuminate\Support\Facades\Route;

// Route for /veggies/baigan
Route::get('/veggies/baigan', function () {
    return 'Baigan';
});

// Route for /veggies/{veggieName}
Route::get('/veggies/{veggieName}', function ($veggieName) {
    return $veggieName;
});

// Route for /veggies/{veggieName} only accepting specific veggie names
Route::get('/veggies/{veggieName}', function ($veggieName) {
    $validVeggies = ['baigan', 'bhindi', 'aaloo', 'gobhi'];
    if (in_array($veggieName, $validVeggies)) {
        return $veggieName;
    } else {
        abort(404);
    }
});

// Route for /veggies view
Route::get('/veggies', function () {
    $veggies = ['Baigan', 'Bhindi', 'Aaloo', 'Gobhi'];
    return view('veggies', ['veggies' => $veggies]);
});

