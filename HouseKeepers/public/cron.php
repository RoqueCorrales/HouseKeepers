<?php
     $con = mysqli_connect("localhost","root","","empleadadomestica") or die ("Error de conexion");
     echo "Conexion realizada con exito"."\n";

     

     $date = date("Y-m-d",time());
     $date = new DateTime("$date");

     $consulta = "SELECT * FROM users WHERE  activa = 1";
     $ejecutar = mysqli_query($con,$consulta);
     while($fila = mysqli_fetch_array($ejecutar)){
        $id = $fila['id'];
        $ingreso  = $fila['ingreso'];
        
    $ingreso = new DateTime("$ingreso");
    

$diff = $date->diff($ingreso);

        if($diff->days >2){

$update = "UPDATE users SET activa = '0' where id = $id";
 mysqli_query($con,$update);
            echo ("Cuenta desactivada de ".$fila['nombre']."\n");
        }
    }
     
    mysqli_close($con);
    echo "Conexion Terminada"; 


?>

