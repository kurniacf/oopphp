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

$streaming1 = new Movie("Venom", "Tom Hardy");
$streaming2 = new Movie("Loki", "Tom Hiddleston");


echo $streaming1->getActor() . "<br>";
echo $streaming2->getActor() . "<br>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getter & Setter</title>
</head>

<body>

</body>

</html>