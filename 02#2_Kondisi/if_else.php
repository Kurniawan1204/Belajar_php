<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KONDISI</title>
    <link rel="stylesheet" href="../asset/bootstrap.min.css">
    <link rel="Stylesheet" href="style.css">

    <!--- Icons css --->
		<link href="../assets/css/icons.css" rel="stylesheet">

</head>
<body class="p-3">

<!-- IDENTITAS -->
<div class="row">
					<div class="col-sm-12 col-md-4 mx-auto ">
						<div class="card custom-card bd-primary bd-5 mx-auto ">
							<div class="card-body text-center bg-danger bg-opacity-10">
								<div class="user-lock text-center">
									<img alt="avatar" class="rounded-circle " src="FOTO MUKA.jpg"  style="width: 100px;">
								</div>
								<h5 class="mb-1 mt-3 card-title tx-16 tx-bold">KURNIAWAN</h5>
								<p class="mb-2 mt-1 tx-inverse">SOFWARE ANGENEERING</p>
								<p class="mb-1 text-danger"><i class="fe fe-phone me-2"></i>+62 813-9474-0078</p>
						
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
<br>
<div class="card border-dark mb-3 mx-auto p-3 mg-t-5 bg-dark bg-opacity-50" style="max-width: 45rem;">
  <div class="card-header fs-4"><strong>Kondisi</strong></div>
  <div class="card-body text-light">
    <h5 class="card-title">Kondisi</h5>
    <li>Else</li>
    <li>if</li>
    <li>elseif</li>
    <li>switch</li>
    <li>Loop</li>
    <li>For</li>


    <strong>Contoh :</strong>
    <br>
    <!-- IF adalah salah satu pernyataan penyeleksian yang memungkinkan kita memanipulasi aliran jalannya program berdasarkan conditional expression.  -->
    <!-- else adalah pilihan terakhir yang akan dijalankan jika semua pilihan tidak memiliki nilai benar (true) pada kondisi yang ada. else merupakan pernyataan opsional untuk digunakan berdasarkan kebutuhan, jika tidak menggunakan pernyataan else maka keseluruhan dari pernyataan if akan diabaikan. -->
    <!-- else if adalah pilihan alternative dari penyeleksian untuk mencari kondisi yang diinginkan, else if memiliki fungsi yang sama seperti pernyataan if dan diletakan setelah pernyataan if. -->
<?php 
//if ,else dan elseif
$teman = "andi";
if($teman == "budi"){
	echo "dia adalah teman saya";     //jika kondisi terpenuhi
}elseif($teman == "andi"){       // Elseif digunakan untuk memeriksa jika kondisi pertama(if) tidak terpenuhi
	echo "Andi adalah teman saya" . "<br>";
}else{
	echo "saya tidak punya teman";     //jika kondisi tidak terpenuhi

}

# Switch
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!" . "<br>";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}


$x = 1;

do {
  echo "Angkanya adalah: $x <br>";
      $x++;
} while ($x <= 15);

$i = 1;
while ($i < 6) {
  echo $i;
  $i++;
}
?>
</div>
</div>
</div>
</body>
</html>