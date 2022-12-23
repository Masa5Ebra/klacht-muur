<?php
$servername = "localhost";
$username = "masa_klacht";
$password = "6345696";
$database = "masa_klacht";
$data = mysqli_connect($servername, $username, $password, $database);

if ($data===false) 
{
	die ("Connection error");
}
	if ($_SERVER["REQUEST_METHOD"]=="POST")
{
$gebruikersnaam= $_POST["gebruikersnaam"];
$wachtwoord= $_POST["wachtwoord"];
$sql= "select * from login where gebruikersnaam= '".$gebruikersnaam."' AND wachtwoord = '".$wachtwoord."' ";

$result = mysqli_query($data, $sql);
$row=mysqli_fetch_array($result);

if ($row["usertype"]=="admin")
{
	header("location:bmeurs.php");
}
else {
	header("location:create.php");
}

}
?>


<html>
<head>
     <title>inloggen</title>
	 <link rel = "stylesheet" type = "text/css" href = "style.css">   
</head>  
<body>  

  <div class= "klaag"> <h2>Inloggen</h2> </div>
<div class="login-form-wrap">
<form class="login-form" action="#" method="POST">
<label>Gebruikersnaam</label> 
<input type="text" name="gebruikersnaam" required>
<br> <br>
<label>Wachtwoord</label> 
<input type="password" name="wachtwoord" required>
<br>
<input type="submit" value="Inloggen">

</form>
</div>
</body>     
</html>  





