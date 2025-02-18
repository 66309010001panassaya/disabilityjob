<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>🏢บริษัทเข้าสู่ระบบ</title>

	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<style type="text/css">
		
		@import url('https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap');

		body {
			background: #bdc3c7;
			font-family: 'Kanit', sans-serif;
		}

		.btn-primary {
		    --bs-btn-color: #fff;
		    --bs-btn-bg: #A3CB38;
		    --bs-btn-border-color: #A3CB38;
		    --bs-btn-hover-color: #fff;
		    --bs-btn-hover-bg: #009432;
		    --bs-btn-hover-border-color: #009432;
		    --bs-btn-focus-shadow-rgb: 49,132,253;
		    --bs-btn-active-color: #fff;
		    --bs-btn-active-bg: #009432;
		    --bs-btn-active-border-color: #009432;
		    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
		    --bs-btn-disabled-color: #fff;
		    --bs-btn-disabled-bg: #A3CB38;
		    --bs-btn-disabled-border-color: #A3CB38;
		}

	</style>

</head>
<body>

	<div class="container mt-3">
	<?php
	include "head.php";
	?>
	</div>
     <br>
	 <div class="container">
	 <div class="row">
	 <div class="col-sm-12 col-md-3 col-lg-3 mx-auto">
<?php
include "menu_c.php";
?>
	 </div>
	 <div class="col-sm-12 col-md-9 col-lg-9 mx-auto">

            <div class="card">
            <?php
                        include "connectdb.php";
                        $id=$_GET['rid'];
                        $sql="SELECT * from job,disability,user,regisjob,typejob where r_id='$id' and r_jid=job_id and job.id_dst=disability.id_dst and r_uid=u_id and r_jid=job_id and id_tpjob=job_wb";

                        $result=mysqli_query($con,$sql);
                        $row=mysqli_fetch_assoc($result)
                        ?>
                <div class="card-body">
		<div class="row">
			<div class="col-sm-12 col-md-10 col-lg-10">
			<h4 class="card-title"><?php echo "ชื่อ ".$row['u_name']; ?>

			</div>

			<div class="col-sm-12 col-md-2 col-lg-2">
        
                <?php
       if($row['r_status']==0){
                ?>
				<a href="confirm.php?a=1&rid=<?php echo $id; ?>"  class="btn btn-primary"  >ผ่าน</a>
				<a href="confirm.php?a=0&rid=<?php echo $id; ?>" class="btn btn-danger"  >ไม่ผ่าน</a>
                <?php }
				if($row['r_status']==1)
				{
					?>
				<a  class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#send">ส่งข้อความ</a>

					<?php
				}
				?>
			
			</div>
		</div>
			</h4>
                    <!-- <p class="card-text"></p> -->
          <hr>
                    <!-- USER -->
        <div class="text-center">
        <img src="u_pic/<?php echo $row['u_img']; ?>" alt="" width="450px;">
       <br> <b><?php echo "งาน ".$row['job_name']; ?></b> <br>
       <?php
       echo "เบอร์โทร ".$row['u_tel'];
       echo "<br>ที่อยู่ ".$row['u_address'];
       echo "<br>การศึกษา ".$row['u_education'];
       echo "<br>เพศ ".$row['u_sex'];
       echo "<br>วันเกิด ".$row['u_birtdate'];
       echo "<br>อีเมล์ ".$row['u_email'];
       echo "<br>ชื่อผู้ใช้งาน ".$row['u_username'];
       ?>

<a href="viewresume.php?resume=<?php echo $row['r_img']; ?>" style="position:absolute;right:0;margin-right:40px;" class="btn btn-success btn-sm" target="_blank">view resume</a>
        </div>
                    <!-- END USER -->
    <hr>
                   
                    
                        
                            <?php
                            echo "รายละเอียด ".$row['job_detail'];
                            echo "<br>สวัสดิการ ".$row['job_welfare'];
                            echo "<br>เงินเดือน ".$row['job_salary'];
                            echo "<br>ประเภทงาน ".$row['name_tpjob'];
                            echo "<br>อาการทุพพลภาพ ".$row['name_dst'];
                            ?>
                     
                    <hr>
                            <a href="user.php" class="btn btn-secondary">กลับ</a>
					
                    
                        
     
                   
          
            </div>

	 </div>
    
    
    </div>
	 </div>

	

		</div>
	</div>

	<footer class="footer mt-5">
    <div class="card text-center text-muted" style="background: none; border: none;">
			<div class="card-body">
				
			</div>
		</div>
	</footer>

	<!-- Modal trigger button -->

	
	<!-- Modal Body -->
	<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
	<div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalTitleId">ปรับสถานะ</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body text-center">
				
				<a href="ostatus.php?jid=<?php echo $id; ?>" class="btn btn-primary mb-2" style="100%" align="center">งานยังเปิดรับสมัคร</a>

<a href="cstatus.php?jid=<?php echo $id; ?>" class="btn btn-danger" style="100%">งานปิดรับสมัครแล้ว</a>
				
				</div>
		
			</div>
		</div>
	</div>
	
	
	<!-- Optional: Place to the bottom of scripts -->
	<script>
		const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
	
	</script>
	<!-- MODAL -->
<div class="modal fade" id="send">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<h4>แจ้งรายละเอียดหาผู้สมัคร</h4>
				<form action="send.php" method="post">
					<textarea name="text" id="" cols="30" rows="10" class="form-control"></textarea>
					<input type="hidden" name="jid" value="<?php echo $row['job_id']; ?>">
					<input type="hidden" name="uid" value="<?php echo $row['u_id']; ?>">
					<input type="hidden" name="rid" value="<?php echo $_GET['rid']; ?>">
					<input type="submit" value="ส่ง" class="btn btn-success mt-3" width="100%">
				</form>
			</div>
		</div>
	</div>
</div>
<!-- END MODAL -->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>