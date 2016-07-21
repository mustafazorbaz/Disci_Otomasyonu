<?php
include"../baglantiDB.php";
$sec=$_POST["sec"];
$arama=$_POST["arama"];



echo "<table border='0' width='1000' >
 <tr  style='background-color:#252525; color:#FFF;'>
<td><h2><b><center>İD      </center></b></h2></td>
<td><h2><b><center>TC      </center></b></h2></td>
<td><h2><b><center>İSİM    </center></b></h2></td>
<td><h2><b><center>SOYİSİM </center></b></h2></td>
<td><h2><b><center>TARİH </center></b></h2></td>
<td><h2><b><center>İSLEM</center></b></h2></td>
<td><h2><b><center>AÇIKLAMA     </center></b></h2></td>
<td><h2><b><center>ALACAKLI  </center></b></h2></td>
<td><h2><b><center>BORÇLU     </center></b></h2></td>
<td><h2><b><center>BAKİYE  </center></b></h2></td>
</tr>
";
$renklendirme=0;

			

if (($sec=="tumu")) 
{

		$sorgutumu=mysql_query("SELECT * FROM hesapcari ORDER BY id DESC");
		if ($sorgutumu)
		{
			while ($satirtumu=mysql_fetch_array($sorgutumu)) 
					{
						    $borclu=$satirtumu["borclu"];
							$alacakli=$satirtumu["alacakli"];
							$id=$satirtumu["id"];
							$bakiye=$satirtumu["bakiye"];
							$renk2=bakiyeRenklendirme($alacakli,$borclu);
							include "../tablo_renklendirme.php";
							echo "<tr bgcolor='$renk'>
				                <td>".$satirtumu["id"]."</td>
				                <td>".$satirtumu["tc"]."</td>
				                <td>".$satirtumu["ad"]."</td>
				                <td>".$satirtumu["soyad"]."</td>
				                <td>".$satirtumu["tarih"]."</td>
				                <td>".$satirtumu["islem"]."</td>
				                <td>".$satirtumu["aciklama"]."</td>
				                <td>".$satirtumu["alacakli"]."</td>
				                <td>".$satirtumu["borclu"]."</td>
				                <td bgcolor='$renk2'>".$satirtumu["bakiye"]."</td>
				                <td><a href='hesap_silme_form_islemler.php?deger=$id'>Sil</td>
				                <td><a href='hesap_duzenle.php?duzenle=$id' style='color:red'>Düzenle</td>
				                </tr>";
						
				
				$sec="";
			}
		}

}
else
{

			
			



			if ($sec=="id")
			{

				$sorguaramaid="SELECT * FROM hesapcari WHERE id='$arama' ";
				if($sonucaramaid=mysql_query($sorguaramaid)) 
				{
					
						while($satiraramaid=mysql_fetch_array($sonucaramaid))
						{
								$borclu=$satiraramaid["borclu"];
								$alacakli=$satiraramaid["alacakli"];
								$id=$satiraramaid["id"];
								$bakiye=$satiraramaid["bakiye"];
								$renk2=bakiyeRenklendirme($alacakli,$borclu);
								include "../tablo_renklendirme.php";
								echo "<tr bgcolor='$renk'>
				                <td>".$satiraramaid["id"]."</td>
				                <td>".$satiraramaid["tc"]."</td>
				                <td>".$satiraramaid["ad"]."</td>
				                <td>".$satiraramaid["soyad"]."</td>
				                <td>".$satiraramaid["tarih"]."</td>
				                <td>".$satiraramaid["islem"]."</td>
				                <td>".$satiraramaid["aciklama"]."</td>
				                <td>".$satiraramaid["alacakli"]."</td>
				                <td>".$satiraramaid["borclu"]."</td>
				                <td bgcolor='$renk2'>".$satiraramaid["bakiye"]."</td>
				                <td><a href='hesap_silme_form_islemler.php?deger=$id'>Sil</td>
				                 <td><a href='hesap_duzenle.php?duzenle=$id' style='color:red'>Düzenle</td>
				                </tr>";
						}
				}
				$sec="";
			}

			if($sec=="tc")
			{
				$sorguaramatc="SELECT  * FROM hesapcari WHERE tc='$arama' ORDER BY id DESC ";

				if($sonucaramatc=mysql_query($sorguaramatc)) 
				{
					
						while($satiraramatc=mysql_fetch_array($sonucaramatc))
						{
								
								$borclu=$satiraramatc["borclu"];
								$alacakli=$satiraramatc["alacakli"];
								$id=$satiraramatc["id"];
								$bakiye=$satiraramatc["bakiye"];
								$renk2=bakiyeRenklendirme($alacakli,$borclu);
								include "../tablo_renklendirme.php";
								echo "<tr bgcolor='$renk'>
				                <td>".$satiraramatc["id"]."</td>
				                <td>".$satiraramatc["tc"]."</td>
				                <td>".$satiraramatc["ad"]."</td>
				                <td>".$satiraramatc["soyad"]."</td>
				                <td>".$satiraramatc["tarih"]."</td>
				                <td>".$satiraramatc["islem"]."</td>
				                <td>".$satiraramatc["aciklama"]."</td>
				                <td>".$satiraramatc["alacakli"]."</td>
				                <td>".$satiraramatc["borclu"]."</td>
				                <td bgcolor='$renk2'>".$satiraramatc["bakiye"]."</td>
				                <td><a href='hesap_silme_form_islemler.php?deger=$id'>Sil</td>
				                <td><a href='hesap_duzenle.php?duzenle=$id' style='color:red'>Düzenle</td>
				                </tr>";
					
							
						}
				}
				else
					echo "Yanlış sorgu";
			}

			if($sec=="isim")
			{
				$sorguaramaisim="SELECT  * FROM hesapcari WHERE ad='$arama' ORDER BY id DESC   ";

				if($sonucaramaisim=mysql_query($sorguaramaisim)) 
				{
					
						while($satiraramaisim=mysql_fetch_array($sonucaramaisim))
						{
								$borclu=$satiraramaisim["borclu"];
								$alacakli=$satiraramaisim["alacakli"];
								$id=$satiraramaisim["id"];
								$bakiye=$satiraramaisim["bakiye"];
								$renk2=bakiyeRenklendirme($alacakli,$borclu);
								include "../tablo_renklendirme.php";
								echo "<tr bgcolor='$renk'>			
				                <td>".$satiraramaisim["id"]."</td>
				                <td>".$satiraramaisim["tc"]."</td>
				                <td>".$satiraramaisim["ad"]."</td>
				                <td>".$satiraramaisim["soyad"]."</td>
				                <td>".$satiraramaisim["tarih"]."</td>
				                <td>".$satiraramaisim["islem"]."</td>
				                <td>".$satiraramaisim["aciklama"]."</td>
				                <td>".$satiraramaisim["alacakli"]."</td>
				                <td>".$satiraramaisim["borclu"]."</td>
				                <td  bgcolor='$renk2'>".$satiraramaisim["bakiye"]."</td>
				                <td><a href='hesap_silme_form_islemler.php?deger=$id'>Sil</td>
				              <td><a href='hesap_duzenle.php?duzenle=$id' style='color:red'>Düzenle</td>
				                </tr>";
							
						}
				}
				else
					echo "Yanlış sorgu";
			}

			if($sec=="soyisim")
			{
				$sorguaramasoyisim="SELECT * FROM hesapcari WHERE soyad='$arama' ORDER BY id DESC  ";

				if($sonucaramasoyisim=mysql_query($sorguaramasoyisim)) 
				{
					
						while($satiraramasoyisim=mysql_fetch_array($sonucaramasoyisim))
						{
								$borclu=$satiraramasoyisim["borclu"];
								$alacakli=$satiraramasoyisim["alacakli"];
								$id=$satiraramasoyisim["id"];
								$bakiye=$satiraramasoyisim["bakiye"];
								$renk2=bakiyeRenklendirme($alacakli,$borclu);
								include "../tablo_renklendirme.php";
								echo "<tr bgcolor='$renk'>
				                <td>".$satiraramasoyisim["id"]."</td>
				                <td>".$satiraramasoyisim["tc"]."</td>
				                <td>".$satiraramasoyisim["ad"]."</td>
				                <td>".$satiraramasoyisim["soyad"]."</td>
				                <td>".$satiraramasoyisim["tarih"]."</td>
				                <td>".$satiraramasoyisim["islem"]."</td>
				                <td>".$satiraramasoyisim["aciklama"]."</td>
				                <td>".$satiraramasoyisim["alacakli"]."</td>
				                <td>".$satiraramasoyisim["borclu"]."</td>
				                <td bgcolor='$renk2'>".$satiraramasoyisim["bakiye"]."</td>
				                <td><a href='hesap_silme_form_islemler.php?deger=$id'>Sil</td>
				                 <td><a href='hesap_duzenle.php?duzenle=$id' style='color:red'>Düzenle</td>
				                </tr>";
							
						}
				}
				else
					echo "Yanlış sorgu";
			}

			if($sec=="tarih")
			{
				$sorguaramatarih="SELECT  * FROM hesapcari WHERE tarih='$arama' ORDER BY id DESC  ";

				if($sonucaramatarih=mysql_query($sorguaramatarih)) 
				{
					
						while($satiraramatarih=mysql_fetch_array($sonucaramatarih))
						{	
						
								$borclu=$satiraramatarih["borclu"];
								$alacakli=$satiraramatarih["alacakli"];	
								$id=$satiraramatarih["id"];
								$bakiye=$satiraramatarih["bakiye"];
								$renk2=bakiyeRenklendirme($alacakli,$borclu);
								include "../tablo_renklendirme.php";
								echo "<tr bgcolor='$renk'>
				                <td>".$satiraramatarih["id"]."</td>
				                <td>".$satiraramatarih["tc"]."</td>
				                <td>".$satiraramatarih["ad"]."</td>
				                <td>".$satiraramatarih["soyad"]."</td>
				                <td>".$satiraramatarih["tarih"]."</td>
				                <td>".$satiraramatarih["islem"]."</td>
				                <td>".$satiraramatarih["aciklama"]."</td>
				                <td>".$satiraramatarih["alacakli"]."</td>
				                <td>".$satiraramatarih["borclu"]."</td>
				                <td bgcolor='$renk2'>".$satiraramatarih["bakiye"]."</td>
				                <td><a href='hesap_silme_form_islemler.php?deger=$id'>Sil</td>
				               <td><a href='hesap_duzenle.php?duzenle=$id' style='color:red'>Düzenle</td> 
				                </tr>";
							
						}
				}
				else
					echo "Yanlış sorgu";
			}
			
			
			







}

echo "</table>";

function bakiyeRenklendirme($alacak,$borc)
{
	$sonuc=$alacak-$borc;
	if($sonuc>0)
	{
	 return "C0C0FE";			
	}
	if($sonuc<0)
	{
	 return "#F00";
	}
}
?>
