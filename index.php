<?php  
	include "class.php";
	$sctr = new Sctr();
	$chaesar = new Chaesar();
	$strHasil = "";
	if (isset($_POST['proses'])) {
		$str = $_POST['plain'];
		$k = $_POST['key'];
		$ar = explode(" ", $str);
		$en1 = array();
		foreach ($ar as $key => $value) {
			array_push($en1, $sctr->Enkripsi($value,$k));
		}

		//enkripsi 2
		$en2 = array();
		foreach ($en1 as $key => $value) {
			array_push($en2, $chaesar->Enkripsi($value,$k));
		}
		$strHasil = $en2;
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Kripto</title>

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/costum.css">
	<link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.css">
</head>
<body style="background-color:#A0A0A0;">
<div style="margin-top:40px;">
	<div class="col-md-12" style="padding:0px;">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h6 class="panel-name">Tugas : Aplikasi WEB Caesar Chiper</h6>
			    <h6 class="panel-name">Dosen : Irfan Syamsuddin ST, PG.Dipl.BEC, M.Com.ISM,Ph.D </h6>
			    <h6 class="panel-name">Nama  : Nurhikma Jatmika Muin</h6>
			    <h6 class="panel-name">NIM   : 42517026</h6>
			  </div>
		</div>
	<div class="container">
		<div class="col-md-12" style="padding:0px;">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">CAESAR CHIPER</h3>
			  </div>
			  <div class="panel-body">
				 <form method="post">
				 	<div class="form-group">
				 		<label>Plaintext</label>
				 		<input type="text" class="form-control" name="plain"<?php if(isset($_POST['proses'])){echo "value='".$_POST['plain']."'";} ?> placeholder="Masukan Plain Text" required>
				 	</div>

				 	<div class="form-group">
				 		<label>Key</label>
				 		<input type="number" class="form-control" name="key" placeholder="Masukan Key" required>
				 	</div>
				 	<div class="form-group">
				 		<label>Chiper Text</label>
				 		<input type="text" class="form-control" name="chiper" value="<?php 
				 		if (isset($_POST['proses'])) {
				 		 	foreach ($strHasil as $key => $dt) {
					 			echo $dt." ";
					 		}
				 		 } 
				 		?>" readonly="true">
				 	</div>
				 
			  </div>
			  <div class="panel-footer">
			  	<button class="btn btn-primary" name="proses">Next</button>
			  	<a href="dekripsi.php" class="btn btn-info">Go Dekripsi</a>
			  	</form>
			  </div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>