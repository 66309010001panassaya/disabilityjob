<?php
session_start();
include "connectdb.php";
$cid = $_SESSION['cpid'];

    $n=$_POST['name'];
    $ad=$_POST['numad'];
    $mu=$_POST['mooad'];
    $soy=$_POST['soyad'];
    $tanon=$_POST['tanonad'];
    $tum=$_POST['tumad'];
    $um=$_POST['umad'];
    $pv=$_POST['pvad'];
    $post=$_POST['postad'];
    $address="$ad $mu $soy $tanon $tum $um $pv $post";
    $t=$_POST['tel'];
    $e=$_POST['email'];
    $u=$_POST['user'];
    $p=$_POST['password']; 
    $sql="SELECT * from company where cp_user='$u' and cp_id!='$cid' ";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $num=mysqli_num_rows($result);
    


    if($num==0){

    $sql="UPDATE company set cp_name='$n',cp_address='$address',cp_phone='$t',cp_email='$e',cp_user='$u',cp_password='$p' where cp_id='$cid'";
    mysqli_query($con,$sql);

   
    mysqli_close($con); 

   echo "<meta http-equiv='refresh' content='0;URL=editproc.php'>";
} else{
        echo "<script>alert('ชื่อผู้ใช้งานถูกใช้แล้ว')</script>";
        echo "<meta http-equiv='refresh' content='0;editproc.php'>";                            
    }
    ?> 