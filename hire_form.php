<?php
include("config.php");
extract($_POST);
$sql = "INSERT INTO `hiredata`(`name`, `age`, `phone`, `email`, `project`) VALUES ('".$name."','".$age."',".$phone.",'".$email."','".$project."')";
$result = $mysqli->query($sql);
if(!$result){
    die("Couldn't enter data: ".$mysqli->error);
}
echo header("Location:thanks.php");
$mysqli->close();
?>