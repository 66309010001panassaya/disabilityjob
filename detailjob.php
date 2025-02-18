<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<?php include "connectdb.php"; ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>🚻รายละเอียดงาน</title>

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
	<?php
	include "head.php";
    $id=$_GET['jid'];

    if(isset($_GET['r']))
    {
    echo "<script>alert('สมัครเสร็จสิ้น')</script>";
    echo "<meta http-equiv='refresh' content='0;detailjob.php?jid=$id'>";
        
    }
	?>
	</div>
     <br>
	 <div class="container">
	 <div class="row">
	 <div class="col-sm-12 col-md-3 col-lg-3 mx-auto">
        <div class="card" style="width:100%;">
        <form action="" method="post">
          <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">
                <div class="form-group">
                    <label>ประเภทงาน</label>
                    <select name="dst" class="form-control">
                        <?php
                        include "connectdb.php";
                        $sql="SELECT * from typejob";
                        $result=mysqli_query($con,$sql);
                        $n=1;
                        while($row=mysqli_fetch_assoc($result)){
                        ?>
                        <option value="<?php echo $row['id_tpjob']; ?>"><?php echo $n++.".".$row['name_tpjob']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>ลักษณะความพิการ</label>
                    <select name="dst" class="form-control">
                        <?php
                        $sql="SELECT * from disability";
                        $result=mysqli_query($con,$sql);
                        $n=1;
                        while($row=mysqli_fetch_assoc($result)){
                        ?>
                        <option value="<?php echo $row['id_dst']; ?>"><?php echo $n++.".".$row['name_dst']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                <label for=""></label>
                  <div class="col-sm-12">
                    <input type="submit" value="ค้นหา" class="btn btn-primary form-control">
                    </div>
                </div>
            </p>
            
          </div>
        </div></form>
	 </div>
	 <div class="col-sm-12 col-md-9 col-lg-9 mx-auto">
     <div class="card">
            <?php
                     
                        $sql="SELECT * from job,typejob,disability where job_id='$id' and job.id_dst=disability.id_dst and job_wb=id_tpjob";
                        $result=mysqli_query($con,$sql);
                        $row=mysqli_fetch_assoc($result)
                        ?>
                <div class="card-body">

			<h4 class="card-title"><?php echo "งาน ".$row['job_name']; ?>

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
                            <a href="index.php" class="btn btn-secondary">กลับ</a>
                            <?php
                            if(isset($_SESSION['uid'])){
                            ?>
                            <a data-bs-toggle="modal" data-bs-target="#modalId" class="btn btn-primary">สมัคร</a>
                                <?php }else{ ?>
                                    <a href="home_u.php" class="btn btn-primary">สมัคร</a>
                    
                                    <?php } ?>
                        <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTitleId">ใส่ resume</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="resume.php" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                     
                                        <label for="">resume</label>
                                            <input type="file" name="img" id="" class="form-control">
                                            <input type="hidden" name="jid" value="<?php echo $id; ?>">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        
                        
                        <!-- Optional: Place to the bottom of scripts -->
                        <script>
                            const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
                        
                        </script>
     
                   
          
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