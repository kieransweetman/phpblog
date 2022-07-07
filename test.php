<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include('menu.php');
    // // my first comment
    // /* my second comment 
    // using more than one line */


    // echo 'hello world <br>';

    // $name = "Kieran";
    // $lname = 'Sweetman';
    // $age = 25;
    // $exactAge = 25.8;
    // $total = "$name $lname";
    // var_dump($total, $age);

    // $person = array($name, $lname, $age);

    // print_r($person);

    // $person[] = "28/07/96";

    // echo "<br> <h1>First Name: $person[0] - Last Name: $person[1] - Age: $person[2] - DOB: $person[3]</h1>";


    // $player1 = [
    //     'name' => 'Kieran',
    //     'lname' => 'Sweetman',
    //     'score' => 500
    // ];
    // $player2 = [
    //     'name' => 'raph',
    //     'lname' => 'pujalt',
    //     'score' => 2
    // ];
    // $player3 = [
    //     'name' => 'andre',
    //     'lname' => 'Sweetman',
    //     'score' => 300
    // ];

    // $ind = [$player1, $player2, $player3];
    // echo "<br>";




    // // $message = "<h1>this is a message for $name $lname</h1> $age years old, but $exactAge to be exact.";

    // // echo $message;

    // for ($i = 0; $i < 10; $i++) {
    //     echo "<br>" . " " . $i;
    // }
    // echo "<br>";

    // foreach ($ind as $player) {
    //     echo text($player);
    // }


    // function text(array $player)
    // {
    //     return "<br>" . $player['name'] . " " . $player['lname'] . " :" . $player['score'];
    // }

    // function verificationPassword(string $string)
    // {
    //     $digi =  preg_match("/[0-9]/", $string);
    //     $lower = preg_match("/[a-z]/", $string);
    //     $upper = preg_match("/[A-Z]/", $string);
    //     $len = count(str_split($string));
    //     if ($len >= 8 && $digi == 1 && $upper == 1 && $lower == 1) {
    //         return TRUE;
    //     } else {
    //         return FALSE;
    //     }
    // }

    // function listHTML($name, $array)
    // {
    //     if ($name == null && $array == null) {
    //         return null;
    //     } else {
    //         $title = "<h3>" . $name . "</h3>";
    //         echo $title;
    //         foreach ($array as $item) {
    //             echo "<li>$item</li>";
    //         }
    //     }
    // }


    // listHTML('capital', ['berlin', 'paris', 'moscow']);

    // function remplacerLesLettres(string $string)
    // {
    //     return str_replace(['i', 'o', 'e'], ['1', '0', '3'], $string);
    // }

    // echo remplacerLesLettres('Les cours de programmation Web sont trops cools');

    // function quelleAnnee()
    // {
    //     $date = (int) date('Y');

    //     return $date;
    // }
    // echo quelleAnnee();

    function quelleDate()
    {
        $date = (string)date('m/d/Y');
        return $date;
    }

    echo '<br>';
    echo quelleDate();
    ?>

</body>

</html>