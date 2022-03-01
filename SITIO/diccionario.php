<?php 
$MiTipo='hidden';
?>
<!--DATOS QUE SE RECIBEN DESDE EL LOGUEO AL SISTEMA-->
<?php if(isset($_REQUEST['usu'])){$usu=$_REQUEST['usu'];?>
<input type="<?php echo $MiTipo;?>" readonly name="usu" id="usu" value="<?php echo $usu;?>">
<?php }else{?>
<input type="<?php echo $MiTipo;?>" readonly name="usu" id="usu" value="">
<?php }?>

<?php if(isset($_REQUEST['clave'])){$clave=$_REQUEST['clave'];?>
<input type="<?php echo $MiTipo;?>" readonly name="clave" id="clave" value="<?php echo $clave;?>">
<?php }else{?>
<input type="<?php echo $MiTipo;?>" readonly name="clave" id="clave" value="">
<?php }?>


<?php if(isset($_REQUEST['_CvePer'])){$_CvePer=$_REQUEST['_CvePer'];?>
<input type="<?php echo $MiTipo;?>" readonly name="_CvePer" id="_CvePer" value="<?php echo $_CvePer;?>">
<?php }else{?>
<input type="<?php echo $MiTipo;?>" readonly name="_CvePer" id="_CvePer" value="">
<?php }?>

<?php if(isset($_REQUEST['_CveUsuario'])){$_CveUsuario=$_REQUEST['_CveUsuario'];?>
<input type="<?php echo $MiTipo;?>" readonly name="_CveUsuario" id="_CveUsuario" value="<?php echo $_CveUsuario;?>">
<?php }else{?>
<input type="<?php echo $MiTipo;?>" readonly name="_CveUsuario" id="_CveUsuario" value="">
<?php }?>

<?php if(isset($_REQUEST['_NoEmp'])){$_NoEmp=$_REQUEST['_NoEmp'];?>
<input type="<?php echo $MiTipo;?>" readonly name="_NoEmp" id="_NoEmp" value="<?php echo $_NoEmp;?>">
<?php }else{?>
<input type="<?php echo $MiTipo;?>" readonly name="_NoEmp" id="_NoEmp" value="">
<?php }?>

<?php if(isset($_REQUEST['_Nombre'])){$_Nombre=$_REQUEST['_Nombre'];?>
<input type="<?php echo $MiTipo;?>" readonly name="_Nombre" id="_Nombre" value="<?php echo $_Nombre;?>">
<?php }else{?>
<input type="<?php echo $MiTipo;?>" readonly name="_Nombre" id="_Nombre" value="">
<?php }?>

<?php if(isset($_REQUEST['_NombrePer'])){$_NombrePer=$_REQUEST['_NombrePer'];?>
<input type="<?php echo $MiTipo;?>" readonly name="_NombrePer" id="_NombrePer" value="<?php echo $_NombrePer;?>">
<?php }else{?>
<input type="<?php echo $MiTipo;?>" readonly name="_NombrePer" id="_NombrePer" value="">
<?php }?>

<?php if(isset($_REQUEST['_APaterno'])){$_APaterno=$_REQUEST['_APaterno'];?>
<input type="<?php echo $MiTipo;?>" readonly name="_APaterno" id="_APaterno" value="<?php echo $_APaterno;?>">
<?php }else{?>
<input type="<?php echo $MiTipo;?>" readonly name="_APaterno" id="_APaterno" value="">
<?php }?>

<?php if(isset($_REQUEST['_AMaterno'])){$_AMaterno=$_REQUEST['_AMaterno'];?>
<input type="<?php echo $MiTipo;?>" readonly name="_AMaterno" id="_AMaterno" value="<?php echo $_AMaterno;?>">
<?php }else{?>
<input type="<?php echo $MiTipo;?>" readonly name="_AMaterno" id="_AMaterno" value="">
<?php }?>

<?php if(isset($_REQUEST['_Rango'])){$_Rango=$_REQUEST['_Rango'];?>
<input type="<?php echo $MiTipo;?>" readonly name="_Rango" id="_Rango" value="<?php echo $_Rango;?>">
<?php }else{?>
<input type="<?php echo $MiTipo;?>" readonly name="_Rango" id="_Rango" value="">
<?php }?>

<?php if(isset($_REQUEST['_CveAds'])){$_CveAds=$_REQUEST['_CveAds'];?>
<input type="<?php echo $MiTipo;?>" readonly name="_CveAds" id="_CveAds" value="<?php echo $_CveAds;?>">
<?php }else{?>
<input type="<?php echo $MiTipo;?>" readonly name="_CveAds" id="_CveAds" value="">
<?php }?>

<?php if(isset($_REQUEST['_DesAds'])){$_DesAds=$_REQUEST['_DesAds'];?>
<input type="<?php echo $MiTipo;?>" readonly name="_DesAds" id="_DesAds" value="<?php echo $_DesAds;?>">
<?php }else{?>
<input type="<?php echo $MiTipo;?>" readonly name="_DesAds" id="_DesAds" value="">
<?php }?>

