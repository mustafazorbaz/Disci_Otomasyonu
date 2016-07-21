<?php

include 'baglantiDB.php';
$renklendirme=0;
echo "<table border='0' width='1000' >
    <tr  style='background-color:#252525; color:#FFF;'>
   <td><h2><b><center>İD      </center></b></h2></td>
   <td><h2><b><center>TC      </center></b></h2></td>
   <td><h2><b><center>İSİM    </center></b></h2></td>
   <td><h2><b><center>SOYİSİM </center></b></h2></td>
   <td><h2><b><center>TELEFON </center></b></h2></td>
   <td><h2><b><center>R. TARİHİ</center></b></h2></td>
   <td><h2><b><center>SAAT     </center></b></h2></td>
   <td><h2><b><center>E-POSTA  </center></b></h2></td>
  </tr>
";

$sorgu="SELECT * FROM randevular  ORDER BY tarih  DESC ";
if ($sonuc=mysql_query($sorgu)) 
{
	while($satir=mysql_fetch_array($sonuc))
	{


	 

		$id=$satir["id"];
        include "tablo_renklendirme.php";
		echo "<tr bgcolor='$renk'>
                <td>".$satir["id"]."</td>
                <td>".$satir["tc"]."</td>
                <td>".$satir["ad"]."</td>
                <td>".$satir["soyad"]."</td>
                <td>".$satir["tel"]."</td>
                <td>".$satir["tarih"]."</td>
                <td>".$satir["saat"]."</td>
                <td>".$satir["eposta"]."</td>
                <td><a href='sil_randevu_form_islemler.php?deger=$id'>Sil</td>
                </tr>";
	}
}

echo "</table>";
?>