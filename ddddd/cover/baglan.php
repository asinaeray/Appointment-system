<?php 
	try {
	$db=new PDO("mysql:host=localhost;dbname=randevustm;charset=utf8","root","");
	//echo "Bağlantı başarılı";
	
} catch (Exception $e) {
	//echo "Bağlantı başarısız";
	
}
 ?>