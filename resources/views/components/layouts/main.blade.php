<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist Viewer</title>
    <link rel="stylesheet" href="{{ asset('css/layouts/main.css') }}">
    
</head>
<body>
    <header>
        <div>
            <h1>Playlist Name</h1>
            <p>Basic Info</p>
        </div>
        <div>
            <a href="#">Edit Playlist</a>
            <a href="#">New Playlist</a>
        </div>
    </header>

    <sidebar>
        <h2>Saved Playlists</h2>
        <ul>
            <li>Playlist 1</li>
            <li>Playlist 2</li>
            <!-- Add more playlists as needed -->
        </ul>
    </sidebar>

    <main>
        <h2>Songs</h2>
        <table>
            <thead>
                <tr>
                    <th>Serial No</th>
                    <th>Song Title</th>
                    <th>Artist Name</th>
                    <th>Album Name</th>
                    <th>Duration</th>
                </tr>
            </thead>
            <tbody>
                <!-- Add song rows here -->
                <tr>
                    <td>1</td>
                    <td>Song 1</td>
                    <td>Artist 1</td>
                    <td>Album 1</td>
                    <td>3:30</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Song 2</td>
                    <td>Artist 2</td>
                    <td>Album 2</td>
                    <td>4:15</td>
                </tr>
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy; 2023 Your Company | <a href="#">About</a> | <a href="#">Terms</a></p>
    </footer>
</body>
</html>