<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>🏢ข้อมูลงานที่ลงประกาส</title>

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
                        $id=$_GET['jid'];
                        $sql="SELECT * from job,typejob,disability where job_id='$id' and job.id_dst=disability.id_dst and job_wb=id_tpjob";
                        $result=mysqli_query($con,$sql);
                        $row=mysqli_fetch_assoc($result)
                        ?>
                <div class="card-body">
		<div class="row">
			<div class="col-sm-12 col-md-10 col-lg-10">
			<h4 class="card-title"><?php echo "งาน ".$row['job_name']; ?>

			</div>

			<div class="col-sm-12 col-md-2 col-lg-2">
				<a  class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#modalId">ปรับสถานะ</a>
			</div>
		</div>
			</h4>
                    <!-- <p class="card-text"></p> -->
          
    <hr>
                   
                    
                        
                            <?php
                            echo "รายละเอียด ".$row['job_detail'];
                            echo "<br>สวัสดิการ ".$row['job_welfare'];
                            echo "<br>เงินเดือน ".$row['job_salary'];
                            echo "<br>ประเภทงาน ".$row['name_tpjob'];
                            echo "<br>อาการทุพพลภาพ ".$row['name_dst'];
                            ?>
                     
                    <hr>
                            <a href="job.php" class="btn btn-secondary">กลับ</a>

					<a href="editjob.php?jid=<?php echo $id; ?>" class="btn btn-primary">แก้ไขงาน</a>
                    
                        
     
                   
          
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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>