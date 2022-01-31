<?php
function validaLogin(){
    require 'models/usuario_loginmodel.php';

    session_start();
    //session_destroy();
    var_dump($_SESSION["perfil"]);
    if($_SESSION["perfil"]=="admin"){
    header("Location: index.php?controller=futbolista&action=mostrarFutbolistas");
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $usuario=strip_tags($_POST["usuario"]);
        $usuario=stripslashes($_POST["usuario"]);
        $usuario=htmlspecialchars($_POST["usuario"]);
    
        $pass=strip_tags($_POST["pass"]);
        $pass=stripslashes($_POST["pass"]);
        $pass=htmlspecialchars($_POST["pass"]);
    
        $datos = getUser($usuario);
        //var_dump($datos["id"]);

        if ($datos==false) {
            
        }else {
            $validar = password_verify($pass,$datos["contrasenya"]);
            if ($validar) {
                
                $tipoP =tipoUsuario($datos["usuario"]);
                var_dump($tipoP);
                if ($tipoP["perfil"]=="usuario") {
                    
                    $_SESSION["perfil"]="usuario";
                    header("Location: index.php?controller=usuario&action=validaLogin");
                   
                }else {
    
                    $_SESSION["perfil"]="admin";
                    header("Location: index.php?controller=futbolista&action=mostrarFutbolistas");
                }
                
            
            }else {
            echo "contraseña incorrecta";
            }
        }
    
        
    }
    include 'views/usuario_loginview.php';
}
?>