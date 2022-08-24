<?php require_once 'baglan.php'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Kayıt Listeleme</title>
</head>
<body>
<form action="islem.php" method="form">
    <input type="text" required="" name="bilgilerim_ad" placeholder="Adınızı Giriniz...">
	<input type="text" required="" name="bilgilerim_soyad" placeholder="Soyadınızı Giriniz...">
	<input type="email" required="" name="bilgilerim_mail" placeholder="Mail Giriniz...">
	<input type="text" required="" name="bilgilerim_yas" placeholder="Yaş Giriniz...">
	<button type="submit" name="insertislemi">Formu Gönder</button>
</form>
<?php 

$bilgilerimsor=$db->prepare("SELECT * from bilgilerim");
$bilgilerimsor->execute();
$say=0;
while($bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)) { $say++?>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Id</th>
      <th scope="col">Ad</th>
      <th scope="col">Soyad</th>
      <th scope="col">Mail</th>
      <th scope="col">Yaş</th>
      <th scope="col">İşlemler</th>
      <th scope="col">İşlemler</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $say; ?></th>
      <td><?php echo $bilgilerimcek['bilgilerim_id'] ?></td>
	  <td><?php echo $bilgilerimcek['bilgilerim_ad'] ?></td>
 	  <td><?php echo $bilgilerimcek['bilgilerim_soyad'] ?></td>
      <td><?php echo $bilgilerimcek['bilgilerim_mail'] ?></td>
      <td><?php echo $bilgilerimcek['bilgilerim_yas'] ?></td>
	  <td align="center"><a href="duzenle.php?bilgilerim_id=<?php echo $bilgilerimcek['bilgilerim_id'] ?>"><button>Düzenle</button></td></a>
	  <td align="center"><a href="islem.php?bilgilerim_id=<?php echo $bilgilerimcek['bilgilerim_id'] ?>&bilgilerimsil=ok"><button>Sil</button></td></a>
      
      
    </tr>
  </tbody>
  <?php } ?>
</body>
</html>