<?php
include "connectedb.php";

$n = $_POST['name'];
$ad = $_POST['numad'];
$mu = $_POST['moodad'];
$soy = $_POST['soyad'];
$tanon = $_POST['tanonad'];
$tum = $_POST['tumad'];
$pv = $_POST['pvad'];
$post = $_POST['postad'];
$address = "$ad $mu $soy $tanon $tum $pv $post";
$t = $_POST['tel'];
$e = $_POST['email'];
$u = mysqli_real_escape_string($con, $_POST['user']); // ป้องกัน SQL Injection
$p = mysqli_real_escape_string($con, $_POST['password']);

$sql = "SELECT * FROM company WHERE cp_user='$u'";
$result = mysqli_query($con, $sql);

if (!$result) {
    die("Query Failed: " . mysqli_error($con)); // เช็ค error
}

$num = mysqli_num_rows($result);

if ($num == 0) {
    $sql = "INSERT INTO company(cp_name, cp_address, cp_phone, cp_email, cp_user, cp_password) 
            VALUES('$n','$address','$t','$e','$u','$p')";

    if (mysqli_query($con, $sql)) {
        echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
    } else {
        die("Insert Failed: " . mysqli_error($con)); // เช็ค error
    }
} else {
    echo "<script>alert('รหัสบริษัทนี้ถูกใช้งานแล้ว');</script>";
    echo "<meta http-equiv='refresh' content='0;URL=register_c.php'>";
}

mysqli_close($con);
?>
