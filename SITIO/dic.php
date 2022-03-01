<?php 
$MiTipo='hidden';
?>

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


