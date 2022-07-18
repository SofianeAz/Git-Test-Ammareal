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
    if($msg == 'success'){
        //  -- Configuration du serveur nécessaire pour l'envoi du mail -- //
        // $headers = "From: ".$_POST['email'];
        // mail('info@bulko.net', $_POST['nom'], $_POST['message'], $headers);
        echo json_encode(htmlentities('Message envoyé avec succès !'));
        return;
    } 
    if($msg == 'error'){
       echo json_encode(htmlentites('Il y a eu une érreur, veuillez rééssayer. Si l\'érreur persiste, contactez nous par téléphone au 01 02 03 04 06.'));
       return;
    }
    echo json_encode(htmlentities($msg));
    

} 

?>