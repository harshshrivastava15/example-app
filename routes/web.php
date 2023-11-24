<?php

// routes/web.php

// use Illuminate\Support\Facades\Route;
// use practicals\Song;

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
Route::get('/songs', function () {
    return "Songs";
});

Route::get('/songs', function () {
    return view('songs');
});

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Models\Song;
// ... other routes ...

Route::get('/songs_static', function () {
    $song1 = new Song("Stan", "Eminem", "Rap", 120);
  
    $song2 = new Song("Nothing Else Matters", "Metallica", "Rock", 80);
  
    $song3 = new Song("With You", "A P Dhillon", "Punjabi", 100);
  
    return view('songs', [ 'songs' => [ $song1, $song2, $song3 ] ]); 
});
Route::get('/songs', function () {
    return view('songs', [ 'songs' => Song::all() ] );
});


