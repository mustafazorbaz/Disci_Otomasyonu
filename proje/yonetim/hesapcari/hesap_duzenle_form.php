
<form name="form1" method="post" action=" ">
  <table width="1000" border="0">
    <tr>
      <td width="136" class="yazi">İd</td>
      <td width="848">
      <input name="id" type="text" class="txt" id="id" value="<?php echo $id; ?>" readonly="readonly"></td>
    </tr>
    <tr>
      <td class="yazi">T.C.</td>
      <td>
      <input  class="txt" type="text" name="tc" id="tc" value="<?php echo $tc; ?>"></td>
    </tr>
    <tr>
      <td class="yazi"> İsim</td>
      <td>
      <input  class="txt" type="text" name="ad" id="ad" value="<?php echo $ad; ?>"></td>
    </tr>
    <tr>
      <td class="yazi">Soyisim</td>
      <td>
      <input  class="txt" type="text" name="soyad" id="soyad" value="<?php echo $soyad; ?>"></td>
    </tr>
    <tr>
      <td class="yazi">Tarih</td>
      <td>
      <input  class="txt" type="date" name="tarih" id="tarih" value="<?php echo $tarih; ?>"></td>
    </tr>
    <tr>
      <td class="yazi">İşlem</td>
      <td>
        <select  class="cmb" name="islem" id="islem" ><?php include "hesap_ekleme_combo_islem_cek.php" ?>
      </select></td>
    </tr>
    <tr>
      <td class="yazi">Açıklama</td>
      <td>
      <textarea  class="txt" name="aciklama" id="aciklama" cols="45" rows="5"><?php echo $aciklama; ?></textarea></td>
    </tr>
    <tr>
      <td class="yazi">Alacaklı</td>
      <td>
      <input  class="txt" type="text" name="alacakli" id="alacakli" value="<?php echo $alacakli; ?>"></td>
    </tr>
    <tr>
      <td class="yazi">Borçlu</td>
      <td>
      <input  class="txt" type="text" name="borclu" id="borclu" value="<?php echo $borclu; ?>"></td>
    </tr>
    <tr>
      <td class="yazi">Bakiye</td>
      <td>
      <input  class="txt" type="text" name="bakiye" id="bakiye" value="<?php echo $bakiye; ?>"></td>
    </tr>
    <tr> 
    <td colspan="2"> 
      <input class="btn" type="submit" name="kaydet" id="kaydet" value="Kaydet"></td>
    </tr>
  </table>
</form>
