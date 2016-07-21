<?php
include "baglantiDB.php";
$renklendirme=0;
if (@$_POST["genisArama"])
{
	$tc=$_POST["tc"];
	$tarih=$_POST["tarih"];
	$saat=$_POST["saat"];

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
		$sorgu=mysql_query("SELECT * FROM randevular WHERE tarih='$tarih'and  tc='$tc' and saat='$saat' ORDER BY id DESC ");
		if ($sorgu)
		{
			while ($satir=mysql_fetch_array($sorgu))
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
		else 
			echo "sorguda  problem oluştu";

		

}
if(@$_POST["ara"])
{
	$sec=$_POST["sec"];
	$arama=$_POST["arama"];


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


			if($sec=="tumu")
			{
				$sorgu=mysql_query("SELECT * FROM randevular ORDER BY id DESC");
				if ($sorgu)
				{
					while ($satir=mysql_fetch_array($sorgu)) 
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
							$sec="";
					}
				}
			}

 
		
			if ($sec=="id")
			{

				$sorguaramaid="SELECT * FROM randevular WHERE id='$arama' ";
				if($sonucaramaid=mysql_query($sorguaramaid)) 
				{
					
						while($satiraramaid=mysql_fetch_array($sonucaramaid))
						{
							
							
								$id=$satiraramaid["id"];
								include "tablo_renklendirme.php";
								echo "<tr bgcolor='$renk'>
						        <td>".$satiraramaid["id"]."</td>
						        <td>".$satiraramaid["tc"]."</td>
						        <td>".$satiraramaid["ad"]."</td>
						        <td>".$satiraramaid["soyad"]."</td>
						        <td>".$satiraramaid["tel"]."</td>
						        <td>".$satiraramaid["tarih"]."</td>
						        <td>".$satiraramaid["saat"]."</td>
						        <td>".$satiraramaid["eposta"]."</td>
						         <td><a href='sil_randevu_form_islemler.php?deger=$id'>Sil</td>
						        </tr>";
								$sec="";
						}
				}
				$sec="";
			}

			if($sec=="tc")
			{
				$sorguaramatc="SELECT  * FROM randevular WHERE tc='$arama' ORDER BY id DESC ";

				if($sonucaramatc=mysql_query($sorguaramatc)) 
				{
					
						while($satiraramatc=mysql_fetch_array($sonucaramatc))
						{
							$id=$satiraramatc["id"];
							include "tablo_renklendirme.php";
							echo "<tr bgcolor='$renk'>
					        <td>".$satiraramatc["id"]."</td>
					        <td>".$satiraramatc["tc"]."</td>
					        <td>".$satiraramatc["ad"]."</td>
					        <td>".$satiraramatc["soyad"]."</td>
					        <td>".$satiraramatc["tel"]."</td>
					        <td>".$satiraramatc["tarih"]."</td>
					        <td>".$satiraramatc["saat"]."</td>
					        <td>".$satiraramatc["eposta"]."</td>
					         <td><a href='sil_randevu_form_islemler.php?deger=$id'>Sil</td>
					        </tr>";
							$sec="";
						
							
						}
				}
				else
					echo "Yanlış sorgu";
			}

			if($sec=="isim")
			{
				$sorguaramaisim="SELECT  * FROM randevular WHERE ad='$arama' ORDER BY id DESC   ";

				if($sonucaramaisim=mysql_query($sorguaramaisim)) 
				{
					
						while($satiraramaisim=mysql_fetch_array($sonucaramaisim))
						{
							
							$id=$satiraramaisim["id"];	
							include "tablo_renklendirme.php";
							echo "<tr bgcolor='$renk'>
					        <td>".$satiraramaisim["id"]."</td>
					        <td>".$satiraramaisim["tc"]."</td>
					        <td>".$satiraramaisim["ad"]."</td>
					        <td>".$satiraramaisim["soyad"]."</td>
					        <td>".$satiraramaisim["tel"]."</td>
					        <td>".$satiraramaisim["tarih"]."</td>
					        <td>".$satiraramaisim["saat"]."</td>
					        <td>".$satiraramaisim["eposta"]."</td>
					         <td><a href='sil_randevu_form_islemler.php?deger=$id'>Sil</td>
					        </tr>";
							$sec="";
							
						}
				}
				else
					echo "Yanlış sorgu";
			}

			if($sec=="soyisim")
			{
				$sorguaramasoyisim="SELECT * FROM randevular WHERE soyad='$arama' ORDER BY id DESC  ";

				if($sonucaramasoyisim=mysql_query($sorguaramasoyisim)) 
				{
					
						while($satiraramasoyisim=mysql_fetch_array($sonucaramasoyisim))
						{
								$id=$satiraramasoyisim["id"];
								include "tablo_renklendirme.php";
								echo "<tr bgcolor='$renk'>
						        <td>".$satiraramasoyisim["id"]."</td>
						        <td>".$satiraramasoyisim["tc"]."</td>
						        <td>".$satiraramasoyisim["ad"]."</td>
						        <td>".$satiraramasoyisim["soyad"]."</td>
						        <td>".$satiraramasoyisim["tel"]."</td>
						        <td>".$satiraramasoyisim["tarih"]."</td>
						        <td>".$satiraramasoyisim["saat"]."</td>
						        <td>".$satiraramasoyisim["eposta"]."</td>
						         <td><a href='sil_randevu_form_islemler.php?deger=$id'>Sil</td>
						        </tr>";
								$sec="";
							
						}
				}
				else
					echo "Yanlış sorgu";
			}
			
			if($sec=="tarih")
			{
				$sorguaramatarih="SELECT  * FROM randevular WHERE tarih='$arama' ORDER BY id DESC  ";

				if($sonucaramatarih=mysql_query($sorguaramatarih)) 
				{
					
						while($satiraramatarih=mysql_fetch_array($sonucaramatarih))
						{
								
								   $id=$satiraramatarih["id"];
									include "tablo_renklendirme.php";
									echo "<tr bgcolor='$renk'>
							        <td>".$satiraramatarih["id"]."</td>
							        <td>".$satiraramatarih["tc"]."</td>
							        <td>".$satiraramatarih["ad"]."</td>
							        <td>".$satiraramatarih["soyad"]."</td>
							        <td>".$satiraramatarih["tel"]."</td>
							        <td>".$satiraramatarih["tarih"]."</td>
							        <td>".$satiraramatarih["saat"]."</td>
							        <td>".$satiraramatarih["eposta"]."</td>
							         <td><a href='sil_randevu_form_islemler.php?deger=$id'>Sil</td>
							        </tr>";
									$sec="";
							
						}
				}
				else
					echo "Yanlış sorgu";
			}
			if($sec=="saat")
			{
				$sorguaramasaat="SELECT  * FROM randevular WHERE saat='$arama' ORDER BY id DESC  ";

				if($sonucaramasaat=mysql_query($sorguaramasaat)) 
				{
					
						while($satiraramasaat=mysql_fetch_array($sonucaramasaat))
						{
								
									$id=$satiraramasaat["id"];
									include "tablo_renklendirme.php";
									echo "<tr bgcolor='$renk'>
							        <td>".$satiraramasaat["id"]."</td>
							        <td>".$satiraramasaat["tc"]."</td>
							        <td>".$satiraramasaat["ad"]."</td>
							        <td>".$satiraramasaat["soyad"]."</td>
							        <td>".$satiraramasaat["tel"]."</td>
							        <td>".$satiraramasaat["tarih"]."</td>
							        <td>".$satiraramasaat["saat"]."</td>
							        <td>".$satiraramasaat["eposta"]."</td>
							        <td><a href='sil_randevu_form_islemler.php?deger=$id'>Sil</td>
							        </tr>";
								$sec="";
							
						}
				}
				else
					echo "Yanlış sorgu";
			}
			







}
echo "</table>";
?>