<?php
session_start();
include "connectdb.php";
$u=$_POST['username'];
$p=$_POST['password'];
// echo $u;
// echo $p;
$sql="SELECT * from company where cp_user='$u' and cp_password='$p' ";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$num=mysqli_num_rows($result);

if($num==1)
{
    $_SESSION['cpid']=$row['cp_id'];
    echo "<meta http-equiv='refresh' content='0;job.php'>";

}else
{
    echo "<script>alert('รหัสผ่านผิดพลาด')</script>";
    echo "<meta http-equiv='refresh' content='0;index.php'>";
}

?>