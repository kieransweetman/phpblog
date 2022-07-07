<?php
require_once('models/User.php');

// function login(string $name, string $password)
// {
//     if ($name == "kieran" && $password == 'password') {
//         $_SESSION['user'] = $name;
//         setcookie('user', $name);
//         return $name;
//     } else {
//         return false;
//     }
// }

function loginByUser($name,  $password)
{
    $user = getUserByLogin($name, $password);

    if (isset($user[0])) {
        $_SESSION['user'] = $user[0];
        setcookie('user', $user[0]['name']);
        return true;
    } else {
        return false;
    }
}




if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    include('pages/loginConfirmation.php');
} else {
    $user = loginByuser($_POST['name'], $_POST['password']);
    include('pages/loginConfirmation.php');
}
