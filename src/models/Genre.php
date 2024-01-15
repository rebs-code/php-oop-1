<?php

/**
 * Genre
 */
class Genre
{
    public $genre1;
    public $genre2;
    public $genre3;

    public function __construct(string $_genre1, string $_genre2 = null, string $_genre3 = null)
    {
        $this->genre1 = $_genre1;
        $this->genre2 = $_genre2;
        $this->genre3 = $_genre3;
    }
}
