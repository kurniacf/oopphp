<?php

class Movie1
{
    public $name = "Spiderman No Way Home";
    public $actor = "Tom Holland";

    public function addMovie()
    {
        return "$this->name Added a New Movie List";
    }
}

$streaming = new Movie1();
echo "The Class is " . get_class($streaming) . "<br>";

echo $streaming->name . "<br>";
echo $streaming->actor . "<br>";
echo $streaming->addMovie() . "<br> <br>";

$streaming1 = new Movie1();
$streaming1->name = "The King's Man";
$streaming1->actor = "Rhys Ifans";

echo $streaming1->name . "<br>";
echo $streaming1->actor . "<br>";
echo $streaming1->addMovie() . "<br>";

// print_r(get_class_vars('Movie'));
// print_r(get_class_methods('Movie'));

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