<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

   $id_persona = $_POST["id_persona"];
   $rol = $_POST["rol"];

   require_once('base.php');
   if($rol == "D"){
        $statement = mysqli_prepare($con, "SELECT  id ,nombre, grupo FROM clase WHERE id_docente is null");
    
    }elseif($rol == "E"){
        $statement = mysqli_prepare($con, "SELECT  id ,nombre, grupo FROM clase WHERE id NOT IN (SELECT id_clase FROM estudiante_clase WHERE id_persona=?)");
        mysqli_stmt_bind_param($statement, "i", $id_persona);
    }

    
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $id_clase, $nombre,$grupo);
    
    $response = array();
    
    while(mysqli_stmt_fetch($statement)){

        $response[] = array("id_clase"=>$id_clase,"nombre"=>$nombre,"grupo"=>$grupo);
    }
    
    echo json_encode(array('response'=>$response));
}
?>