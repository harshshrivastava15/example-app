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
    public function __construct($title, $artist, $genre, $tempo)
    {
        $this->title = $title;
        $this->artist = $artist;
        $this->genre = $genre;
        $this->setTempo($tempo);
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
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set the genre of the song.
     *
     * @param string $genre The genre of the song.
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    /**
     * Get the tempo of the song.
     *
     * @return int The tempo of the song.
     */
    public function getTempo()
    {
        return $this->tempo;
    }

    /**
     * Set the tempo of the song.
     *
     * @param mixed $tempo The tempo of the song.
     */
    
    public function setTempo($tempo)
    {
        if (!is_numeric($tempo) || is_float($tempo)) {
            throw new \InvalidArgumentException("Tempo must be a numeric, non-float value.");
        }
    
        $this->tempo = (int)$tempo;
    }
    

}


