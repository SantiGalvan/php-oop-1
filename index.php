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
    public $actors = [];

    public function __construct($title, $year_of_publication, $genre, $original_language, $duration, Director $director, $actors) {
        $this->title = $title;
        $this->year_of_publication = $year_of_publication;
        $this->genre = $genre;
        $this->original_language = $original_language;
        $this->duration = $duration;
        $this->director = $director;
        $this->actors = $actors;
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
$actor_2_movie = new Actor('Buzz', 'Lightyear', 29, 'USA');
$actor_3_movie = new Actor('Andy', 'Davis', 36, 'USA');
$actor_4_movie = new Actor('Sid', 'Philips', 36, 'USA');
$actors_movie = [$actor_movie, $actor_2_movie, $actor_3_movie, $actor_4_movie];
$movie = new Movie('Toy Story', 1995, ['animazione', 'commedia'], 'EN', 81, $director_movie, $actors_movie);

var_dump($movie);

$director_second_movie = new Director('Sean', 'Penn', 64, 'USA');
$actor_second_movie = new Actor('Emile', 'Hirsch', 39, 'USA');
$actor_second_2_movie = new Actor('Catherine', 'Keener', 65, 'USA');
$actor_second_3_movie = new Actor('Brain', 'Dierker', 69, 'USA');
$actor_second_4_movie = new Actor('Vince', 'Vaunghn', 54, 'USA');
$actors_second_movie = [$actor_second_movie, $actor_second_2_movie, $actor_second_3_movie, $actor_second_4_movie];
$second_movie = new Movie('Into the Wild', 2007, ['avventura', 'biografico', 'drammatico'], 'EN', 148, $director_second_movie, $actors_second_movie);

var_dump($second_movie);

?>