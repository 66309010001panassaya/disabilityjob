<!DOCTYPE html>
<html>
<head>
	<?php include "connectdb.php"; ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>🚻ผู้หางานเข้าสู่ระบบ</title>

	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<style type="text/css">
		
		@import url('https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap');

		body {
			background: #bdc3c7;
			font-family: 'Kanit', sans-serif;
		}

		.btn-primaryy {
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

<div class="row">
    <div class="col-sm-12 col-md-8 col-lg-6 mx-auto">
        
<div class="card">
    <div class="card-header">
        <h4 align="center">สมัครบริษัท </h4>
    </div>
    <div class="card-body">
    <form action="savec.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="" class="form-label">ชื่อบริษัท <span style="color:red;">*</span></label>
      <input type="text" name="name" id="" class="form-control" placeholder="ชื่อบริษัท" aria-describedby="helpId" required>

    </div>

        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">

            <div class="mb-3">
     
     <label for="" class="form-label">เลขที่</label>
     <input type="text" name="numad"  class="form-control" placeholder="บ้านเลขที่" required>
 
     </div>
 
     <div class="mb-3">
      
      <label for="" class="form-label">หมู่</label>
      <input type="text" name="mooad"  class="form-control" placeholder="หมู่" required>
  
      </div>

      <div class="mb-3">
      
      <label for="" class="form-label">ซอย</label>
      <input type="text" name="soyad"  class="form-control" placeholder="ซอย" required>
  
      </div>
      
           
      
     <div class="mb-3">
      
      <label for="" class="form-label">แขวง/ตำบล</label>
      <input type="text" name="tumad"  class="form-control" placeholder="แขวง/ตำบล" required>
  
      </div>
           
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                
     <div class="mb-3">
     
     <label for="" class="form-label">เขต/อำเภอ</label>
     <input type="text" name="umad"  class="form-control" placeholder="เขต/อำเภอ" required>
 
     </div>
     <div class="mb-3">
      
      <label for="" class="form-label">ถนน</label>
      <input type="text" name="tanonad"  class="form-control" placeholder="ถนน" required>
  
      </div>
          
     
     <div class="mb-3">
     
     <label for="" class="form-label">จังหวัด</label>
     <input type="text" name="pvad"  class="form-control" placeholder="จังหวัด" required>

     </div>
          
     <div class="mb-3">
     
     <label for="" class="form-label">รหัสไปรษณีย์</label>
     <input type="text" name="postad"  class="form-control" placeholder="รหัสไปรษณีย์" required>


     </div>            

            </div>
        </div>

                       
              
     <div class="mb-3">
      
      <label for="" class="form-label">โลโก้</label>
      <input type="file" name="img"  class="form-control" placeholder="โลโก้บริษัท" required>
  
      </div>
           
     <div class="mb-3">
      
      <label for="" class="form-label">เบอร์โทรติดต่อ</label>
      <input type="text" name="tel"  class="form-control" placeholder="เบอร์โทร" required>
  
      </div>
           
     <div class="mb-3">
      
      <label for="" class="form-label">อีเมล์</label>
      <input type="email" name="email"  class="form-control" placeholder="อีเมล์" required>
  
      </div>
           
     <div class="mb-3">
      
      <label for="" class="form-label">เลขนิติบุคคล 13 หลัก<span style="color:red;">*</span></label>
      <input type="text" name="user"  class="form-control" placeholder="เลขนิติบุคคล 13 หลัก" required>
  
      </div>

         


     <div class="mb-3">
      
      <label for="" class="form-label">รหัสผ่าน</label>
      <input type="password" name="password"  class="form-control" placeholder="รหัสผ่าน" required>
  
      </div>
           
      
<input type="submit" class="btn btn-primary " value="สมัคร">

<a href="home_c.php">มีบัญชีอยู่แล้ว ? </a>
</form>
    </div>
</div>
    </div>
</div>


	</div>
  



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

<footer class="footer mt-5">
		<div class="card text-center text-muted" style="background: none; border: none;">
			<div class="card-body">
				
			</div>
		</div>
	</footer>
</html>