<?php

namespace App\Controllers\MailController;

use \PDO;
use App\Model\DBConnector\DBConnector;
use App\Model\Mail\Mail;


class MailController {

    public function getMails(){
        $db = DBConnector::getInstance();
        $sql = 'SELECT * FROM `message`';
        $query = $db->pQuery($sql);
        $query->execute();
        $result = $query->fetchAll();

        return json_encode($result);        
    }

    public function getOneMail($id){
        $db = DBConnector::getInstance();
        $sql = 'SELECT * FROM `message`
            WHERE id = ?';
        $query = $db->pQuery($sql);
        $query->bindValue(1, strip_tags($id), PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetch();
        return json_encode($result);     

    }

    public function postMail($data){
        $db = DBConnector::getInstance();
        $mail = new Mail();

        // assignation des variables

        // nom
        $data['nom'] ? $nom = strip_tags($data['nom']) : $nom = 'Pas de nom';
        // mail
        $emailAddress = strip_tags($data['email']);
        // tel
        $tel = strip_tags($data['tel']);
        // message
        $data['message'] ? $message = strip_tags($data['message']) : $message = 'Pas de message';

        $mail->setName($nom);
        $mail->setMail($emailAddress);
        $mail->setTel($tel);
        $mail->setMessage($message);

        // check du mail
        $check = filter_var($emailAddress, FILTER_VALIDATE_EMAIL);
        if(!$check){ return 'L\'adresse mail est invalide.'; }

        // check que le numéro de tel commence par 0
        $telCheck = str_split($tel);
        if($telCheck[0] <> '0'){ return 'Le numéro doit commencé par 0.'; }
        if(preg_match("/^[0-9]+$/", $tel) <> 1){ return 'Le numéro doit être composé seulement de chiffres.'; }
        if(strlen($tel) <> 10){ return 'Le numéro doit être composé de 10 chiffres.'; }



        $sql = 'INSERT INTO `message` (nom, email, tel, `message`)
                    VALUES (?, ?, ?, ?)';
        $query = $db->pQuery($sql);
        $query->bindValue(1, $mail->getName(), PDO::PARAM_STR);
        $query->bindValue(2, $mail->getMail(), PDO::PARAM_STR);
        $query->bindValue(3, $mail->getTel(), PDO::PARAM_STR);
        $query->bindValue(4, $mail->getMessage(), PDO::PARAM_STR);
        $query->execute();

        $count = $query->rowCount();
        if($count > 0){
            return 'success';
        } else {
            return 'error';
        }
    }
    
}



?>