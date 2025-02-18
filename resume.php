<?php
session_start();
include "connectdb.php";
$id =$_SESSION['uid'];
$jid = $_POST['jid'];
$d = date("YmdHis");
$date = date("Y-m-d H:i:s");
$img ="$d$id.jpg";
COPY($_FILES['img']['tmp_name'],"./resume/".$img);

$sqlc="SELECT * from regisjob where r_uid='$id' and r_jid='$jid' and r_status!='2'";
$resultc=mysqli_query($con,$sqlc);
$numc=mysqli_num_rows($resultc);
if($numc != 0 )
{
    echo "<script>alert('คุณได้สมัครงานนี้ไปแล้ว')</script>";
echo "<meta http-equiv='refresh' content='0;detailjob.php?jid=$jid'>";

}else{
$sql="INSERT into regisjob(r_uid,r_jid,r_date,r_img)values('$id','$jid','$date','$img')";
mysqli_query($con,$sql);
echo "<meta http-equiv='refresh' content='0;detailjob.php?jid=$jid&r=1'>";
}

?>