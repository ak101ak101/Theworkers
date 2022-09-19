<?php
include("config.php");
extract($_POST);
$sql = "INSERT INTO `contactdata`(`name`, `age`, `phone`, `email`, `skill`) VALUES ('".$name."','".$age."',".$phone.",'".$email."','".$skill."')";
$result = $mysqli->query($sql);
if(!$result){
    die("Couldn't enter data: ".$mysqli->error);
}
echo header("Location:thanks.php");
$mysqli->close();
?>