<section>
            <div>
                <div>Serial No</div>
                <div>Song Title</div>
                <div>Artist Name</div>
                <div>Album Name</div>
                <div>Duration</div>
            </div>
            @foreach($songs as $index => $song)
            
                <div>
                    <div>{{$index + 1}}</div>
                    <div>{{$song->title}}</div>
                    <div>{{$song->artist}}</div>
                    <div>album</div>
                    <div>duration</div>
                    
                
                </div>
              
            
           @endforeach
           
           

</section>