<form name="form1" method="post" action="<?php echo "kategoriler2.php";?>">
  <p class="yazi">
   
  Başlık
    <select class="cmb" name="baslik" id="baslik">
      <?php include"kategoriler_combobox_doldur.php"; ?>
    
    </select>

    <input class="btn" type="submit" name="sec" id="sec" value="Sec" />
  </p>

</form>
