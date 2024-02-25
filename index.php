<?php
class Movie {
    public $title;
    public $year_of_publication;
    public $genre;
    public $original_language;
    public $duration;
    public $hour;
    public $minutes;

    public function __construct($title, $year_of_publication, $genre, $original_language, $duration) {
        $this->title = $title;
        $this->year_of_publication = $year_of_publication;
        $this->genre = $genre;
        $this->original_language = $original_language;
        $this->duration = $duration;
        $this->setDuration();
    }

    public function setDuration() {
        $this->hour = floor($this->duration / 60);
        $this->minutes =  $this->duration % 60;
    }

    public function getDuration() {
        echo "{$this->hour}:{$this->minutes}";
    }
}


class Director {
    public $name;
    public $last_name;
    public $age;
    public $nationality;

    public function __construct($name, $last_name, $age, $nationality) {
       $this->name = $name; 
       $this->last_name = $last_name;
       $this->age = $age; 
       $this->nationality = $nationality; 
    }
}

$movie = new Movie('Toy Story', 1995, ['animazione', 'commedia'], 'EN', 81);
$director_movie = new Director('John', 'Lasseter', 67, 'USA');

var_dump($movie);
var_dump($director_movie);

$second_movie = new Movie('Into the Wild', 2007, ['avventura', 'biografico', 'drammatico'], 'EN', 148);
$director_second_movie = new Director('Sean', 'Penn', 64, 'USA');

var_dump($second_movie);
var_dump($director_second_movie);

?>