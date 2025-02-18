<?php
include "connectdb.php";
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
    $sql="SELECT * from user where u_username='$u' ";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $num=mysqli_num_rows($result);
    $dst=$_POST['dst'];
    
    if($num==0){

   
    $sql="INSERT INTO user(u_name,u_address,u_tel,u_email,u_username,u_password,id_dst,u_sex,u_education,u_birtdate)VALUES('$n','$address','$t','$e','$u','$p','$dst','$s','$edu','$date')";
    mysqli_query($con,$sql);
    $cid = mysqli_insert_id($con);
    $img = "$cid.jpg";
// echo $_FILES['img']['name'];
    COPY($_FILES['img']['tmp_name'],"./u_pic/".$img);
    $sqli = "UPDATE user set u_img='$img' where u_id='$cid'";
    mysqli_query($con,$sqli);
    mysqli_close($con); 

    echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
} else{
        echo "<script>alert('ชื่อผู้ใช้งานถูกใช้แล้ว')</script>";
        echo "<meta http-equiv='refresh' content='0;register_c.php'>";                            
    }
    ?> 