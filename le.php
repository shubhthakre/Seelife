<?php
$FullName=$_GET["name"];
$EmailAddress=$_GET["email"];
$MobileNumber=$_GET["mobile"];
$Gender=$_GET["gender"];



$Address=$_GET["address"];
$City=$_GET["city"];

$State=$_GET["state"];
$Pincode=$_GET["pin"];

$server_name="localhost";
$username="root";
$password="";
$db_name="reg";
$connection=mysqli_connect($server_name,$username,$password,$db_name);
if($connection)
{
echo "Registration done sucessfully</br>";
}
else
{
echo "error";
}
$query="insert into registration values('$FullName','$EmailAddress','$MobileNumber','$Gender','$Address','$City','$State','$Pincode')";
if(mysqli_query($connection,$query))
{
header("Location: e1.php");
echo "your form has been submitted sucessfully</br>";
}
else
{
echo "error insert".mysqli_error($connection);
}

?>