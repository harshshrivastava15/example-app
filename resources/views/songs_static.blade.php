<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist Viewer</title>
    <style>
        body {
            display: grid;
            grid-template-columns: 200px 1fr;
            grid-template-rows: auto 1fr auto;
            grid-template-areas:
                "header header"
                "sidebar main"
                "footer footer";
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            grid-area: header;
            background-color: #333;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        sidebar {
            grid-area: sidebar;
            padding: 20px;
            background-color: #eee;
        }

        main {
            grid-area: main;
            padding: 20px;
        }

        footer {
            grid-area: footer;
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }
    </style>
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