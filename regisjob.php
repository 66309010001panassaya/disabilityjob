<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>🏢ลงประกาศงาน</title>

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
		include "head.php"
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
               
                <div class="card-body">
                    <h4 class="card-title">ลงประกาศงาน</h4>
                    <!-- <p class="card-text"></p> -->
                    <form action="savejob.php" method="post">
                        <div class="mb-3">
                          <label for="" class="form-label">ตำแหน่งงาน</label>
                          <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>

                        <div class="mb-3">
                          <label for="" class="form-label">รายละเอียดงาน</label>
                          <input type="text" name="detail" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>

						<div class="mb-3">
                          <label for="" class="form-label">สวัสดิการ</label>
                          <input type="text" name="welfare" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>

						<div class="mb-3">
                          <label for="" class="form-label">เงินเดือน</label>
                          <input type="text" name="salary" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>




                        <div class="mb-3">
                            <label for="" class="form-label">ประเภทงาน</label>
                            <select class="form-select form-select-lg" name="typejob" id="">
                                <?php
                                include "connectdb.php";
                                $sqlt="SELECT * from typejob";
                                $resultt=mysqli_query($con,$sqlt);
                                while($rowt=mysqli_fetch_assoc($resultt)){
                                ?>
                                <option value="<?php echo $rowt['id_tpjob']; ?>"><?php echo $rowt['name_tpjob']; ?></option>
                                    <?php } ?>
                            </select>
                         </div>

                 
                         <div class="mb-3">
                            <label for="" class="form-label">ประเภทบุคลากร</label>
                            <select class="form-select form-select-lg" name="typeuser" id="">
                                <?php
                                include "connectdb.php";
                                $sqld="SELECT * from disability";
                                $resultd=mysqli_query($con,$sqld);
                                while($rowd=mysqli_fetch_assoc($resultd)){
                                ?>
                                <option value="<?php echo $rowd['id_dst']; ?>"><?php echo $rowd['name_dst']; ?></option>
                                    <?php } ?>
                            </select>
                         </div>

                         <button type="submit" class="btn btn-primary">ประกาศสมัครงาน</button>

                    </form>
                </div>
                
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