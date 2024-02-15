<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

		<!-- Title -->
		<title>PHP Strings</title>

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

		<link rel="stylesheet" href="index.css">

	</head>
	<body class="main-body app sidebar-mini ltr mt-3 p-3">

		<!-- Loader -->
		<div id="global-loader">
			<img src="../assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

	   <div>
		<!-- row -->
      <div class="row">
					<div class="col-sm-12 col-md-4 mx-auto ">
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
		<div class="card border-dark mb-3 mx-auto p-3 mg-t-2 bg-dark bg-opacity-50" style="max-width: 50rem;">
  <div class="card-header bg-secondary fs-4"><strong>Tipe data</strong></div>
  <div class="card-body text-white">
	<!--  String adalah tipe data untuk teks yang terdiri dari gabungan huruf, angka, dan berbagai karakter. Fungsi ini digunakan untuk membuat identifier string atau teks. -->
	<div class="main-content-label text-white">Tipe Data String</div>
    <p class="card-text"> Tipe data ini bisa menampung banyak karakter sekaligus. String adalah tipe data untuk teks yang terdiri dari gabungan huruf, angka, dan berbagai karakter. Fungsi ini digunakan untuk membuat identifier string atau teks.</p>
</div>
</div>
		<!-- Strings PHP -->
<div class="d-flex">
<div class="tx-info p-3 card col-sm-12 col-md-2 mx-auto">
	<div class="main-content-label">Output Strings</div>
	<!-- String dalam PHP diapit oleh tanda kutip ganda atau tanda kutip tunggal. -->
	<?php
	echo "Hello";
	print "Hello";

	?>
</div>
		<!-- String kutip Ganda atau tunggal -->
		<div class="tx-info p-3 card col-sm-12 col-md-2 mx-auto">
	<div class="main-content-label">Output Strings</div>
	<!-- Literal string yang dikutip ganda melakukan operasi untuk karakter khusus: -->
	<?php
		$x = "John";
		echo "Hello $x" ."<br>";

		?>
	<!-- Literal string yang dikutip tunggal mengembalikan string sebagaimana adanya: -->
	<!-- String yang dikutip tunggal tidak melakukan tindakan seperti itu, ia mengembalikan string seperti yang tertulis, dengan nama variabel -->
	<?php
	$x = "John";
	echo 'Hello $x';
	?>
</div>
		<div class="tx-info p-3 card col-sm-12 col-md-2 mx-auto">

		<!-- Fungsi PHP strlen()mengembalikan panjang string. -->
		<div class="main-content-label">Output Strings</div>
		<!-- Mengembalikan panjang string "Halo dunia!": -->
	<?php
	echo strlen("Hello world!");
	?> 
</div>
	<div class="tx-info p-3 card col-sm-12 col-md-2 mx-auto">

<!--Fungsi PHP str_word_count()menghitung jumlah kata dalam sebuah string.-->
	<div class="main-content-label">Output Strings</div>
		<!-- Hitung jumlah kata dalam string "Halo dunia!": -->
		<?php
		echo str_word_count("Hello world!");
		?> 
	</div>
	<div class="tx-info p-3 card col-sm-12 col-md-2 mx-auto">

	<!-- Fungsi PHP strpos() mencari teks tertentu dalam sebuah string.
	Jika kecocokan ditemukan, fungsi mengembalikan posisi karakter dari kecocokan pertama. Jika tidak ditemukan kecocokan, maka akan mengembalikan FALSE. -->
	<div class="main-content-label">Output Strings</div>
		<!-- Cari teks "dunia" di baris "Halo dunia!": -->
		<?php
		echo strpos("Hello world!", "world");
		?> 
	</div>
