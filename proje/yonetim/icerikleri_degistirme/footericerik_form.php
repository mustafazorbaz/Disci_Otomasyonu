<form name="form1" method="post" action="<?php echo "footeryazi.php";?>">
  <p>
   
    <input class="btn" type="submit" name="kaydet" id="kaydet" value="Kaydet">
  </p>
  <p>
    <textarea name="icerik" id="icerik" cols="130" rows="20"><?php
     include"../baglantiDB.php"; 
    	$sorgu=mysql_query("SELECT * FROM footeryazi WHERE id='1'");
    while ($satir=mysql_fetch_array($sorgu))
    {
    	echo "".$satir["yazi"];
    }  
    ?></textarea>
  </p>
</form>
