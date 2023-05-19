<?php
    function connexionDB(){
        try{
            $user="root";
            $pass="";
            // En utilisant PDO, on évite les injections SQL
            $pdo = new PDO("mysql:host=localhost;dbname=formulaire", $user, $pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            // $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            return $pdo;
        }catch(PDOException $e){
            print "Erreur ! : ". $e->getMessage()."<br/>";
            die();
        }
    }
?>