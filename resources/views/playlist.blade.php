<x-layouts.main pageName="playlists/{{$playlistId}}">

@section('content')
<x-song-list :songs="$songs">
</x-song-list>
@endsection

</x-layouts.main>