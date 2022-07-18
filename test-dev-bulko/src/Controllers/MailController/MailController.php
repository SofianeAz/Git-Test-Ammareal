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

        $nom = strip_tags($data['nom']);
        $email = strip_tags($data['email']);
        $tel = strip_tags($data['tel']);
        $message = strip_tags($data['message']);

        // check du mail
        // $check = filter_var($email, FILTER_VALIDATE_EMAIL);
        // if(!$check){ return 'L\'adresse mail est invalide.'; }

        // // check que le numéro de tel commence par 0
        // $telCheck = explode('', $tel);
        // if($telCheck[0] <> '0'){ return json_encode('Le numéro doit commencé par 0.'); }
        // if(preg_match("/^[0-9]+$/", $tel) <> 1){ return json_encode('Le numéro doit être composé seulement de chiffres.'); }
        // if(str_len($tel) <> 10){ return json_encode('Le numéro doit être composé de 10 chiffres.'); }



        $sql = 'INSERT INTO `message` (nom, email, tel, `message`)
                    VALUES (?, ?, ?, ?)';
        $query = $db->pQuery($sql);
        $query->bindValue(1, $nom, PDO::PARAM_STR);
        $query->bindValue(2, $email, PDO::PARAM_STR);
        $query->bindValue(3, $tel, PDO::PARAM_STR);
        $query->bindValue(4, $message, PDO::PARAM_STR);
        $query->execute();

        $count = $query->rowCount();
        if($count > 0){
            return 'Le message a été envoyé avec succès !';
        } else {
            return 'Il y a eu une érreur, veuillez rééssayer.';
        }
    }
    
}



?>