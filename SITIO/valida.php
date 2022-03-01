<form name="frm" id="frm" action="valida.php" method="post">
    
<?php
   
include("conexion.php");
include("diccionario.php");

$sql="SELECT 
secamgob_db_si_rh.tblc_personal.CvePer,
secamgob_db_catalogos.tblc_usuarios.CveUsuario,
secamgob_db_si_rh.tblc_personal.NoEmp,
secamgob_db_si_rh.tblc_personal.Nombre,
secamgob_db_si_rh.tblc_personal.NombrePer,
secamgob_db_si_rh.tblc_personal.APaterno,
secamgob_db_si_rh.tblc_personal.AMaterno,
secamgob_db_si_rh.tblc_personal.Rango,
secamgob_db_si_rh.tblc_personal.CveAds,
secamgob_db_si_rh.tblc_adscricion.DesAds,
secamgob_db_si_rh.tblc_adscricion.UniSub,
secamgob_db_si_rh.tblc_adscricion.AreaDir,
secamgob_db_si_rh.tblc_adscricion.Depto,
secamgob_db_si_rh.tblc_personal.AreaCorrespondencia,
secamgob_db_si_rh.tblc_personal.CveUnion,
secamgob_db_si_rh.tblc_personal.CveAsoc,
secamgob_db_si_rh.tblc_personal.CveAyuntamiento,
secamgob_db_si_rh.tblc_personal.CveBanco,
secamgob_db_catalogos.tblc_banco.DesBanco,
secamgob_db_si_rh.tblc_personal.NoCuePer,
secamgob_db_si_rh.tblc_personal.CveIntPer,
secamgob_db_si_rh.tblc_personal.NomCuenta,
secamgob_db_catalogos.tblc_usuarios.Foto,
secamgob_db_catalogos.tblc_usuarios.Conexiones
FROM
secamgob_db_catalogos.tblc_usuarios
LEFT JOIN secamgob_db_si_rh.tblc_personal ON secamgob_db_si_rh.tblc_personal.NoEmp = secamgob_db_catalogos.tblc_usuarios.NoEmp
LEFT JOIN secamgob_db_si_rh.tblc_categoria ON secamgob_db_si_rh.tblc_personal.CveCat = secamgob_db_si_rh.tblc_categoria.CveCat
LEFT JOIN secamgob_db_si_rh.tblc_adscricion ON secamgob_db_si_rh.tblc_personal.CveAds = secamgob_db_si_rh.tblc_adscricion.CveAds
LEFT JOIN secamgob_db_si_rh.tblc_horarios ON secamgob_db_si_rh.tblc_personal.TipoHo = secamgob_db_si_rh.tblc_horarios.CveHra
LEFT JOIN secamgob_db_catalogos.tblc_banco ON secamgob_db_si_rh.tblc_personal.CveBanco = secamgob_db_catalogos.tblc_banco.CveBanco
LEFT JOIN secamgob_db_catalogos.tblc_profesiones ON secamgob_db_si_rh.tblc_personal.CveProfesion = secamgob_db_catalogos.tblc_profesiones.CveProfesion
WHERE
secamgob_db_si_rh.tblc_personal.NoEmp = $usu AND
secamgob_db_catalogos.tblc_usuarios.Clave = $clave
";

if ($resultado = mysqli_query($link,$sql))
{
    //$NoReg=mysqli_num_rows($resultado);
    

    while($row=mysqli_fetch_array($resultado))
    {
        ?>

        <script languaje="javascript">

            function go()
            {
                document.getElementById('_CvePer').value='<?php echo $row[0];?>';
                document.getElementById('_CveUsuario').value='<?php echo $row[1];?>';
                document.getElementById('_NoEmp').value='<?php echo $row[2];?>';
                document.getElementById('_Nombre').value='<?php echo $row[3];?>';
                document.getElementById('_NombrePer').value='<?php echo $row[4];?>';
                document.getElementById('_APaterno').value='<?php echo $row[5];?>';
                document.getElementById('_AMaterno').value='<?php echo $row[6];?>';
                document.getElementById('_Rango').value='<?php echo $row[7];?>';
                document.getElementById('_CveAds').value='<?php echo $row[8];?>';
                document.getElementById('_DesAds').value='<?php echo $row[9];?>';
                document.getElementById('_UniSub').value='<?php echo $row[10];?>';
                document.getElementById('_AreaDir').value='<?php echo $row[11];?>';
                document.getElementById('_Depto').value='<?php echo $row[12];?>';
                document.getElementById('_AreaCorrespondencia').value='<?php echo $row[13];?>';
                document.getElementById('_CveUnion').value='<?php echo $row[14];?>';
                document.getElementById('_CveAsoc').value='<?php echo $row[15];?>';
                document.getElementById('_CveAyuntamiento').value='<?php echo $row[16];?>';
                document.getElementById('_CveBanco').value='<?php echo $row[17];?>';
                document.getElementById('_DesBanco').value='<?php echo $row[18];?>';
                document.getElementById('_NoCuePer').value='<?php echo $row[19];?>';
                document.getElementById('_CveIntPer').value='<?php echo $row[20];?>';
                document.getElementById('_NomCuenta').value='<?php echo $row[21];?>';
                document.getElementById('_Foto').value='<?php echo $row[22];?>';
                document.getElementById('_Conexiones').value='<?php echo $row[23];?>';
                document.getElementById('frm').action='inicio.php';
                document.getElementById('frm').submit();
            }
            go();

        </script>

        <div onclick="javascript:"><?php echo $row['Nombre'];?></div>
        <br>
        <?php
    };

    mysqli_free_result($resultado);
}

/**/
?>

</form>