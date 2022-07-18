<?php

namespace App\Model\Mail;

class Mail {

    private $name;
    private $mail;
    private $tel;
    private $message;

    // setters
    public function setName($name){
        $this->name = $name;
    }

    public function setMail($mail){
        $this->mail = $mail;
    }

    public function setTel($tel){
        $this->tel = $tel;
    }

    public function setMessage($message){
        $this->message = $message;
    }


    // getters
    public function getName(){
        return $this->name;
    }

    public function getMail(){
        return $this->mail;
    }

    public function getTel(){
        return $this->tel;
    }
   
    public function getMessage(){
        return $this->message;
    }
}

?>