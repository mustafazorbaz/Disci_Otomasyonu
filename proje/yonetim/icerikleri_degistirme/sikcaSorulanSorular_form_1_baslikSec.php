<form name="form1" method="post" action="<?php echo "sikcaSorulanSorular2.php";?>">
  <p class="yazi">Başlık 
    <select class="cmb" name="baslik" id="baslik">
      <?php include"sikcaSorulanSorular_combobox_doldur.php"; ?>
    
    </select>

    <input class="btn" type="submit" name="sec" id="sec" value="Sec" />
  </p>

</form>
<form action="sikcaSorulanSorular_form_alan_ekle_islem.php" method="post">
<br/><br/><br/>
  <input class="btn" type="submit" name="ekle" id="ekle" value="Alan Ekle" />
</form>