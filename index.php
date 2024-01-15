<?php

class Movie
{
    //create properties
    public $title;
    public $year;
    public $genre;
    public $director;

    //create a constructor
    public function __construct($title, $year, $genre, $director)
    {
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
        $this->director = $director;
    }
    //create a getter for the title
    public function getTitle()
    {
        return $this->title;
    }
}
