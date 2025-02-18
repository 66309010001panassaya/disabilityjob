<?php
session_start();
$jid=$_POST['jid'];
$uid=$_POST['uid'];
$cid=$_SESSION['cpid'];
$t= $_POST['text'];
$rid =$_POST['rid'];
include "connectdb.php";
$sql="INSERT into mail(m_cpid,m_uid,m_jid,m_text)values('$cid','$uid','$jid','$t')";
mysqli_query($con,$sql);
mysqli_close($con);
echo "<meta http-equiv='refresh' content='0;detailuser.php?rid=$rid'>";
?>