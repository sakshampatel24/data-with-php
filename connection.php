<?php
$connection = mysqli_connect('localhost', 'root', '','uber');

if (!empty($connection->error)) {
    die("Connection could not establish");
};
?>