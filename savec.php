<?php
include "connectdb.php";

$n = mysqli_real_escape_string($con, $_POST['name']);
$ad = mysqli_real_escape_string($con, $_POST['numad']);
$mu = mysqli_real_escape_string($con, $_POST['mooad']);
$soy = mysqli_real_escape_string($con, $_POST['soyad']);
$tanon = mysqli_real_escape_string($con, $_POST['tanonad']);
$tum = mysqli_real_escape_string($con, $_POST['tumad']);
$um = mysqli_real_escape_string($con, $_POST['umad']);
$pv = mysqli_real_escape_string($con, $_POST['pvad']);
$post = mysqli_real_escape_string($con, $_POST['postad']);
$address = "$ad $mu $soy $tanon $tum $um $pv $post";
$t = mysqli_real_escape_string($con, $_POST['tel']);
$e = mysqli_real_escape_string($con, $_POST['email']);
$u = mysqli_real_escape_string($con, $_POST['user']);
$p = mysqli_real_escape_string($con, $_POST['password']);

// ตรวจสอบว่าผู้ใช้ซ้ำหรือไม่
$sql = "SELECT * FROM company WHERE cp_user='$u'";
$result = mysqli_query($con, $sql);

if (!$result) {
    die("Error in Query: " . mysqli_error($con));
}

$num = mysqli_num_rows($result);

if ($num == 0) {
    // บันทึกข้อมูลบริษัท
    $sql = "INSERT INTO company(cp_name, cp_address, cp_phone, cp_email, cp_user, cp_password) 
            VALUES('$n','$address','$t','$e','$u','$p')";
    
    if (mysqli_query($con, $sql)) {
        $cid = mysqli_insert_id($con);

        // ตรวจสอบและอัปโหลดรูปภาพ
        if (isset($_FILES['img']) && $_FILES['img']['error'] == 0) {
            $img = "$cid.jpg";
            move_uploaded_file($_FILES['img']['tmp_name'], "./c_img/" . $img);
            $sqli = "UPDATE company SET cp_picture='$img' WHERE cp_id='$cid'";
            mysqli_query($con, $sqli);
        }

        mysqli_close($con);
        echo "<meta http-equiv='refresh' content='0;URL=home_c.php'>";
    } else {
        die("Insert Failed: " . mysqli_error($con));
    }
} else {
    echo "<script>alert('ชื่อผู้ใช้งานถูกใช้แล้ว');</script>";
    echo "<meta http-equiv='refresh' content='0;URL=register_c.php'>";
}

?>
