<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
require(__DIR__.'/../../practicals/Song.php');
use practicals\Song;
use \InvalidArgumentException;

class SongTest extends TestCase
{
    public function testSetTempo()
    {
        $song = new Song("Title", "Artist", "Genre", 120);
        $this->assertEquals(120, $song->getTempo());
    }

    public function testSetTempoAcceptsIntegerString()
    {
        $song = new Song("Title", "Artist", "Genre", "120");
        $this->assertEquals(120, $song->getTempo());
    }

    public function testSetTempoRejectsAlphabetString()
{
    $this->expectException(\InvalidArgumentException::class);
    $song = new Song("Title", "Artist", "Genre", "60 BPM");
}

public function testSetTempoRejectsFloat()
{
    $this->expectException(\InvalidArgumentException::class);
    $song = new Song("Title", "Artist", "Genre", 60.5);
}
}

