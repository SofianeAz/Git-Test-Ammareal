<?php
require '../vendor/autoload.php';

use App\Controllers\MailController\MailController;

$MailController = new MailController();
// var_dump($_POST);

// if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['message']) && isset($_POST['tel'])){
if(isset($_POST)){
    $msg = $MailController->postMail($_POST);
    echo json_encode(htmlentities($msg));
} 

?>