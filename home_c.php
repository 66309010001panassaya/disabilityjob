
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>🏢เข้าสู่ระบบสำหรับบริษัท</title>

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
	$_SESSION['index'] = 0;
	
	include "head.php";
	?>
	</div>
     <br>
	 <div class="container">
	 <div class="row">
	 <div class="col-sm-12 col-md-5 col-lg-5 mx-auto">
	 <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
		  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
		  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
		  <div class="carousel-item active" data-bs-interval="10000">
			<center>	<img src="picture/fininsure.jpg" class="d-block w-90" alt="..."style="max-width: 100%; height: auto;"> </center>
			<div class="carousel-caption d-none d-md-block">
			</div>
		  </div>
		  <div class="carousel-item" data-bs-interval="2000">
			<center>	<img src="picture/momo.jpg" class="d-block w-90" alt="..."style="max-width: 100%; height: auto;"> </center>
			<div class="carousel-caption d-none d-md-block">
			 
			</div>
		  </div>
		  <div class="carousel-item">
			<center>	<img src="picture/thaivago.jpg" class="d-block w-90" alt="..."style="max-width: 100%; height: auto;"> </center>
			<div class="carousel-caption d-none d-md-block">
	
			</div>
		  </div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
		  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		  <span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
		  <span class="carousel-control-next-icon" aria-hidden="true"></span>
		  <span class="visually-hidden">Next</span>
		</button>
	  </div>
	 </div>
	 <div class="col-sm-12 col-md-6 col-lg-6 mx-auto">
	 <div class="card">
		<div class="card-body">
		<form action="check_c.php" method="post">
       
	   
			<h3 align="center">เข้าสู่ระบบสำหรับบริษัท</h3>
	  
			<div class="mb-3">
      <label for="" class="form-label">รหัสประจำบริษัท</label>
      <input type="text" name="username" id="" class="form-control" placeholder="รหัสประจำบริษัท" aria-describedby="helpId" required>

    </div>
	<div class="mb-3">
      <label for="" class="form-label">รหัสผ่าน</label>
      <input type="password" name="password" id="" class="form-control" placeholder="รหัสผ่าน" aria-describedby="helpId" required>

    </div>
		
			<input type="submit" class="btn btn-primary " value="เข้าสู่ระบบ">
			<input type="reset" class="btn btn-danger " value="ลบข้อมูล">
		
			<a href="register_c.php">สมัครสมาชิก</a>
		   


   
   </form>
		</div>
	 </div>
	 </div></div>
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