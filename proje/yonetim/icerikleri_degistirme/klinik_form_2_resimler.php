<?php include"../baglantiDB.php";  ?>
<form name="form1" method="post" action="<?php echo "klinik2.php";?>">
  <p>
    <label for="icerik"></label>
    <input class="btn" type="submit" name="kaydet" id="kaydet" value="Kaydet">
  </p>
  <p class="yazi"> id</p>
  <p>
  <input name="id" type="text" class="txt"  id="id" value="<?php
     
	 $id=$_POST["id"];
    	$sorgu=mysql_query("SELECT  distinct  * FROM klinik WHERE id='$id'");
    while ($satir=mysql_fetch_array($sorgu))
    {
    	echo "".$satir["id"];
    }  
    ?>" size="10" readonly="readonly"/>
  </p>
  <p class="yazi"> 
    Resim 1</p>
  <p>
    <input name="resim1" type="text"
    <input name="resim4" type="text"   style="height: 20px;
	width: 400px;
	font-size: 20px;
	font-weight: bold;" id="resim1"
     value="<?php
     
	 $id=$_POST["id"];
    	$sorgu=mysql_query("SELECT  distinct  * FROM klinik WHERE id='$id'");
    while ($satir=mysql_fetch_array($sorgu))
    {
    	echo "".$satir["resim1"];
    }  
    ?>" size="100"
     />
  </p>
  <p class="yazi">Resim 2</p>
  <p>
    <input name="resim2" type="text"   
    <input name="resim4" type="text"   style="height: 20px;
	width: 400px;
	font-size: 20px;
	font-weight: bold;" id="resim2"
     value="<?php
     
	 $id=$_POST["id"];
    	$sorgu=mysql_query("SELECT  distinct  * FROM klinik WHERE id='$id'");
    while ($satir=mysql_fetch_array($sorgu))
    {
    	echo "".$satir["resim2"];
    }  
    ?>" size="100"
     />
</p>
  <p class="yazi">Resim 3</p>
  <p>
    <input name="resim3" type="text"   
    <input name="resim4" type="text"   style="height: 20px;
	width: 400px;
	font-size: 20px;
	font-weight: bold;" id="resim3"
     value="<?php
     
	 $id=$_POST["id"];
    	$sorgu=mysql_query("SELECT  distinct  * FROM klinik WHERE id='$id'");
    while ($satir=mysql_fetch_array($sorgu))
    {
    	echo "".$satir["resim3"];
    }  
    ?>" size="100"
     />
  </p>
  <p class="yazi">Resim4</p>
  <p>
    <input name="resim4" type="text"   style="height: 20px;
	width: 400px;
	font-size: 20px;
	font-weight: bold;" id="resim4"
     value="<?php
     
	 $id=$_POST["id"];
    	$sorgu=mysql_query("SELECT  distinct  * FROM klinik WHERE id='$id'");
    while ($satir=mysql_fetch_array($sorgu))
    {
    	echo "".$satir["resim3"];
    }  
    ?>" size="100"
     />
  </p>
  <p>&nbsp; </p>
  <p>&nbsp;</p>
</form>
