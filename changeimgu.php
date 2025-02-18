<?php
session_start();
include "connectdb.php";

$id = $_SESSION['uid'];
if (!$id) {
    die("Error: Session 'uid' is not set.");
}

if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
    $img = $id . "_" . time() . ".jpg"; // ชื่อไฟล์ไม่ซ้ำ
    $uploadPath = "./u_pic/" . $img;

    if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadPath)) {
        $sql = "UPDATE user SET u_img='$img' WHERE u_id='$id'";
        if (mysqli_query($con, $sql)) {
            echo "อัปเดตรูปภาพสำเร็จ";
            echo "<meta http-equiv='refresh' content='0;URL=editprou.php'>";
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
