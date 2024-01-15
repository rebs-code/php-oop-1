<?php

$movies = [
    new Movie('The Godfather', 1972, new Genre('Crime', 'Drama'), 'Francis Ford Coppola'),
    new Movie('Pulp Fiction', 1994, new Genre('Crime', 'Drama', 'Fiction'), 'Quentin Tarantino')
];

var_dump($movies);
