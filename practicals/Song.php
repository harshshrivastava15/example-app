<?php

namespace practicals;
class Song
{
    /** @var string The title of the song. */
    private $title;

    /** @var string The artist or band of the song. */
    private $artist;

    /** @var string The genre of the song. */
    private $genre;

    /** @var int The tempo of the song. */
    private $tempo;

    /**
     * Song constructor.
     *
     * @param string $title       The title of the song.
     * @param string $artist      The artist or band of the song.
     * @param string $genre       The genre of the song.
     * @param int    $tempo       The tempo of the song.
     */
    public function __construct($title, $artist, $album, $duration)
    {
        $this->title = $title;
        $this->artist = $artist;
        $this->album = $album;
        $this->duration=($duration);
    }

    /**
     * Get the title of the song.
     *
     * @return string The title of the song.
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the title of the song.
     *
     * @param string $title The title of the song.
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get the artist or band of the song.
     *
     * @return string The artist or band of the song.
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * Set the artist or band of the song.
     *
     * @param string $artist The artist or band of the song.
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;
    }

    /**
     * Get the genre of the song.
     *
     * @return string The genre of the song.
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * Set the genre of the song.
     *
     * @param string $genre The genre of the song.
     */
    public function setAlbum($album)
    {
        $this->album = $album;
    }

    /**
     * Get the tempo of the song.
     *
     * @return int The tempo of the song.
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set the tempo of the song.
     *
     * @param mixed $tempo The tempo of the song.
     */
    
     public function setDuration($album)
     {
         $this->duration = $duration;
     }
    

}


