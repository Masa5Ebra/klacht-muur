<?php
if (isset($_GET["id"])){
    $id = $_GET["id"];

$servername = "localhost";
$username = "masa_klacht";
$password = "6345696";
$database = "masa_klacht";

$connection = new mysqli($servername, $username, $password, $database);

$sql = "DELETE FROM mk WHERE id=$id";
$connection->query($sql);

}
header("location: bmeurs.php");
exit;
?>