<form name="form1" method="post" action="<?php echo "iletisim.php";?>">
  <p>
    <label for="icerik"></label>
    <input class="btn" type="submit" name="kaydet" id="kaydet" value="Kaydet">
  </p>
  <p>
    <textarea name="icerik" id="icerik" cols="130" rows="20"><?php
     include"../baglantiDB.php"; 
      $sorgu=mysql_query("SELECT * FROM iletisim WHERE id='1'");
    while ($satir=mysql_fetch_array($sorgu))
    {
      echo "".$satir["icerik"];
    }  
    ?></textarea>
  </p>
</form>
