<?php

class Movie
{
    public $title;
    public $year;
    public $genre;
    public $director;


    public function __construct($title, $year, $genre, $director)
    {
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
        $this->director = $director;
    }
}
