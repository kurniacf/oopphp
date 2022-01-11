<?php

use ReviewerMovie as GlobalReviewerMovie;

class Movie
{
    public $name;
    private $actor;
    public $subscription = "free";

    public function __construct($name, $actor)
    {
        $this->name = $name;
        $this->actor = $actor;
    }

    public function addMovie()
    {
        return "$this->name Added a New Movie List";
    }

    public function message()
    {
        return "Follow Instagram of $this->actor";
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
    public $subscription = "Pro";

    public function __construct($name, $actor, $rating)
    {
        parent::__construct($name, $actor);
        $this->rating = $rating;
    }

    public function message()
    {
        return "Get Free Movie";
    }
}

$streaming1 = new Movie("Venom", "Tom Hardy");
$streaming2 = new Movie("Loki", "Tom Hiddleston");
$streaming3 = new ReviewerMovie("Squid Game", "HoYeon Jung", 9.35);

echo $streaming1->subscription . "<br>";
echo $streaming3->subscription . "<br>";

echo $streaming1->message() . "<br>";
echo $streaming3->message() . "<br>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overriding Tutorial</title>
</head>

<body>

</body>

</html>