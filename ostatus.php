<?php
include "connectdb.php";
$jid = $_GET['jid'];
$sql = "UPDATE job set job_status=1 where job_id='$jid'";
mysqli_query($con,$sql);
mysqli_close($con);
// echo $jid;
echo "<meta http-equiv='refresh' content='0;detail.php?jid=$jid'>";

?>