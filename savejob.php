<?php
session_start();
include "connectdb.php";
$n=$_POST['name'];

$d=$_POST['detail'];
$w=$_POST['welfare'];
$s=$_POST['salary'];
$tj=$_POST['typejob'];
$tu=$_POST['typeuser'];
$id=$_SESSION['cpid'];
$sql="INSERT INTO job(job_name,job_detail,job_welfare,job_salary,job_wb,id_dst,job_cpid)values('$n','$d','$w','$s','$tj','$tu','$id')";
mysqli_query($con,$sql);
mysqli_close($con);
echo "<meta http-equiv='refresh' content='0;job.php'>";
?>