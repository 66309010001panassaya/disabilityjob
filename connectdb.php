<?php

$con=mysqli_connect("localhost","root","") or die("error1");
mysqli_select_db($con,"dataproject68") or die("error2");
mysqli_query($con,"SET NAMES utf8") ;

?>