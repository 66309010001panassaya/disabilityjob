<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<?php include "connectdb.php"; ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>🚻หน้าหลัก</title>

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
    unset($_SESSION['hack']);
    $_SESSION['index'] = 1;
         include "head.php";
    ?>
	</div>
     <br>
	 <div class="container">
	 <div class="row">
	 <div class="col-sm-12 col-md-3 col-lg-3 mx-auto">
        <div class="card" style="width:100%;">
        <form action="index.php" method="post">
          <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">
                <div class="form-group">
                    <label>ประเภทงาน</label>
                    <select name="type" class="form-control">
                    <option value="">ไม่ระบุ</option>

                        <?php
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
                        <option value="">ไม่ระบุ</option>
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
        <div class="card mx-auto">
         <?php  
         
        if(empty($_POST['type']) && empty($_POST['dst']))
        {
         $sql="SELECT * from job Inner join company on job_cpid=cp_id";

        }else
        {
     
            if($_POST['type']!="" && $_POST['dst']!="")
            {
                $type = $_POST['type'];
                $dst = $_POST['dst'];
         $sql="SELECT * from job  Inner join company on job_cpid=cp_id WHERE job_wb like '$type' and id_dst like '$dst' ";
  

            }elseif($_POST['type']!="" && $_POST['dst']=="")
            {
                $type = $_POST['type'];
        
         
         $sql="SELECT * from job  Inner join company on job_cpid=cp_id WHERE job_wb like '$type'";

            }elseif($_POST['type']=="" && $_POST['dst']!="")
            {
                $dst = $_POST['dst'];
             

         $sql="SELECT * from job  Inner join company on job_cpid=cp_id where id_dst like '$dst'";

            }
        }
       
            $result=mysqli_query($con,$sql);
            $num=mysqli_num_rows($result);
         ?>
          <div class="card-body " >
            <h5 class="card-title">ค้นหาพบ <?php echo $num; ?> งาน </h5>
            <!--<h6 class="card-subtitle mb-2 text-muted ">Card subtitle</h6> -->
            <p class="card-text">
            <table border="0" width="100%" class="table table-hover" align="center">
            <?php
            
                    $n=1;
                    while($row=mysqli_fetch_assoc($result)){
                        $idst =$row['id_dst'];
                        $sqld = "SELECT * from  disability where id_dst='$idst'";
                        $resultd = mysqli_query($con,$sqld);
                        $rowd=mysqli_fetch_assoc($resultd);
                    ?>    
                <tr >
                        
                    <td>
                        <p>
                            <div class="row">
                            <div class="col-sm-12 col-lg-2 col-md-2">
                               <img src="c_img/<?php echo $row['cp_picture']; ?>" alt="" width="100%">
                            </div>
                            <div class="col-sm-12 col-lg-6 col-md-6">
                            <?php echo "ชื่องาน ".$row['job_name']; ?><br>
                               <?php echo "ชื่อบริษัท ".$row['cp_name']; ?><br>
                               <?php echo "เงินเดือน ".$row['job_salary']; ?><br>
                               <?php echo "ประเภทความพิการ ".$rowd['name_dst']; ?><br>
                            </div>
                            <div class="col-sm-12 col-lg-2 col-md-2">
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
                            </div>
                            <div class="col-sm-12 col-lg-2 col-md-2">
                                
                            <a href="detailjob.php?jid=<?php echo $row['job_id']; ?>" class="btn btn-primary">รายละเอียด</a>
                            </div>
                        </div>
                        </p>
                    </td>
                </tr>
                <?php } ?>
         </table>

            </p>
            
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