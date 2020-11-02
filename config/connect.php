<?php
//Connexion base de données blog_portable//


 function pdo(){
    return new PDO('mysql:host=mysql;dbname=blog_telephone;host=127.0.0.1', 'root', "", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
}



