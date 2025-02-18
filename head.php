
<?php

include "connectdb.php";
if(isset($_SESSION['cpid']))
{
    $id = $_SESSION['cpid'];

    $sql = "SELECT * from company where cp_id='$id'";
    $result = mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
}elseif(isset($_SESSION['uid']))
{
    $id = $_SESSION['uid'];
    $sql = "SELECT * from user where u_id='$id'";
    $result = mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
}else
{
    $row = "";
}

if(empty($_SESSION['index']))
{
    $index = 0;
}else
{
    $index = $_SESSION['index'];
}

if(empty($_SESSION['hack']))
{
    $hack = "";
}else
{
    $hack = $_SESSION['hack'];
}
if(empty($_SESSION['cid']) && empty($_SESSION['cpid']) && $hack=="error")
{
    header("location:index.php");
    echo "";
}

?>
<nav class="navbar navbar-expand-lg bg-light rounded">
		  <div class="container">
            <?php
            if(isset($_SESSION['cpid'])){
            ?>
			<a class="navbar-brand" href="job.php">
				♿️	 ระบบจัดหางาน
			</a>
            <?php }else
            {
                ?>
	<a class="navbar-brand" href="index.php">
				♿️	 ระบบจัดหางาน
			</a>
                <?php
            }
            ?>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">


    
<?php

    if($index==1 && empty($_SESSION['cpid']) && empty($_SESSION['uid'])){
?>
		        <li class="nav-item">
		          <a class="nav-link" href="home_c.php">🏢สำหรับบริษัท</a>
		        </li>

				<li class="nav-item">
		          <a class="nav-link" href="home_u.php">🚻สำหรับผู้หางาน</a>
		        </li>	
<?php } ?>
		     

<?php
if(isset($_SESSION['cpid']) || isset($_SESSION['uid']))
{
    if(isset($_SESSION['uid']))
    {

        $sqlm="SELECT * from mail where m_uid='$id' and m_status=0";
        $resultm=mysqli_query($con,$sqlm);
        $numm=mysqli_num_rows($resultm);
        ?>
    <li class="nav-item">
		          <a class="nav-link" href="message.php">ข้อความ <span style="color:white;background-color:red;border-radius:50px;" ><?php echo "&nbsp;&nbsp;".$numm."&nbsp;&nbsp;"; ?></span></a>
		        </li>
                <li class="nav-item">
		          <a class="nav-link" href="viewjob.php">งานที่สมัคร</a>
		        </li>
    <li class="nav-item">
		          <a class="nav-link" href="editprou.php">แก้ไขโปรไฟล์</a>
		        </li>
        <?php
    }

     
    if(isset($_SESSION['cpid']))
    {
        ?>
    <li class="nav-item">
		          <a class="nav-link" href="editproc.php">แก้ไขโปรไฟล์</a>
		        </li>
        <?php
    }

    ?>
    
		  
		        <li class="nav-item">
		          <a class="nav-link" href="logout.php">🧰ออกจากระบบ</a>
		        </li>

			
    <?php
}
?>

<?php

?>

		      </ul>
		    </div>
		  </div>
		</nav>