<?php if(isset($_REQUEST['_UniSub'])){$_UniSub=$_REQUEST['_UniSub'];?>
<input type="<?php echo $MiTipo;?>" readonly name="_UniSub" id="_UniSub" value="<?php echo $_UniSub;?>">
<?php }else{?>
<input type="<?php echo $MiTipo;?>" readonly name="_UniSub" id="_UniSub" value="">
<?php }?>

<?php if(isset($_REQUEST['_AreaDir'])){$_AreaDir=$_REQUEST['_AreaDir'];?>
<input type="<?php echo $MiTipo;?>" readonly name="_AreaDir" id="_AreaDir" value="<?php echo $_AreaDir;?>">
<?php }else{?>
<input type="<?php echo $MiTipo;?>" readonly name="_AreaDir" id="_AreaDir" value="">
<?php }?>

<?php if(isset($_REQUEST['_Depto'])){$_Depto=$_REQUEST['_Depto'];?>
<input type="<?php echo $MiTipo;?>" readonly name="_Depto" id="_Depto" value="<?php echo $_Depto;?>">
<?php }else{?>
<input type="<?php echo $MiTipo;?>" readonly name="_Depto" id="_Depto" value="">
<?php }?>

<?php if(isset($_REQUEST['_AreaCorrespondencia'])){$_AreaCorrespondencia=$_REQUEST['_AreaCorrespondencia'];?>
<input type="<?php echo $MiTipo;?>" readonly name="_AreaCorrespondencia" id="_AreaCorrespondencia" value="<?php echo $_AreaCorrespondencia;?>">
<?php }else{?>
<input type="<?php echo $MiTipo;?>" readonly name="_AreaCorrespondencia" id="_AreaCorrespondencia" value="">
<?php }?>

<?php if(isset($_REQUEST['_CveUnion'])){$_CveUnion=$_REQUEST['_CveUnion'];?>
<input type="<?php echo $MiTipo;?>" readonly name="_CveUnion" id="_CveUnion" value="<?php echo $_CveUnion;?>">
<?php }else{?>
<input type="<?php echo $MiTipo;?>" readonly name="_CveUnion" id="_CveUnion" value="">
<?php }?>

<?php if(isset($_REQUEST['_CveAsoc'])){$_CveAsoc=$_REQUEST['_CveAsoc'];?>
<input type="<?php echo $MiTipo;?>" readonly name="_CveAsoc" id="_CveAsoc" value="<?php echo $_CveAsoc;?>">
<?php }else{?>
<input type="<?php echo $MiTipo;?>" readonly name="_CveAsoc" id="_CveAsoc" value="">
<?php }?>

<?php if(isset($_REQUEST['_CveAyuntamiento'])){$_CveAyuntamiento=$_REQUEST['_CveAyuntamiento'];?>
<input type="<?php echo $MiTipo;?>" readonly name="_CveAyuntamiento" id="_CveAyuntamiento" value="<?php echo $_CveAyuntamiento;?>">
<?php }else{?>
<input type="<?php echo $MiTipo;?>" readonly name="_CveAyuntamiento" id="_CveAyuntamiento" value="">
<?php }?>

<?php if(isset($_REQUEST['_CveBanco'])){$_CveBanco=$_REQUEST['_CveBanco'];?>
<input type="<?php echo $MiTipo;?>" readonly name="_CveBanco" id="_CveBanco" value="<?php echo $_CveBanco;?>">
<?php }else{?>
<input type="<?php echo $MiTipo;?>" readonly name="_CveBanco" id="_CveBanco" value="">
<?php }?>

<?php if(isset($_REQUEST['_DesBanco'])){$_DesBanco=$_REQUEST['_DesBanco'];?>
<input type="<?php echo $MiTipo;?>" readonly name="_DesBanco" id="_DesBanco" value="<?php echo $_DesBanco;?>">
<?php }else{?>
<input type="<?php echo $MiTipo;?>" readonly name="_DesBanco" id="_DesBanco" value="">
<?php }?>

<?php if(isset($_REQUEST['_NoCuePer'])){$_NoCuePer=$_REQUEST['_NoCuePer'];?>
<input type="<?php echo $MiTipo;?>" readonly name="_NoCuePer" id="_NoCuePer" value="<?php echo $_NoCuePer;?>">
<?php }else{?>
<input type="<?php echo $MiTipo;?>" readonly name="_NoCuePer" id="_NoCuePer" value="">
<?php }?>

<?php if(isset($_REQUEST['_CveIntPer'])){$_CveIntPer=$_REQUEST['_CveIntPer'];?>
<input type="<?php echo $MiTipo;?>" readonly name="_CveIntPer" id="_CveIntPer" value="<?php echo $_CveIntPer;?>">
<?php }else{?>
<input type="<?php echo $MiTipo;?>" readonly name="_CveIntPer" id="_CveIntPer" value="">
<?php }?>

