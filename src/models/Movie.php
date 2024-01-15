<?php

/**
 * Movie
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
    public function __construct(string $_title, int $_year, Genre $_genre, string $_director)
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