</div>
		<!-- Modify String -->
	<div class="d-flex">
		<!-- Upper Case -->
		<div class="tx-info p-3 card col-sm-12 col-md-2 mx-auto">
		<div class="main-content-label">Output Strings</div>
		<!-- The strtoupper() function returns the string in upper case: -->
		<?php
		$x = "Hello World!";
		echo strtoupper($x);
		?>
		</div>
		<!-- Lower Case -->
		<div class="tx-info p-3 card col-sm-12 col-md-2 mx-auto">
		<div class="main-content-label">Output Strings</div>
		<!-- The strtolower() function returns the string in lower case: -->
		
		<?php
		$x = "Hello World!";
		echo strtolower($x);
		?>
		</div>
				<!--Replace String-->
			<div class="tx-info p-3 card col-sm-12 col-md-2 mx-auto">
		<div class="main-content-label">Output Strings</div>
		<!-- The PHP str_replace() function replaces some characters with some other characters in a string. -->
		<!-- Replace the text "World" with "Dolly": -->
		<?php
		$x = "Hello World!";
		echo str_replace("World", "Dolly", $x);
		?>
		</div>
				<!--Reverse a String-->
		<div class="tx-info p-3 card col-sm-12 col-md-2 mx-auto">
		<div class="main-content-label">Output Strings</div>
		<!-- The PHP strrev() function reverses a string. -->
		<!-- Reverse the string "Hello World!": -->
		<?php
		$x = "Hello World!";
		echo strrev($x);
		?>
		</div>
				
				<!-- Hapus Spasi Putih atau Remove Whitespace -->
		
		<!-- Spasi putih adalah spasi sebelum dan/atau sesudah teks sebenarnya, dan sering kali Anda ingin menghapus spasi ini. -->
			<div class="tx-info p-3 card col-sm-12 col-md-2 mx-auto">
		<div class="main-content-label">Output Strings</div>
		<!-- The trim() removes any whitespace from the beginning or the end: -->	
       <?php
		$x = " Hello World! ";
		echo trim($x);
		?>
		</div>
	</div>
	<div class="d-flex">
		
	 <!-- Ubah String menjadi Array atau Convert String into Array -->
	
		<!-- Fungsi PHP explode()membagi string menjadi array. -->
		<!-- Parameter pertama dari explode()fungsi tersebut mewakili "pemisah". "Pemisah" menentukan tempat untuk membagi string. -->
		<div class="tx-info p-3 card col-sm-6 col-md-2 mx-auto">
		<div class="main-content-label">Output Strings</div>

	<!-- Pisahkan string menjadi sebuah array. Gunakan karakter spasi sebagai pemisah: -->
		<?php
		$x = "Hello World!";
		$y = explode(" ", $x);
		
		//Use the print_r() function to display the result:
		print_r($y);
		
		/*
		Result:
		Array ( [0] => Hello [1] => World! )
		*/
		?>	
			
		</div>
		<!-- Penggabungan String atau String Concatenation -->
		
		<!-- To concatenate, or combine, two strings you can use the . operator:-->
		<div class="tx-info p-3 card col-sm-16 col-md-2 mx-auto">
		<div class="main-content-label">Output Strings</div>
			<?php
			$x = "Hello";
			$y = "World";
			$z = $x . $y;
			echo $z;
			?>
			<!-- Hasil dari contoh di atas adalah HelloWorld, tanpa spasi di antara kedua kata tersebut.-->
		</div>
		
		    <!--  Slicing  -->
		
		<!-- You can return a range of characters by using the substr() function. Specify the start index and the number of characters you want to return. -->
		<div class="tx-info p-3 card col-sm-12 col-md-2 mx-auto">
		<div class="main-content-label">Output Strings</div>
		<?php 

		// Mulai irisan pada indeks 6 dan akhiri irisan 5 posisi kemudian:
		$x = "Hello World!";
		echo substr($x, 6, 5); //Karakter pertama memiliki indeks 0.
		?> 
		</div>
		     <!-- Slice to the End -->
		
		<!--By leaving out the length parameter, the range will go to the end: -->
		<div class="tx-info p-3 card col-sm-12 col-md-2 mx-auto">
		<div class="main-content-label">Output Strings</div>
		
		<?php
			// Start the slice at index 6 and go all the way to the end:
		$x = "Hello World!";
		echo substr($x, 6); //Karakter pertama memiliki indeks 0.
		?> 
		</div>
		<!-- Slice From the End -->
		
		<!-- Use negative indexes to start the slice from the end of the string: -->
		<div class="tx-info p-3 card col-sm-12 col-md-2 mx-auto">
		<div class="main-content-label">Output Strings</div>
		
		<?php
		// Dapatkan 3 karakter, dimulai dari "o" di dunia (indeks -5):
		$x = "Hello World!";
			echo substr($x, -5, 3);
			//Karakter terakhir memiliki indeks 1.
		?> 
		</div>
		
	</div>	
	<!-- Negative Length -->
		<!-- Use negative length to specify how many characters to omit, starting from the end of the string -->
		<div class="tx-info p-3 card col-sm-12 col-md-2 ms-4">
		<div class="main-content-label">Output Strings</div>
		<!-- Get the characters starting from the "W" in "World" (index 5) and continue until 3 characters from the end. Should end up with "Wor": -->
		<?php
		// Dapatkan 3 karakter, dimulai dari "o" di dunia (indeks -5):
		$x = "Hello World!";
			echo substr($x, 5, -3);
			//Karakter terakhir memiliki indeks 1.
		?> 
		</div>
		<!--page closed -->
		<!--- Back-to-top --->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

		<!--- JQuery min js --->
		<script src="../assets/plugins/jquery/jquery.min.js"></script>

		<!--- Datepicker js --->
		<script src="../assets/plugins/jquery-ui/ui/widgets/datepicker.js"></script>

		<!--- Bootstrap Bundle js --->
		<script src="../assets/plugins/bootstrap/popper.min.js"></script>
		<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--- Ionicons js --->
		<script src="../assets/plugins/ionicons/ionicons.js"></script>

		<!--- Moment js --->
		<script src="../assets/plugins/moment/moment.js"></script>

		<!--- JQuery sparkline js --->
		<script src="../assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

		<!--- Select2 js --->
		<script src="../assets/plugins/select2/js/select2.min.js"></script>

		<!--- P-scroll js --->
		<script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="../assets/plugins/perfect-scrollbar/p-scroll.js"></script>

		<!--- Eva-icons js --->
		<script src="../assets/js/eva-icons.min.js"></script>



		<!--- Sidebar js --->
		<script src="../assets/plugins/side-menu/sidemenu.js"></script>

		<!--- sticky js --->
		<script src="../assets/js/sticky.js"></script>

		<!--- Right-sidebar js --->
		<script src="../assets/plugins/sidebar/sidebar.js"></script>
		<script src="../assets/plugins/sidebar/sidebar-custom.js"></script>

		<!--- Index js --->
		<script src="../assets/js/script.js"></script>

		<!--themecolor js-->
		<script src="../assets/js/themecolor.js"></script>

		<!--swither-styles js-->
		<script src="../assets/js/swither-styles.js"></script>

		<!--- Custom js --->
		<script src="../assets/js/custom.js"></script>

	</body>
</html>