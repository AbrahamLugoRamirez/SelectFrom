<?php 

$s = "localhost";
$u = "root";
$p = "";
$bd = "bdselectfrom";
$conexion = new mysqli($s, $u, $p, $bd);

$query = $conexion -> query ("SELECT * FROM paises");                    
              while ($valores = mysqli_fetch_array($query)) {                                      
                echo '<option value="" '.$valores['id'].'">'.$valores['paises'].'</option>';
}

?>