<?php if(isset($_REQUEST['_NomCuenta'])){$_NomCuenta=$_REQUEST['_NomCuenta'];?>
<input type="<?php echo $MiTipo;?>" readonly name="_NomCuenta" id="_NomCuenta" value="<?php echo $_NomCuenta;?>">
<?php }else{?>
<input type="<?php echo $MiTipo;?>" readonly name="_NomCuenta" id="_NomCuenta" value="">
<?php }?>

<?php if(isset($_REQUEST['_Foto'])){$_Foto=$_REQUEST['_Foto'];?>
<input type="<?php echo $MiTipo;?>" readonly name="_Foto" id="_Foto" value="<?php echo $_Foto;?>">
<?php }else{?>
<input type="<?php echo $MiTipo;?>" readonly name="_Foto" id="_Foto" value="">
<?php }?>

<?php if(isset($_REQUEST['_Conexiones'])){$_Conexiones=$_REQUEST['_Conexiones'];?>
<input type="<?php echo $MiTipo;?>" readonly name="_Conexiones" id="_Conexiones" value="<?php echo $_Conexiones;?>">
<?php }else{?>
<input type="<?php echo $MiTipo;?>" readonly name="_Conexiones" id="_Conexiones" value="">
<?php }?>
<!-- TERMINA DATOS QUE SE RECIBEN DESDE EL LOGUEO AL SISTEMA-->
<?php
/*CADENA QUE SE ENVIA DE ACUERDO A LOS DATOS QUE SE RECIBEN DEL LOGUEO*/
$misDatos="
document.getElementById('_CvePer').value='$_CvePer';
document.getElementById('_CveUsuario').value='$_CveUsuario';
document.getElementById('_NoEmp').value='$_NoEmp';
document.getElementById('_Nombre').value='$_Nombre';
document.getElementById('_NombrePer').value='$_NombrePer';
document.getElementById('_APaterno').value='$_APaterno';
document.getElementById('_AMaterno').value='$_AMaterno';
document.getElementById('_Rango').value='$_Rango';
document.getElementById('_CveAds').value='$_CveAds';
document.getElementById('_DesAds').value='$_DesAds';
document.getElementById('_UniSub').value='$_UniSub';
document.getElementById('_AreaDir').value='$_AreaDir';
document.getElementById('_Depto').value='$_Depto';
document.getElementById('_AreaCorrespondencia').value='$_AreaCorrespondencia';
document.getElementById('_CveUnion').value='$_CveUnion';
document.getElementById('_CveAsoc').value='$_CveAsoc';
document.getElementById('_CveAyuntamiento').value='$_CveAyuntamiento';
document.getElementById('_CveBanco').value='$_CveBanco';
document.getElementById('_DesBanco').value='$_DesBanco';
document.getElementById('_NoCuePer').value='$_NoCuePer';
document.getElementById('_CveIntPer').value='$_CveIntPer';
document.getElementById('_NomCuenta').value='$_NomCuenta';
document.getElementById('_Foto').value='$_Foto';
document.getElementById('_Conexiones').value='$_Conexiones';
";
/*TERMINA CADENA QUE SE ENVIA DE ACUERDO A LOS DATOS QUE SE RECIBEN DEL LOGUEO*/
?>

<?php if(isset($_REQUEST['mauNoEmp'])){$mauNoEmp=$_REQUEST['mauNoEmp'];?>
<input type="<?php echo $MiTipo;?>" readonly name="mauNoEmp" id="mauNoEmp" value="<?php echo $mauNoEmp;?>">
<?php }else{?>
<input type="<?php echo $MiTipo;?>" readonly name="mauNoEmp" id="mauNoEmp" value="">
<?php }?>

<?php if(isset($_REQUEST['mauSistemaSelec'])){$mauSistemaSelec=$_REQUEST['mauSistemaSelec'];?>
<input type="<?php echo $MiTipo;?>" readonly name="mauSistemaSelec" id="mauSistemaSelec" value="<?php echo $mauSistemaSelec;?>">
<?php }else{?>
<input type="<?php echo $MiTipo;?>" readonly name="mauSistemaSelec" id="mauSistemaSelec" value="">
<?php }?>

<?php if(isset($_REQUEST['mauModuloMenuSelec'])){$mauModuloMenuSelec=$_REQUEST['mauModuloMenuSelec'];?>
<input type="<?php echo $MiTipo;?>" readonly name="mauModuloMenuSelec" id="mauModuloMenuSelec" value="<?php echo $mauModuloMenuSelec;?>">
<?php }else{?>
<input type="<?php echo $MiTipo;?>" readonly name="mauModuloMenuSelec" id="mauModuloMenuSelec" value="">
<?php }?>

<?php if(isset($_REQUEST['mauModuloSelec'])){$mauModuloSelec=$_REQUEST['mauModuloSelec'];?>
<input type="<?php echo $MiTipo;?>" readonly name="mauModuloSelec" id="mauModuloSelec" value="<?php echo $mauModuloSelec;?>">
<?php }else{?>
<input type="<?php echo $MiTipo;?>" readonly name="mauModuloSelec" id="mauModuloSelec" value="">
<?php }?>