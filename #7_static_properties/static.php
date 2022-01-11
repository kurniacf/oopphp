<?php

class ScoreFootball
{
    public static $result = ["win", "draw", "lose"];

    public static function winScore($res)
    {
        return $res * 3;
    }

    public static function conditionPoint($point)
    {
        if ($point == 0) {
            return self::$result[2];
        } else if ($point == 1) {
            return self::$result[1];
        } else if ($point == 3) {
            return self::$result[0];
        } else if ($point == 2 || $point > 3) {
            return "Points not available";
        }
    }
}
echo ScoreFootball::conditionPoint(3) . "<br>";
echo ScoreFootball::conditionPoint(5) . "<br>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Properties</title>
</head>

<body>

</body>

</html>