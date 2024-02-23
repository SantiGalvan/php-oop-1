<?php
class Movie {
    public $title;
    public $year_of_publication;
    public $genre;
    public $duration;
    public $original_language;

    public function __construct($title, $year_of_publication, $genre, $duration, $original_language) {
        $this->title = $title;
        $this->year_of_publication = $year_of_publication;
        $this->genre = $genre;
        $this->duration = $duration;
        $this->original_language = $original_language;
    }
}

$movie = new Movie('Toy Storu', 1995, ['animazione', 'commedia'], 81, 'EN');

var_dump($movie);
?>