<?php

/**
 * Movie class
 */
class Movie
{
    //create properties
    public $title;
    public $year;
    public $genre;
    public $director;


    /**
     * __construct
     *
     * @param  string $title
     * @param  int $year
     * @param  string $genre
     * @param  string $director
     * @return void
     */
    public function __construct(string $_title, int $_year, array $_genre, string $_director)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->director = $_director;
    }
    /**
     * getTitle
     *
     * @return title of the movie
     */
    public function getTitle()
    {
        return $this->title;
    }
};

//create a new instance of the Movie class
$movie01 = new Movie('The Godfather', 1972, ['Crime', 'Drama'], 'Francis Ford Coppola');
$movie02 = new Movie('Pulp Fiction', 1994, ['Crime', 'Action'], 'Quentin Tarantino');

var_dump($movie01);
var_dump($movie02);

echo $movie01->getTitle();
echo $movie02->getTitle();
