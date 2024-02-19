<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "data_taruna";
        // MySQL adalah perangkat lunak server database.
$db = mysqli_connect($host,$user,$pass,$db); // Mengkoneksikan atau menghubungkan ke database
if(!$db){
    die("tidak bisa terkoneksi ke database");
}
$NIT     =  "";
$NAMA    =  "";
$KELAS   =  "";     
$JURUSAN =  "";
$sukses  = "";
$error   = "";

if(isset($_POST['simpan'])){
    $NIT     =  $_POST['NIT'];
    $NAMA    =  $_POST['NAMA'];
    $KELAS =  $_POST['KELAS'];
    $JURUSAN  =  $_POST['JURUSAN'];
    // MENGINPUT DATA KE TABLE DATABASE
if($NIT && $NAMA && $KELAS && $JURUSAN){
        $sql1 =  "insert into nama_taruna(NIT,NAMA,KELAS,JURUSAN) values ('$NIT','$NAMA', '$KELAS', '$JURUSAN')";
        $q1  = mysqli_query ($db, $sql1);
        if($q1){
            $sukses   =  "Data berhasil dimasukkan"; // kondisi if else diperlukan untuk melakukan suatu aksi.
        }else{
            $error    =  "Data gagal dimasukkan";
        }
    }else{
        $error = "Silahkan masukan data terlebih dahulu";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Taruna</title>
    <link rel="stylesheet" href="../asset/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">

   
<!--- Favicon --->
<link rel="icon" href="icon.log.png" />

<!-- Bootstrap css -->
<link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" id="style"/>

<!--- Icons css --->
<link href="../assets/css/icons.css" rel="stylesheet">

<!--- Style css --->
<link href="../assets/css/style.css" rel="stylesheet">
<link href="../assets/css/plugins.css" rel="stylesheet">

<!--- Animations css --->
<link href="../assets/css/animate.css" rel="stylesheet">
</head>
<body class="d-block">
			 <div>
				<!-- row -->
				<div class="row">
					<div class="col-sm-12 col-md-4 mx-auto mt-3">
						<div class="card custom-card bd-primary bd-5 mx-auto ">
							<div class="card-body text-center bg-danger-transparent">
								<div class="user-lock text-center">
									<img alt="avatar" class="rounded-50" src="FOTO MUKA.jpg">
								</div>
								<h5 class="mb-1 mt-3 card-title tx-16 tx-bold">KURNIAWAN</h5>
								<p class="mb-2 mt-1 tx-inverse">SOFWARE ANGENEERING</p>
								<p class="mb-1"><i class="fe fe-phone me-2"></i>+62 813-9474-0000</p>
								<p class="text-muted text-center mt-1">Lorem Ipsum is not simply random text to popular belief Contrary.</p>
								<div class="justify-content-center text-center mt-3 d-flex">
									<a   href="https://www.facebook.com/kurniawan.soleh.56?mibextid=ZbWKwL" class="btn ripple btn-primary btn-icon me-3">
                  								<i class="fab fa-facebook-f"></i>
									</a>
									<a   href="https://instagram.com/wanxyzt?igshid=MzNlNGNkZWQ4Mg" class="btn ripple btn-danger btn-opacity-50 btn-icon me-3">
										 <i class="fab fa-instagram"></i>
                							</a>
									<a   href="https://github.com/Kurniawan1204/Belajar-php.git" class="btn ripple btn-dark btn-icon me-3">
                  							<i class="fab fa-github"></i>
              								 </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
    <div class="p-3">
        <!-- untuk memasukan data -->
<div class="card mt-5 me-3 bg-primary bg-opacity-50 text-white border alt" style="width: 650px;" >
     <div class="card-header bg-warning bg-opacity-75">
     <a href="">Edit Data</a></span> / Form input
       </div> 
    <div class="card-body">
       <?php
       if($error){
        ?>
        <div class="alert alert-danger" role="alert" style="width: 20rem;">
            <?php
                echo $error ?>
        </div>
        <?php        
       } 
       ?>
       <?php
       if($sukses){
            ?>
            <div class="alert alert-success" role="alert" style="width: 20rem;">
                <?php
                    echo $sukses ?>
            </div>
            <?php  
       }
       ?>
       <!-- FORM DATABASE -->
       <form action="" method="POST">
          <div class="mb-3 row">
                <label for="NIT" class="col-sm-2 col-form-label">NIT :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="NIT" name="NIT" value="<?php echo $NIT ?>">
            </div>    
         </div>
         <div class="mb-3 row">
                <label for="NAMA" class="col-sm-2 col-form-label">NAMA :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="NAMA" name="NAMA" value="<?php echo $NAMA ?>">
            </div>    
         </div>
        <div class="mb-3 row">
                <label for="KELAS" class="col-sm-2 col-form-label">KELAS :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="KELAS" name="KELAS" value="<?php echo $KELAS ?>">
            </div>
          </div>
            <div class="mb-3 row">
                <label for="JURUSAN" class="col-sm-2 col-form-label">JURUSAN :</label>
            <div class="col-sm-10  ">
               <select class="form-control" name="JURUSAN" id="JURUSAN" class="text-white">
                        <option value="" class="text-primary"> JURUSAN </option>
                        <option value="RPL"
                         <?php
                            if($JURUSAN == "RPL") echo "selected"
                        ?>>RPL</option>
                        <option value="TITL"
                         <?php
                            if($JURUSAN == "TITL") echo "selected"
                        ?>>TITL</option>
                        <option value="NKPI"
                         <?php
                            if($JURUSAN == "NKPI") echo "selected"
                        ?>>NKPI</option>
                        <option value="ATPH"
                         <?php
                            if($JURUSAN == "ATPH") echo "selected"
                        ?>>ATPH</option>
                     </select>
               </div>           
           </div>  
         <div class="col-12">
            <input type="submit" name="simpan" class="btn btn-dark">
        </div>
            </form> 
            <!-- END FORM DATA -->
    </div>       
    </div>
</div>
</body>
</html>
