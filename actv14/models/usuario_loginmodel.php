<?php

function creaConexion (){
    $servidor = "localhost";
    $baseDatos="futbol";
    $usuario= "developer";
    $pass="developer";
    
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos",$usuario,$pass);
       return $conexion;
}

function getUser ($usuario){
    
    try {
        $conexion = creaConexion();

        $consulta =$conexion->prepare("SELECT * FROM datos  WHERE usuario=?"); 
        $consulta->bindParam(1,$usuario);
        $consulta->execute();
        
        $retorno = $consulta->fetch(PDO::FETCH_ASSOC);
        $conexion=null;
        return $retorno;

    } catch (PDOException $e) {
        echo ("Fallo");
        return false;
    }

}


function tipoUsuario ($usuario){

    try {
        $conexion = creaConexion();

        $consulta =$conexion->prepare("SELECT perfil FROM datos  WHERE usuario=?"); 
        $consulta->bindParam(1,$usuario);
        $consulta->execute();
        
        $retorno = $consulta->fetch(PDO::FETCH_ASSOC);
        $conexion=null;
        return $retorno;

    } catch (PDOException $e) {
        echo ("Fallo");
        return false;
    }

}
?>