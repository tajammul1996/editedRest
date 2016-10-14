<?php
session_start();
include 'dbl.php'
$uid = $_POST['input-20']
$pwd = $_POST['input-21']
$first = $_POST['input-23']
$last = $_POST['input-24']
$emailid = $_POST['input-25']
$sql = "INSERT INTO logindata (uid,pwd,first,last,emailid)
VALUES ('$uid','$pwd','$first','$last','$emailid')";

$result = $conn->query($sql);
header ("Location: index.html");