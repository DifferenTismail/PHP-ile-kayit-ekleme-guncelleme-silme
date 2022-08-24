<?php include 'header.php'; ?>
<body>
	<?php 

	$bilgilerimsor=$db->prepare("SELECT * from bilgilerim where bilgilerim_id=:id");
	$bilgilerimsor->execute([
		'id' => $_GET['bilgilerim_id']
	]);

	$bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC);

	?>
    <section>
        <div class="container w-25 mx-auto">
            <form action="islem.php" method="POST">
                <div class="w-100 mb-3 bg-danger text-white rounded-2">
                    <span>Kayıt Düzenle</span>
                </div>
                <div class="w-100 mb-3">
                    <input type="text" name="bilgilerim_ad" class="form-control border border-info" value="<?php echo $bilgilerimcek['bilgilerim_ad'] ?>" required="">
                </div>
                <div class="w-100 mb-3">
                <input type="text" name="bilgilerim_soyad" class="form-control border border-info" value="<?php echo $bilgilerimcek['bilgilerim_soyad'] ?>" required="">
                </div>
                <div class="w-100 mb-3">
                <input type="email" name="bilgilerim_mail" class="form-control border border-info" value="<?php echo $bilgilerimcek['bilgilerim_mail'] ?>" required="">
                </div>
                <div class="w-100 mb-3">
                <input type="text" name="bilgilerim_yas" class="form-control border border-info" value="<?php echo $bilgilerimcek['bilgilerim_yas'] ?>" required="">
                </div>
                <div class="w-100 mb-3">
                <input type="hidden" value="<?php echo $bilgilerimcek['bilgilerim_id'] ?>" name="bilgilerim_id">
                </div>
                </div>
                <div class="w-25 girisyap">
                    <button type="submit" name="updateislemi" class="btn btn-outline-danger">Düzenle</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>