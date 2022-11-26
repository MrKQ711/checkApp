<?php

$con = new mysqli("localhost", "root", "", "mystore");
if(!$con) {
       //die("Connection failed: " . mysqli_connect_error()); 
       die("Connection failed: " . mysqli_error($con));
}
