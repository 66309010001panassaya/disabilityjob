
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>🏢งานที่ลงประกาศ</title>

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
	 include "menu_u.php";
	 ?>
	 </div>
	 <div class="col-sm-12 col-md-9 col-lg-9 mx-auto">

	 
	 <div class="card">
               
			   <div class="card-body">
				   <h4 class="card-title">งานที่ลงประกาศ</h4>
				   <!-- <p class="card-text"></p> -->
			   </div>
			  

				   <!-- <li class="list-group-item"> -->
					   
				  
					   <?php
					   include "connectdb.php";
					   $id=$_SESSION['cpid'];
					   $sql="SELECT * from job,disability where job_cpid='$id' and job.id_dst=disability.id_dst";
					   $result=mysqli_query($con,$sql);
					   $num = mysqli_num_rows($result);
					   if($num==0)
					   {
						?>
<div class="container">
<div class="alert alert-danger">
		<h4>ยังไม่มีงานที่ลงประกาศ</h4>
	</div>
</div>
						<?php
					   }else{

						?>
 <ul class="list-group list-group-flush">
						<?php
					   while($row=mysqli_fetch_assoc($result)){
					   ?>
<li class="list-group-item">
<div class="row">
					   <div class="col-sm-12 col-md-9 col-lg-9 mx-auto">
						   <?php
						   echo "ชื่องานที่รับสมัคร ".$row['job_name']."&nbsp;&nbsp;&nbsp; อาการทุพพลภาพ".$row['name_dst']."&nbsp;&nbsp;&nbsp; เงินเดือน ฿".$row['job_salary'];
						   ?>
					   </div>
					   <div class="col-sm-12 col-md-3 col-lg-3 mx-auto">
						<?php
						if($row['job_status']==1){
						?>
					   <div class="badge bg-primary text-wrap" style="width: 6rem;">
เปิดรับสมัคร
</div>
<?php }else{ ?>
	<div class="badge bg-danger text-wrap" style="width: 6rem;">
ปิดรับสมัคร
</div>
	<?php } ?>
						   <a href="detail.php?jid=<?php echo $row['job_id']; ?>" class="btn btn-primary">รายละเอียด</a>
					   </div>
</div>
</li>
					   <?php }
					   }  
					   ?>
					   
				  
			   </ul>
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

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>