<?php
require("conexion.php");
switch($_REQUEST['accion'])
{
    case 'elim':
        $CveHerencia=$_REQUEST['CveHerencia'];
        echo $sql="DELETE FROM `tblp_herencias` WHERE (`CveHerencia`='$CveHerencia')";        
        mysqli_query($link,$sql);
    break;
    case 'guarda':
        $CveUsuario=$_REQUEST['CveUsuario'];
        $CveSistema=$_REQUEST['CveSistema'];
        $CveModulo=$_REQUEST['CveModulo'];
        $CvePrivilegio=$_REQUEST['CvePrivilegio'];
        $fecha=date("Y-m-d");
        $hora=date("H:i:s");
        echo $sql="INSERT INTO `tblp_herencias` (`CveUsuario`, `CveSistema`, `CveModulo`, `CvePrivilegio`, `FecCaptura`, `HoraCaptura`) 
        VALUES ('$CveUsuario', '$CveSistema', '$CveModulo', '$CvePrivilegio', '$fecha', '$hora')";        
        mysqli_query($link,$sql);
    break;
}
?>