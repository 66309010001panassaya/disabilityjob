<?php
$rid=$_GET['rid'];
$a=$_GET['a'];
include "connectdb.php";
if($a==1){
$sql="UPDATE regisjob set r_status=1 where r_id='$rid'";
}else
{
$sql="UPDATE regisjob set r_status=2 where r_id='$rid'";

}
mysqli_query($con,$sql);
mysqli_close($con);
echo "<meta http-equiv='refresh' content='0;detailuser.php?rid=$rid'>";
?>