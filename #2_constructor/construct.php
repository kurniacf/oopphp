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
}

$streaming1 = new Movie("Venom", "Tom Hardy");
$streaming2 = new Movie("Loki", "Tom Hiddleston");


echo $streaming1->name . "<br>";
echo $streaming1->actor . "<br>";
echo $streaming1->addMovie() . "<br> <br>";

echo $streaming2->name . "<br>";
echo $streaming2->actor . "<br>";
echo $streaming2->addMovie() . "<br>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construct</title>
</head>

<body>

</body>

</html>