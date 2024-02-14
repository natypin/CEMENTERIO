<?php 
include("configuracion.php");
$id = $_GET['id'];
$sql ="UPDATE tb_difunto SET estado = 0
WHERE id_difunto = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="difunto.php";';
	echo '</script>';
	
}
?>