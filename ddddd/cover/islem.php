<?php 

session_start();

require_once ("baglan.php");

// session kodları

if (isset($_POST["butongiris"])) 
{
	if ($_POST["kadi"]=="Admin" && $_POST["parola"]=="1234") {


		$_SESSION['kullanici']=$_POST["kadi"];
	Header("Location:index.php");
	}

	else { Header("Location:session.php");}
}


if (isset($_POST['kaydetbtn'])) {
	$kaydet=$db->prepare("INSERT into randevu set
		ad=:a,
		soyad=:b,
		tc=:c,
		telefon=:d
	");
	$insert=$kaydet->execute(array(
		'a'=>$_POST['ad'],
		'b'=>$_POST['soyad'],
		'c'=>$_POST['tc'],	
		'd'=>$_POST['telefon']
	));
	Header("Location: kayitekle.php");
}
	if(isset($_GET["deletebtn"])){
		$sil=$db->prepare("DELETE FROM randevu WHERE randevu_id=:id");
		$sil->execute(array("id"=>$_GET['deletebtn']));
		Header("Location:güncelle.php");
	} 
	 else Header("Location:güncelle.php");
	
	if(isset($_POST["gncbtn"])){
		$gnc=$db->prepare("UPDATE randevu SET WHERE randevu_id=:id");
		$gnc->execute(array("id"=>$_POST['gncbtn']));
		Header("Location:güncelle.php");
	} else Header("Location:güncelle.php");

?>