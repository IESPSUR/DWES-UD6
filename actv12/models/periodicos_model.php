<?php 
    function getConnection(){
        $user = "developer";
        $pwd = "developer";
        return new PDO("mysql:host=localhost;dbname=biblioteca",$user,$pwd);
    }

    function getPeriodicos(){
        $db = getConnection();
        $result = $db->query("SELECT Nombre, Fecha FROM periodicos");
        $periodicos = array();
        while($periodico = $result->fetch()){
            $periodicos[] = $periodico;
        }
        return $periodicos;
    }
