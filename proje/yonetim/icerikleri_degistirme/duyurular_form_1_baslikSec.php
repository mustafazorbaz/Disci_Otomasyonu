<form name="form1" method="post" action="<?php echo "duyurular2.php";?>">
  <p class="yazi">
   
  Başlık
    <select class="cmb" name="baslik" id="baslik">
      <?php include"duyurular_combobox_doldur.php"; ?>
    
    </select>

    <input class="btn" type="submit" name="sec" id="sec" value="Sec" />
  </p>

</form>
<p>&nbsp;</p>
<form action="duyurular_form_alan_ekle.php" method="post">
<br/><br/><br/>
  <input class="btn" type="submit" name="ekle" id="ekle" value="Alan Ekle" />
</form>