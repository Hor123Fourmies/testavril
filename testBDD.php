<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "espace_commentaire";

$conn = new mysqli($servername, $username, $password);
$conn->select_db($dbname);

$recup = "SELECT pseudo FROM utilisateurs";
$requete = $conn->query($recup);

$row = $requete->fetch_assoc();

echo $row['pseudo'];

