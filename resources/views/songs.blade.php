<!DOCTYPE html>

<head>

    <title>Songs Page</title>
</head>
<body>
    <h1>Hello Everyone</h1>
    <h2>Songs Class</h2>
    <table border="" >
     @foreach($songs as $song)
    <tr>
        <th>Title: </th>
        <th>Artist: </th>
        
    </tr>
    <tr>
        <td>{{ $song -> title }}</td>
        <td>{{ $song -> artist }}</td>
    </tr>
    @endforeach
    </table>


</body>
</html>