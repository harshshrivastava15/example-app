<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? "Cool Web App" }}</title>
    <link href="{{ asset('css/layouts/main.css') }}" rel="stylesheet" />
    <style>

    </style>

</head>

<body>
   
    <header class="nav">
        <h1>Playlist Name</h1>
        <!-- <p>Playlist Description or Information</p> -->
        <div class="playlist">
           <button class="b1">Edit Playlist</button>
           <button class="b2">New Playlist</button>
        </div>
    </header>

<div class=wd>
    <aside>
        <h2>Saved Playlists</h2>
        <ul>
            <li>Playlist 1</li>
            <li>Playlist 2</li>
            <li>Playlist 3</li>
        </ul>
    </aside>
    <div class=main>
    
        @yield('content')
    
    </div> 
</div>

    <footer>
        <p>&copy; 2023 Playlist App | <a href="#">About</a> | <a href="#">Contact</a></p>
    </footer>
</body>

</html>