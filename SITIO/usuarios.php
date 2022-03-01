<!DOCTYPE html>
<html lang="en">
<?php include("head.php");?>
<body class="hold-transition sidebar-mini layout-fixed">

<form action="usuarios.php" name="frm" id="frm" method="post">

<?php 
include("conexion.php");
include("diccionario.php");
?>

<div class="wrapper">

<?php include("imgAnimada.php");
 include("nav.php");
  include("aside.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Control de Usuarios</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          
        <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Resultado de busqueda</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    
                    <?php if(isset($_REQUEST['table_search'])){$table_search=$_REQUEST['table_search'];?>
                    <input placeholder="Buscar" class="form-control float-right" type="text" name="table_search" id="table_search" value="<?php echo $table_search;?>">
                    <?php }else{?>
                    <input placeholder="Buscar" class="form-control float-right" type="text" name="table_search" id="table_search" value="">
                    <?php }?>

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                    <th>Clave Personal</th>
                    <th>Clave Usuario</th>  
                    <th>No. Empleado</th>
                      <th>Nombre</th>
                      <th>Adscripci&oacute;n</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    
<?php if(isset($_REQUEST['table_search'])){$table_search=$table_search;}else{$table_search='';}?>


                    <?php
                    if($table_search){
                    $sql="
                    SELECT
secamgob_db_si_rh.tblc_personal.CvePer,
secamgob_db_si_rh.tblc_personal.NoEmp,
secamgob_db_si_rh.tblc_personal.Nombre,
secamgob_db_catalogos.tblc_usuarios.CveUsuario,
secamgob_db_si_rh.tblc_adscricion.DesAds,
secamgob_db_si_rh.tblc_adscricion.CveAds,
secamgob_db_si_rh.tblc_personal.Estatus
FROM
secamgob_db_si_rh.tblc_personal
LEFT JOIN secamgob_db_catalogos.tblc_usuarios ON secamgob_db_si_rh.tblc_personal.NoEmp = secamgob_db_catalogos.tblc_usuarios.NoEmp
LEFT JOIN secamgob_db_si_rh.tblc_adscricion ON secamgob_db_si_rh.tblc_personal.CveAds = secamgob_db_si_rh.tblc_adscricion.CveAds
WHERE
secamgob_db_si_rh.tblc_personal.Nombre LIKE '%".$table_search."%'
ORDER BY
secamgob_db_si_rh.tblc_personal.Nombre ASC";
                    
                    if ($resultado = mysqli_query($link,$sql))
                    {
                        //$NoReg=mysqli_num_rows($resultado);
                        
                    
                        while($row=mysqli_fetch_array($resultado))
                        {
                            ?>
                            <tr onclick="javscript:<?php echo $misDatos;?>document.getElementById('mauNoEmp').value='<?php echo $row['NoEmp'];?>';document.getElementById('frm').action='cardex.php';document.getElementById('frm').submit();" style="cursor:pointer;">
                              <td><?php echo $row['CvePer'];?></td>
                              <td><?php echo $row['CveUsuario'];?></td>
                              <td><?php echo $row['NoEmp'];?></td>
                              <td><?php echo $row['Nombre'];?></td>
                              <td><?php echo $row['CveAds']." ".$row['DesAds'];?></td>
                              <td><?php echo $row['Estatus'];?></td>
                            </tr>
                            <?php
                        };
                    
                        mysqli_free_result($resultado);
                    }
                  }
                    ?>

                  
                    

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          



          
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("footer.php");?>
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include("js.php");?>

</form>
</body>
</html>
