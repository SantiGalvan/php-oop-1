<?php
class Movie {
    public $title;
    public $year_of_publication;
    public $genre;
    public $original_language;
    public $duration;
    public $hour;
    public $minutes;
    public $director;
    public $actor;

    public function __construct($title, $year_of_publication, $genre, $original_language, $duration, Director $director, Actor $actor) {
        $this->title = $title;
        $this->year_of_publication = $year_of_publication;
        $this->genre = $genre;
        $this->original_language = $original_language;
        $this->duration = $duration;
        $this->director = $director;
        $this->actor = $actor;
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

class Actor {
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

$director_movie = new Director('John', 'Lasseter', 67, 'USA');
$actor_movie = new Actor('Woody', 'Pride', 29, 'USA');
$movie = new Movie('Toy Story', 1995, ['animazione', 'commedia'], 'EN', 81, $director_movie, $actor_movie);

var_dump($movie);

$director_second_movie = new Director('Sean', 'Penn', 64, 'USA');
$actor_second_movie = new Actor('Emile', 'Hirsch', 39, 'USA');
$second_movie = new Movie('Into the Wild', 2007, ['avventura', 'biografico', 'drammatico'], 'EN', 148, $director_second_movie, $actor_second_movie);

var_dump($second_movie);

?>