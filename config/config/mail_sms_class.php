<?php
 class mail {

    public $id;
    public $user_name;
    public $user_statut;
    public $user_email;
    public $user_phone;
    public $mail_txt;


    public  function escape_string($string){

        $escape_string = mysqli_real_escape_string($this->connection, $string);
        return $escape_string;
    }

    public  function send_mail($dest, $corp){
        $sujet = "UNIVERSITE UY1";
        $headers = "From: brtankoua@gmail.com";
        if (mail($dest, $sujet, $corp, $headers)) {
          echo "Email envoyé avec succès à $dest ...";
        }else{
            echo"error";
        }
    }

    public  function create(){
        global $database;
        $conn=$database->connection();
        $sql = "INSERT INTO mail (receiv_name, user_email, user_phone, user_statut, mail_time, mail_txt)";
        $sql .= "VALUES ('{$database->escape_string($this->user_name)}',
        '{$database->escape_string($this->user_email)}',
        '{$database->escape_string($this->user_phone)}',
        '{$database->escape_string($this->user_statut)}',
         now(),
        '{$database->escape_string($this->mail_txt) }')";
        $save_mail = $database->query($sql);
        if(!$save_mail){
            die("query failed".mysqli_error($conn));
        }
    }

 }
?>