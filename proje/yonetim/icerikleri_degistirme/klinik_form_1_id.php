<form name="form1" method="post" action="<?php echo "klinik2.php";?>">
  <p class="yazi">
   
  İd
    <select class="cmb" name="id" id="id">
      <?php include"klinik_combobox_doldur.php"; ?>
    
    </select>

    <input class="btn" type="submit" name="sec" id="sec" value="Sec" />
  </p>

</form>
<form action="klinik_form_alan_ekle.php" method="post">
<br/><br/><br/>
  <input class="btn" type="submit" name="ekle" id="ekle" value="Alan Ekle" />
</form>