<?php
session_start();
include 'dbl.php'
$uid = $_POST['input-20']
$pwd = $_POST['input-21']


$sql = "SELECT * FROM logindata WHERE uid='$uid' AND pwd='$pwd';

$result = $conn->query($sql);
if(!row = mysqli_fetch_assoc(($result))) {
echo "your Username or password is Incorrect";
}
else{
$_Session['id'] = $row['id'];
//header ("Location: index.html");