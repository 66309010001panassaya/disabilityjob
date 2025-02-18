<?php
session_start();
include "connectdb.php";
$uid = $_SESSION['uid'];

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
    $edu = $_POST['edu'];
    $s = $_POST['sex'];
    $u=$_POST['user'];
    $date = $_POST['birth'];
    $p=$_POST['password']; 
    
    $sql="SELECT * from user where u_username='$u' and u_id!='$uid' ";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $num=mysqli_num_rows($result);
    $dst=$_POST['dst'];
    


    if($num==0){

    $sql="UPDATE user set u_name='$n',u_address='$address',u_tel='$t',u_email='$e',u_username='$u',u_password='$p',id_dst='$dst',u_sex='$s',u_education='$edu',u_birtdate='$date' where u_id='$uid'";
    mysqli_query($con,$sql);

   
    mysqli_close($con); 

    echo "<meta http-equiv='refresh' content='0;URL=editprou.php'>";
} else{
        echo "<script>alert('ชื่อผู้ใช้งานถูกใช้แล้ว')</script>";
        echo "<meta http-equiv='refresh' content='0;editprou.php'>";                            
    }
    ?> 