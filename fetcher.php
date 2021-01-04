<?php
// Informations d'identification
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'supergamehub');

// Connexion a la base de donnees MySQL
$conn = @mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Verifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
$query="SELECT * FROM `Games`";
$result=mysqli_query($conn,$query);
echo"<table id='users'>";
if(!($result->num_rows > 0)){
    echo " 0 Result .";
}
return $result;
$conn->close();

?>
