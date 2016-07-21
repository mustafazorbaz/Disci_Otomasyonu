<?php include"../baglantiDB.php";  ?>
<form name="form1" method="post" action="<?php echo "tedaviler2.php";?>">
  <p>
    <label for="icerik"></label>
    <input class="btn" type="submit" name="kaydet" id="kaydet" value="Kaydet">
  </p>
  <p class="yazi"> id</p>
  <p>
  <input name="id" type="text" class="txt"  id="id" value="<?php
     
	 $baslik=$_POST["tedaviler"];
    	$sorgu=mysql_query("SELECT  distinct  * FROM tedaviler WHERE baslik='$baslik'");
    while ($satir=mysql_fetch_array($sorgu))
    {
    	echo "".$satir["id"];
    }  
    ?>" size="10" readonly="readonly"/>
  </p>
  <p class="yazi"> 
    Başlık  </p>
  <p>
    <input name="baslik" type="text"  class="txt" id="baslik"
     value="<?php
     
	 $baslik=$_POST["tedaviler"];
    	$sorgu=mysql_query("SELECT  distinct  * FROM tedaviler WHERE baslik='$baslik'");
    while ($satir=mysql_fetch_array($sorgu))
    {
    	echo "".$satir["baslik"];
    }  
    ?>" size="100"
     />
  </p>
  <p class="yazi"> Url:</p>
  <p>
    <input name="url" type="text" id="url"  style="font-weight:bold;" 
     value="<?php
     
	 $baslik=$_POST["tedaviler"];
    	$sorgu=mysql_query("SELECT  distinct  * FROM tedaviler WHERE baslik='$baslik'");
    while ($satir=mysql_fetch_array($sorgu))
    {
    	echo "".$satir["url"];
    }  
    ?>" size="100"
     />
  </p>
  <p class="yazi"> İçerik</p>
  <p>
    <textarea style="font-weight: bold;" name="icerik" id="icerik" cols="130" rows="20"><?php
     
	 $baslik=$_POST["tedaviler"];
    	$sorgu=mysql_query("SELECT * FROM tedaviler WHERE baslik='$baslik'");
    while ($satir=mysql_fetch_array($sorgu))
    {
    	echo "".$satir["icerik"];
    }  
    ?></textarea>
  </p>
  <p>&nbsp;</p>
</form>
