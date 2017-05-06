<?php
include("database.php");

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email= $_POST["email"];
$address = $_POST["address"];
$phone = $_POST["telephone"];
$password = $_POST["password"];


$inserted = Database::getInstance()->insertUser($firstName,$lastName,$password,$address,$phone,$email);
if($inserted){
	echo "Something went wrong,sorry :(";
}

?>