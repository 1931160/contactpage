<?php
include("config.php");
extract($_POST);
$query="INSERT INTO 'contact-data'('firstname',lastname','phone','email','message')VALUES('".$firstname."','".$lastname."','".$phone."','".$email."','".$message"');
$result=$mysqli->query($query);
if(!$result){
    echo"something went wrong" .$mysqli->err;
}
echo "Thank you for submitting your query";
$mysqli->close();
print_r($_POST);
?>