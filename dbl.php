<?php

$conn = mysqli_connect("182.50.133.87:3306","signdata","Myhumtum!1","mdkhurram_");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}