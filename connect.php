<?php
	
	$host = "localhost";
	$username = "masa_klacht";//vul hier je gebruikersnaam in
	$password = "6345696";//vul hier je wachtwoord in
	$db = "masa_klacht";//vul hier je databasenaam in


	$connection = mysqli_connect("$host", "$username", "$password", "$db") 
	or die("Verbinding mislukt vanwege:" . mysqli_connect_error($connection));

?>