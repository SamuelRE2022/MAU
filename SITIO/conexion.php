<?php


$link = mysqli_connect("127.0.0.1", "secamgob_p1rcr5z", "RMLA600)aF.w/-x", "secamgob_db_catalogos");
/* comprobar la conexión */
if(mysqli_connect_errno())
{
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}
?>