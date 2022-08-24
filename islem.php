<?php 

require_once 'baglan.php';


if (isset($_POST['insertislemi'])) {
	
	

	$kaydet=$db->prepare("INSERT into bilgilerim set
	
		bilgilerim_ad=:bilgilerim_ad,
		bilgilerim_soyad=:bilgilerim_soyad,
		bilgilerim_mail=:bilgilerim_mail,
		bilgilerim_yas=:bilgilerim_yas
		");

	$insert=$kaydet->execute([

		'bilgilerim_ad' => $_POST['bilgilerim_ad'],
		'bilgilerim_soyad' => $_POST['bilgilerim_soyad'],
		'bilgilerim_mail' => $_POST['bilgilerim_mail'],
		'bilgilerim_yas' => $_POST['bilgilerim_yas']
	]);

	

	if ($insert) {
		
		//echo "kayıt başarılı";

		Header("Location:index.php?durum=ok");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:index.php?durum=no");
		exit;
	}



}


if (isset($_POST['updateislemi'])) {
	
	$bilgilerim_id=$_POST['bilgilerim_id'];

	$kaydet=$db->prepare("UPDATE bilgilerim set
		bilgilerim_ad=:bilgilerim_ad,
		bilgilerim_soyad=:bilgilerim_soyad,
		bilgilerim_mail=:bilgilerim_mail,
		bilgilerim_yas=:bilgilerim_yas
		where bilgilerim_id={$_POST['bilgilerim_id']}
		");

	$insert=$kaydet->execute([

		'bilgilerim_ad' => $_POST['bilgilerim_ad'],
		'bilgilerim_soyad' => $_POST['bilgilerim_soyad'],
		'bilgilerim_mail' => $_POST['bilgilerim_mail'],
		'bilgilerim_yas' => $_POST['bilgilerim_yas']
	]);

	

	if ($insert) {
		
		//echo "kayıt başarılı";

		Header("Location:index.php?durum=ok&bilgilerim_id=$bilgilerim_id");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:duzenle.php?durumno&bilgilerim_id=$bilgilerim_id");
		exit;
	}



}

if ($_GET['bilgilerimsil']=="ok") {
	

	$sil=$db->prepare("DELETE from bilgilerim where bilgilerim_id=:id");
	$kontrol=$sil->execute([
		'id' => $_GET['bilgilerim_id']
	]);

	if ($kontrol) {
		
		//echo "kayıt başarılı";

		Header("Location:index.php?durum=ok");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:index.php?durum=no");
		exit;
	}


}

?>