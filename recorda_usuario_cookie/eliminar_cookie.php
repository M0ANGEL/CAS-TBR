<?php

//para eliminar una cookie se le pone el timepo en negativo
setcookie("nombre_usuario" , "angel", time() -1);
echo "cookie eliminada";




?>