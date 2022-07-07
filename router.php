<?php
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case "contact":
            include("./pages/contact.php");
            break;
        case "login":
            include("./pages/auth/login.php");
            break;
        case 'home':
            include("./pages/homepage.php");
            break;

            // controllers

        case 'users':
            include("./controllers/userController.php");
            break;
        case 'logout':
            include("./controllers/logout.php");
            break;
        case 'contactForm':
            include('./controllers/contactForm.php');
            break;
        case 'loginForm':
            include('./controllers/loginForm.php');
            break;
        default:
            include('./pages/404.php');
            break;
    }
} else {
    include('./pages/homepage.php');
}
