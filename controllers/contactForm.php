

<?php
if ($_POST['floating_email'] && $_POST['message']) {
    $email = $_POST['floating_email'];
    $message = $_POST['message'];
    include('pages/contactFormConfirmation.php');
}
