
<?php 
include_once ("menu.html");
?>

<?php
if(empty($_SERVER["QUERY_STRING"])){
	$var = "Página Inicial.php";
	include_once("$var");
}else{
    $pg = $_GET["pg"];
    include_once("$pg.php");
}
?>
	<?php
		include_once('rodape.php');
	?>