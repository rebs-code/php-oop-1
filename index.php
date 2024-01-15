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
};

//create a new instance of the Movie class
$movie01 = new Movie('The Godfather', 1972, 'Crime', 'Francis Ford Coppola');
$movie02 = new Movie('Pulp Fiction', 1994, 'Crime', 'Quentin Tarantino');
