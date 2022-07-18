<?php
require '../vendor/autoload.php';

use App\Controllers\MailController\MailController;

$MailController = new MailController();

if(isset($_POST['honeypot'])){
    echo "anti-bot honey-pot";
    return;
}

if(isset($_POST)){
    $msg = $MailController->postMail($_POST);
    echo json_encode(htmlentities($msg));
} 

?>