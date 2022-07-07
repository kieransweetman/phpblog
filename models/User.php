<?php




// inital connection to DB
function connection()
{
    $user = 'root';
    $pass = '';
    $dns = 'mysql:hose=localhost;dbname=blog';
    $db = new PDO($dns, $user, $pass);
    return $db;
}

// return list of users;
function getUsers()
{
    $db = connection();

    $response = $db->query("SELECT * FROM users");
    return $response->fetchAll();
}

//return user after logging in with password
function getUserByLogin($name, $password)
{
    $db = connection();
    $sqlSearch = "SELECT * 
                FROM users 
                WHERE name=? 
                AND password=?";

    //preparing query request
    $request = $db->prepare($sqlSearch);

    // execute our search
    $request->execute([$name, $password]);
    return $request->fetchall();
}
