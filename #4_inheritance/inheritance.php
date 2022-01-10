<?php

class Movie
{
    public $name;
    public $actor;

    public function __construct($name, $actor)
    {
        $this->name = $name;
        $this->actor = $actor;
    }

    public function addMovie()
    {
        return "$this->name Added a New Movie List";
    }

    // Getter
    public function getActor()
    {
        return $this->actor;
    }

    // Setter 
    public function setActor($name)
    {
        // find position string/char
        if (strpos($name, 'Tom') > -1) {
            $this->actor = $name;
        }
    }
}

class ReviewerMovie extends Movie
{
    public $rating;

    public function __construct($name, $actor, $rating)
    {
        parent::__construct($name, $actor);
        $this->actor = $actor;
    }
}

$streaming1 = new Movie("Venom", "Tom Hardy");
$streaming2 = new Movie("Loki", "Tom Hiddleston");
$streaming3 = new Movie("Squid Game", "HoYeon Jung", 9.30);


echo $streaming3->name . "<br>";
echo $streaming3->actor . "<br>";
echo $streaming3->getActor() . "<br>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Tutorial</title>
</head>

<body>

</body>

</html>