<?php include"../baglantiDB.php";  ?>
<form name="form1" method="post" action="<?php echo "sikcaSorulanSorular2.php";?>">
  <p>
   
    <input class="btn" type="submit" name="kaydet" id="kaydet" value="Kaydet">
  </p>
  <p class="yazi"> id</p>
  <p>
  <input name="id" type="text" class="txt"  id="id" value="<?php
     
	 $baslik=$_POST["baslik"];
    	$sorgu=mysql_query("SELECT  distinct  * FROM sikcaSorulanSorular WHERE baslik='$baslik'");
    while ($satir=mysql_fetch_array($sorgu))
    {
    	echo "".$satir["id"];
    }  
    ?>" size="10" readonly="readonly"/>
  </p>
  <p>&nbsp;</p>
  <p class="yazi">Başlık</p>
  <p>
    <input name="baslik" type="text"  id="baslik" style="height: 20px;
	width: 550px;
	font-size: 20px;
	font-weight: bold;"
     value="<?php
     
	  $baslik=$_POST["baslik"];
    	$sorgu=mysql_query("SELECT  distinct  * FROM sikcaSorulanSorular WHERE baslik='$baslik'");
    while ($satir=mysql_fetch_array($sorgu))
    {
    	echo "".$satir["baslik"];
    }  
    ?>" size="200"
     />
  </p>
  <p>&nbsp;</p>
  <p class="yazi">İçerik</p>
  <p>
    <textarea name="icerik" id="icerik" cols="130" rows="20"><?php
     
	  $baslik=$_POST["baslik"];
    	$sorgu=mysql_query("SELECT  distinct  * FROM sikcaSorulanSorular WHERE baslik='$baslik'");
    while ($satir=mysql_fetch_array($sorgu))
    {
    	echo "".$satir["icerik"];
    }  
    ?></textarea>
  </p>
  <p>&nbsp; </p>
  <p>&nbsp;</p>
</form>
