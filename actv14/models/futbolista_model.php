<?php



function creaConexion (){
    $servidor = "localhost";
    $baseDatos="futbol";
    $usuario= "developer";
    $pass="developer";
    
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos",$usuario,$pass);
       return $conexion;
}


function obtenerElemento($id){       
    try {
        $conexion = creaConexion();
        $consulta=$conexion->prepare("SELECT * FROM futbolistas WHERE id=?");
        $consulta->bindParam(1,$id);
        $consulta->execute();
        $result = $consulta->fetch();
        $conexion = null;
        return $result;     
    } catch (PDOException $e) {
        echo "Conexión fallida: " . $e->getMessage();
    } 
}


function eliminaElemento ($id){
    try{
        $conexion = creaConexion();
        $consulta =$conexion->prepare("DELETE  FROM futbolistas WHERE id=?"); 
        $consulta->bindParam(1,$id);
        return $consulta->execute();
    } catch(PDOException $e){
        return false;
    } 
}

function editarElemento($id,$nombre, $club, $nacionalidad, $ngoles, $npartidos, $fnacimiento, $foto){
    try {
        $conexion = creaConexion();

        $consulta =$conexion->prepare("UPDATE futbolistas SET nombre=?, club=?, nacionalidad=?, ngoles=?, npartidos=?, fnacimiento=?, foto=? WHERE id=?"); 
        $consulta->bindParam(1,$nombre);
        $consulta->bindParam(2,$club);
        $consulta->bindParam(3,$nacionalidad);
        $consulta->bindParam(4,$ngoles);
        $consulta->bindParam(5,$npartidos);
        $consulta->bindParam(6,$fnacimiento);
        $consulta->bindParam(7,$foto);
        $consulta->bindParam(8,$id); 
        
        $consulta->execute();

        return $conexion->lastInsertId();

    } catch (PDOException $e) {
        echo ("Fallo");
        return false;
    }
}

function obtenerTodos(){
    try {
        $array = [];
        $conexion = creaConexion();
        $consulta = $conexion->prepare("SELECT * FROM futbolistas");
        $consulta->execute();
        while($futbolista = $consulta->fetch(PDO::FETCH_ASSOC)){
            $array[] = $futbolista;
        }
        return $array;
    } catch (PDOException $e) {
        echo "Conexion fallida: " , $e->getMessage();
        return false;
    }
}
//funciona
function insertaElemento($nombre, $club, $nacionalidad, $ngoles, $npartidos, $fnacimiento, $foto){
    
    try {
        $conexion = creaConexion();

        $consulta =$conexion->prepare("INSERT INTO futbolistas (nombre, club, nacionalidad, ngoles, npartidos, fnacimiento, foto) VALUES (?,?,?,?,?,?,?)"); 
        $consulta->bindParam(1,$nombre);
        $consulta->bindParam(2,$club);
        $consulta->bindParam(3,$nacionalidad);
        $consulta->bindParam(4,$ngoles);
        $consulta->bindParam(5,$npartidos);
        $consulta->bindParam(6,$fnacimiento);
        $consulta->bindParam(7,$foto); 
        $consulta->execute();
        return $conexion->lastInsertId();

    } catch (PDOException $e) {
        echo ("Fallo");
        return false;
    }           
        
}

?>