<?php include 'header.php'; ?>
<body>
    <section>
        <div class="container w-25 mx-auto">
            <form action="islem.php" method="POST">
                <div class="w-100 mb-3 bg-danger text-white rounded-2">
                    <span>Veri Tabanı Kayıt</span>
                </div>
                <div class="w-100 mb-3">
                    <input type="text" name="bilgilerim_ad" class="form-control border border-info" placeholder="Adınızı Giriniz" required="">
                </div>
                <div class="w-100 mb-3">
                <input type="text" name="bilgilerim_soyad" class="form-control border border-info" placeholder="Soyadınızı Giriniz" required="">
                </div>
                <div class="w-100 mb-3">
                <input type="email" name="bilgilerim_mail" class="form-control border border-info" placeholder="Mail Giriniz" required="">
                </div>
                <div class="w-100 mb-3">
                <input type="text" name="bilgilerim_yas" class="form-control border border-info" placeholder="Yaş Giriniz" required="">
                </div>
                </div>
                <div class="w-25 girisyap">
                    <button type="submit" name="insertislemi" class="btn btn-outline-danger">Kayıt Ekle</button>
                </div>
            </form>
        </div>
    </section>
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