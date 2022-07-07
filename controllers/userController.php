<?php
// model for users
require_once('models/User.php');

// gets users from a connection function in Users.php and returns the list of users
$users = getUsers();


// view 
include('pages/users.php');
