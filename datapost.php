<?php

include "connection.php";


$Full_name = $_POST["Full_name"];
$Phone_number = $_POST["Phone_number"];
$Destination =  $_POST["Destination"];
$date = $_POST["date"];
$No_of_pax = $_POST["No_of_pax"];

$sql = "INSERT INTO data (Full_name, Phone_number, Destination, date, No_of_pax) VALUES ('$Full_name', '$Phone_number', '$Destination', '$date', '$No_of_pax')";

$rs = $connection->query($sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>