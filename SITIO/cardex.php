<!DOCTYPE html>
<html lang="en">
  <?php include("head.php");?>
  <body class="hold-transition sidebar-mini layout-fixed">
    <form action="cardex.php" name="frm" id="frm" method="post">
      <?php 
      include("conexion.php");
      include("diccionario.php");
      ?>
      <div class="wrapper">
        <?php
        include("imgAnimada.php");
        include("nav.php");
        include("aside.php");
        ?>
        
        
        
        
        
        
        
        
        
        
        
        <div class="content-wrapper">
          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Cardex</h1>
                </div>
              </div>
            </div>
          </div>
          
          <section class="content">
            <div class="container-fluid">
              
              <div class="row">
                <div class="col-12">
                  <?php
                  $sql="SELECT secamgob_db_si_rh.tblc_personal.CvePer, secamgob_db_si_rh.tblc_personal.NoEmp,
                  secamgob_db_si_rh.tblc_personal.Nombre, secamgob_db_catalogos.tblc_usuarios.CveUsuario,
                  secamgob_db_si_rh.tblc_adscricion.DesAds, secamgob_db_si_rh.tblc_adscricion.CveAds,
                  secamgob_db_si_rh.tblc_personal.Estatus, secamgob_db_catalogos.tblc_usuarios.Foto,
                  secamgob_db_catalogos.tblc_profesiones.Profesion 
                  FROM secamgob_db_si_rh.tblc_personal 
                  LEFT JOIN secamgob_db_catalogos.tblc_usuarios ON secamgob_db_si_rh.tblc_personal.NoEmp = secamgob_db_catalogos.tblc_usuarios.NoEmp
                  LEFT JOIN secamgob_db_si_rh.tblc_adscricion ON secamgob_db_si_rh.tblc_personal.CveAds = secamgob_db_si_rh.tblc_adscricion.CveAds
                  LEFT JOIN secamgob_db_catalogos.tblc_profesiones ON secamgob_db_si_rh.tblc_personal.CveProfesion = secamgob_db_catalogos.tblc_profesiones.CveProfesion
                  WHERE secamgob_db_si_rh.tblc_personal.NoEmp = '".$mauNoEmp."' 
                  ORDER BY secamgob_db_si_rh.tblc_personal.Nombre ASC";
                  if($resultado = mysqli_query($link,$sql))
                  {
                    $row=mysqli_fetch_array($resultado);
                    $_mauCveUsuario=$row['CveUsuario'];
                    mysqli_free_result($resultado);
                  }
                  ?>
                  
                  
                  <div class="card card-warning">
                    <div class="card-header">
                      <h3 class="card-title">Datos de la cuenta:</h3>
                    </div>
                    <div class="card-body">
                      
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                              <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="dist/img/<?php echo $row['Foto'];?>" alt="User profile picture">
                              </div>
                              <h3 class="profile-username text-center"><?php echo $row['NoEmp']." ".$row['Nombre'];?></h3>
                              <p class="text-muted text-center"><?php echo $row['Profesion'];?></p>
                              <p class="text-muted text-center"><?php echo "CvePer:".$row['CvePer']." / CveUsuario:".$row['CveUsuario'];?></p>
                              <p class="text-muted text-center"><?php echo $row['DesAds'];?></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          
                          <div class="form-group">
                            <label>Resetear clave:</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                          </div>

                          <div class="form-group">
                            <?php
                            $sql="SELECT tblp_areas_sistemas.CveAreaSistema, tblp_areas_sistemas.CveSistema,
                            tblc_sistemas.Sistema, tblc_sistemas.Descripcion FROM tblp_areas_sistemas
                            LEFT JOIN tblc_sistemas ON tblp_areas_sistemas.CveSistema = tblc_sistemas.CveSistema
                            WHERE tblp_areas_sistemas.CveArea = '175' AND tblc_sistemas.Estatus = 'SI'
                            GROUP BY tblp_areas_sistemas.CveSistema ORDER BY tblc_sistemas.Sistema ASC";
                            if ($resultado = mysqli_query($link,$sql))
                            {
                                //$NoReg=mysqli_num_rows($resultado);
                                //mysqli_free_result($resultado);
                            }
                            ?>
                            <label>Sistemas habilitados:</label>
                            <select class="form-control" name="SistemaHabilitado" id="SistemaHabilitado">
                              
                              <?php
                              while($rowSISTEMAS=mysqli_fetch_array($resultado))
                              {
                                  ?>
                                  <option value="<?php echo $mauSistemaSelec;?>" <?php if($mauSistemaSelec==$rowSISTEMAS['CveSistema']){?> selected="selected" <?php }?> onclick="javscript:<?php echo $misDatos;?>document.getElementById('mauSistemaSelec').value='<?php echo $rowSISTEMAS['CveSistema'];?>';document.getElementById('frm').action='cardex.php';document.getElementById('frm').submit();">
                                    <?php echo $rowSISTEMAS['CveSistema']." ".$rowSISTEMAS['Sistema'];?>
                                  </option>
                                  <?php
                              };
                              ?>
                            </select>
                          </div>

                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-12">
                          &nbsp;
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card card-warning">
                    <div class="card-header">
                      <h3 class="card-title">Selecci&oacute;n de M&oacute;dulos:</h3>
                    </div>
                    <div class="card-body">
                    <div id="ajax" class="row"></div>
                      <div class="row">
                        <div class="col-sm-6">
                          
                            <?php
                            $sql="SELECT tblc_modulos.CveModulo, tblc_modulos.Modulo, tblc_modulos.Descripcion,
                            tblc_modulos.Ruta, tblc_modulos.Archivo, tblc_modulos.orden FROM tblc_modulos
                            WHERE tblc_modulos.CveSistema = '$mauSistemaSelec' AND tblc_modulos.OpModulo = '0' AND tblc_modulos.Archivo = ''
                            ORDER BY tblc_modulos.orden ASC";
                            if ($resultado = mysqli_query($link,$sql))
                            { 
                                while($rowModulosMenus=mysqli_fetch_array($resultado))
                                {
                                  ?>
                                  <div class="form-group" title="<?php echo $rowModulosMenus['Descripcion'];?>">
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                      <input <?php if($mauModuloMenuSelec==$rowModulosMenus['CveModulo']){?> checked="checked" <?php }?> 
                                      <?php if(empty($mauModuloMenuSelec)){?>
                                      onChange="javascript:
                                      document.getElementById('mauModuloMenuSelec').value='<?php echo $rowModulosMenus['CveModulo'];?>';
                                      document.getElementById('frm').submit();"
                                      <?php }if($mauModuloMenuSelec>0){?>
                                      onChange="javascript:
                                      document.getElementById('mauModuloMenuSelec').value='';
                                      document.getElementById('frm').submit();"
                                      <?php }?>
                                      type="checkbox" value="<?php echo $rowModulosMenus['CveModulo'];?>" class="custom-control-input" id="Switch<?php echo $rowModulosMenus['CveModulo'];?>">
                                      <label class="custom-control-label" for="Switch<?php echo $rowModulosMenus['CveModulo'];?>">
                                        <?php echo $rowModulosMenus['CveModulo']." ".$rowModulosMenus['Modulo'];?>
                                      </label>
                                    </div>
                                  </div>
                                  <?php

                                  if($mauModuloMenuSelec==$rowModulosMenus['CveModulo'])
                                  {
                                    ?>
                                    <div class="dropdown-divider"></div>
                                    <?php
                                    $sql="SELECT tblc_modulos.CveModulo, tblc_modulos.Modulo, tblc_modulos.Descripcion,
                                    tblc_modulos.Ruta, tblc_modulos.Archivo, tblc_modulos.orden FROM tblc_modulos
                                    WHERE tblc_modulos.CveSistema = '$mauSistemaSelec' AND tblc_modulos.OpModulo = '$mauModuloMenuSelec' AND tblc_modulos.Archivo <> ''
                                    ORDER BY tblc_modulos.orden ASC";
                                    if ($resultadoModulos = mysqli_query($link,$sql))
                                    {
                                      while($rowModulos=mysqli_fetch_array($resultadoModulos))
                                      {
                                        ?>
                                        <div class="form-group" title="<?php echo $rowModulos['Descripcion'];?>">
                                          <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                            <input <?php if($mauModuloSelec==$rowModulos['CveModulo']){?> checked="checked" <?php }?> 
                                            <?php if(empty($mauModuloSelec)){?>
                                            onChange="javascript:
                                            document.getElementById('mauModuloSelec').value='<?php echo $rowModulos['CveModulo'];?>';
                                            document.getElementById('frm').submit();" 
                                            <?php }if($mauModuloSelec>0){?>
                                              onChange="javascript:
                                            document.getElementById('mauModuloSelec').value='';
                                            document.getElementById('frm').submit();"  
                                            <?php }?>
                                            type="checkbox" value="<?php echo $rowModulos['CveModulo'];?>" class="custom-control-input" id="Switch<?php echo $rowModulos['CveModulo'];?>">
                                            <label class="custom-control-label" for="Switch<?php echo $rowModulos['CveModulo'];?>">
                                              <?php echo $rowModulos['CveModulo']." ".$rowModulos['Modulo'];?>
                                            </label>
                                          </div>
                                        </div>
                                        <?php

                                          if($mauModuloSelec==$rowModulos['CveModulo'])
                                          {
                                            $sql="SELECT tblc_privilegios.CvePrivilegio, tblc_privilegios.Privilegio, tblc_privilegios.Descripcion
                                            FROM tblc_privilegios WHERE tblc_privilegios.Estatus = 'SI' ORDER BY tblc_privilegios.CvePrivilegio ASC";
                                            if($resultadoPrivilegios=mysqli_query($link,$sql))
                                            {
                                              while($rowPrivilegios=mysqli_fetch_array($resultadoPrivilegios))
                                              {
                                                $_mauCvePrivilegio=$rowPrivilegios['CvePrivilegio'];
                                                
                                                
                                                
                                                $sql="SELECT tblp_herencias.CveHerencia, tblp_herencias.CvePrivilegio
                                                FROM tblp_herencias WHERE tblp_herencias.CveModulo = '$mauModuloSelec' AND
                                                tblp_herencias.CveSistema = '$mauSistemaSelec' AND tblp_herencias.CveUsuario = '$_mauCveUsuario'
                                                AND tblp_herencias.CvePrivilegio = '$_mauCvePrivilegio'";
                                                if($resultadoPrivilegio2=mysqli_query($link,$sql))
                                                {
                                                  $NoReg=mysqli_num_rows($resultadoPrivilegio2);
                                                  
                                                  $rowPrivAct=mysqli_fetch_array($resultadoPrivilegio2);
                                                 
                                                  
                                                }
                                                if($NoReg>0)
                                                {
                                                  $HerenciaX=$rowPrivAct['CveHerencia'];
                                                  ?>
                                                  <div class="custom-control custom-checkbox" title="<?php echo $rowPrivilegios['Descripcion'];?>">
                                                    <input  onclick="javascript:accion('elim','<?php echo $HerenciaX;?>','','','','');" class="custom-control-input" type="checkbox" name="customCheckbox<?php echo $_mauCvePrivilegio;?>" id="customCheckbox<?php echo $_mauCvePrivilegio;?>" checked="">
                                                    <label for="customCheckbox<?php echo $_mauCvePrivilegio;?>" class="custom-control-label">
                                                      <?php echo $rowPrivilegios['CvePrivilegio']." ".$rowPrivilegios['Privilegio'];?>
                                                    </label>
                                                  </div>
                                                  <?php
                                                }
                                                else
                                                {
                                                  //echo $_mauCveUsuario;
                                                  ?>
                                                  <div class="custom-control custom-checkbox">
                                                    <input  onclick="javascript:accion('guarda','','<?php echo $_mauCveUsuario;?>','<?php echo $mauModuloSelec;?>','<?php echo $_mauCvePrivilegio;?>','<?php echo $mauSistemaSelec;?>');" class="custom-control-input" type="checkbox" id="customCheckbox<?php echo $_mauCvePrivilegio;?>" name="customCheckbox<?php echo $_mauCvePrivilegio;?>">
                                                    <label for="customCheckbox<?php echo $_mauCvePrivilegio;?>" class="custom-control-label">
                                                      <?php echo $rowPrivilegios['CvePrivilegio']." ".$rowPrivilegios['Privilegio'];?>
                                                    </label>
                                                  </div>
                                                  <?php
                                                }





                                              };
                                            }

                                          }

                                      };
                                      ?>
                                      <div class="dropdown-divider"></div>
                                      <div class="dropdown-divider"></div>
                                      <?php
                                    }
                                  }

                                };
                            }
                            ?>

                          

                        </div>

                        <div class="col-sm-6">
                          
                          

                        </div>


                      </div>

                      <div class="row">
                        <div class="col-sm-12">
                          &nbsp;
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
            
            </div>
          </section>

          


        </div>











        <?php
        
        include("footer.php");
        ?>
        <aside class="control-sidebar control-sidebar-dark"></aside>
      </div>
      <?php
      include("js.php");
      ?>
      
    </form>
  </body>
</html>
