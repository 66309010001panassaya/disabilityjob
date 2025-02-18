<?php
session_start();
include "connectdb.php";

$cid = $_SESSION['cpid'];
if (!$cid) {
    die("Error: Session 'cpid' is not set.");
}

if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
    $img = $cid . "_" . time() . ".jpg"; // ชื่อไฟล์ไม่ซ้ำ
    $uploadPath = "./c_img/" . $img;

    if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadPath)) {
        $sql = "UPDATE company SET cp_picture='$img' WHERE cp_id='$cid'";
        if (mysqli_query($con, $sql)) {
            echo "อัปเดตรูปภาพสำเร็จ";
            echo "<meta http-equiv='refresh' content='0;URL=editproc.php'>";
        } else {
            die("Database error: " . mysqli_error($con));
        }
    } else {
        die("Error moving uploaded file.");
    }
} else {
    echo "Error: No file uploaded or upload failed. Error code: " . ($_FILES['img']['error'] ?? 'N/A');
}
?>
