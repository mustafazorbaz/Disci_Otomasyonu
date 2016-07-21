<form name="form1" method="post" action="<?php echo "tedaviler2.php";?>">
  <p>
    <label for="icerik"></label>
    <select class="cmb" name="tedaviler" id="tedaviler">
      <?php include"tedaviler_combobox_doldur.php"; ?>
    </select>
    <input class="btn" type="submit" name="sec" id="sec" value="Sec" />
  </p>
  <p>
    <label for="tedaviler"></label>
  </p>
</form>
