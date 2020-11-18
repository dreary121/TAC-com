<?php
    $correo=$_POST['usuario'];
    $password=$_POST['password'];
    include_once 'conexion.php';
    $mysqlconexion= new mysqli($servidorBD,$usuarioBD,$claveBD,$nombreBD);
    $consulta="SELECT * from usuarios WHERE correo_electronico='".$correo."'";
    $resultado=$mysqlconexion->query($consulta);
    if($registro=$resultado->fetch_array(MYSQLI_ASSOC))
    {
        if($registro['password']==$password)
        {
            session_start();
            $_SESSION['Idusuario']=$registro['Id'];
            $_SESSION['nombreusuario']=$registro['correo_elctronico'];
            $_SESSION['tipousuario']=$registro['tipo'];
            header("Location: index.php");

        }
        else
        {
            header("Location: login.php");
            exit();
        }
    }
    else
    {
        header("Location: login.php");
        exit();
    }
?>