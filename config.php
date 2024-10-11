<?php


date_default_timezone_set("Asia/Jakarta");
error_reporting(0);

	
	$host 	= 'localhost';
	$user 	= 'root';  
	$pass 	= ''; 
	$Jabatan = 'Jabatan';
	$dbname = 'db_toko';  
	
	
	
	try{
		$config = new PDO("mysql:host=$host;dbname=$dbname;jabatan:$jabatan", $user,$pass,$jabatan);
		//echo 'sukses';
	}catch(PDOException $e){
		echo 'KONEKSI GAGAL' .$e -> getMessage();
	}
	
	$view = 'fungsi/view/view.php'; // direktori fungsi select data
?>

