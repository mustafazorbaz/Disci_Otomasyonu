
<form name="form1" method="post" action="hesap_ekleme_form_islemler.php">
  <table width="1000" border="0">
    
    <tr>
      <td class="yazi">T.C.</td>
      <td>
     
	  
      <select  class='cmb' name='tc' id='tc' >
	  <option value='*'>*</option>
	  <?php  include'hesap_ekleme_combo_tc_cek.php';  ?>
      </select>
     &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;<input class="btn" type="submit" name="doldur" id="doldur" value="Doldur"   formaction="hesap_ekleme.php"/>
      
      </td>
    </tr>
    <tr>
      <td class="yazi">İsim</td>
      <td ><input class="txt" type="text" name="ad" id="ad" value="<?php
	 if(@$_POST["doldur"])
	 {
		 $tc=$_POST["tc"];
		 	$sorgu=mysql_query("SELECT DISTINCT  ad FROM hastalar WHERE tc='$tc' ");
			if($sorgu)
			{
				while ($satir=mysql_fetch_array($sorgu))
				{
					$ad=$satir["ad"];
					echo $ad;
				}
			}
			else
				echo "";
	 }
	   ?>" /></td>
    </tr>
    <tr>
      <td class="yazi">Soyisim</td>
      <td><input class="txt" type="text" name="soyad" id="soyad" value="<?php
	 if(@$_POST["doldur"])
	 {
		 $tc=$_POST["tc"];
		 	$sorgu=mysql_query("SELECT DISTINCT  soyad FROM hastalar WHERE tc='$tc' ");
			if($sorgu)
			{
				while ($satir=mysql_fetch_array($sorgu))
				{
					$soyad=$satir["soyad"];
					echo $soyad;
				}
			}
			else
				echo "";
	 }
	   ?>"
      
      /></td>
    </tr>
    <tr>
      <td class="yazi">Tarih</td>
      <td>
      <input name="tarih" type="date"  class="txt" id="tarih" value="<?php echo date("Y-m-d"); ?>" ></td>
    </tr>
    <tr>
      <td class="yazi">İşlem</td>
      <td>
        <select  class="cmb" name="islem" id="islem" >
         <option value="*">*</option>
		<?php  include"hesap_ekleme_combo_islem_cek.php"; ?>
      </select></td>
    </tr>
    <tr>
      <td class="yazi">Açıklama</td>
      <td><textarea name="aciklama" cols="45" class="txt" id="aciklama"></textarea></td>
    </tr>
    <tr>
      <td class="yazi">Alacaklı</td>
      <td>
      <input  class="txt" type="text" name="alacakli" id="alacakli" value=""></td>
    </tr>
    <tr>
      <td class="yazi">Borçlu</td>
      <td>
      <input  class="txt" type="text" name="borclu" id="borclu" value=""></td>
    </tr>
    <tr> 
      <td colspan="2"> 
      <input class="btn" type="submit" name="ekle" id="ekle" value="İşlem Ekle"></td>
    </tr>
  </table>
</form>
