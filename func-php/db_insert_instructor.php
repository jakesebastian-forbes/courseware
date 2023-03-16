<?php
require("db_connection.php");
require("gen_uuid.php");

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO `instructor` (`id`,`firstname`, `lastname`, `email`, `password`) VALUES (?,?,?,?,?)");
$stmt->bind_param("sssss", $id,$firstname, $lastname, $email,$password);


$id = gen_uuid();
$firstname = "Bill Jerico";
$lastname = "Mercado";
$email = "bjmercado@g.batstate-u.ph";
$password = "billjerico";
$stmt->execute();



?>