<?php
include"../baglantiDB.php";
$sec=@$_POST["sec"];
$arama=@$_POST["arama"];

$renklendirme=0;



				echo "<table border='0' width='1000' >
   				 <tr  style='background-color:#252525; color:#FFF;'>
				   <td><h2><b><center>İd</center></b></h2></td>
				   <td><h2><b><center>T.c.</center></b></h2></td>
				   <td><h2><b><center>İsim    </center></b></h2></td>
				   <td><h2><b><center> Soyisim </center></b></h2></td>
				   <td><h2><b><center>E-Mail </center></b></h2></td>
				   <td><h2><b><center>Adres</center></b></h2></td>
				   <td><h2><b><center>Telefon     </center></b></h2></td>
				   <td><h2><b><center>Kayıt T.  </center></b></h2></td>
				   <td><h2><b><center>Doğum Y.     </center></b></h2></td>
				   <td><h2><b><center>Doğum T.     </center></b></h2></td>
				   <td><h2><b><center> İl  </center></b></h2></td>
				  </tr>
				";

if (($sec=="tumu")) 
{

	$sorguarama="SELECT  * FROM hastalar  ORDER BY id DESC ";

				if($sonucarama=mysql_query($sorguarama)) 
				{
					
						while($satirarama=mysql_fetch_array($sonucarama))
						{
								$id=$satirarama["id"];
								include "tablo_renklendirme.php";
								echo "<tr bgcolor='".$renk."'>
				                <td>".$satirarama["id"]."</td>
				                <td>".$satirarama["tc"]."</td>
				                <td>".$satirarama["ad"]."</td>
				                <td>".$satirarama["soyad"]."</td>
				                <td>".$satirarama["email"]."</td>
				                <td>".$satirarama["adres"]."</td>
				                <td>".$satirarama["telefon"]."</td>
				                <td>".$satirarama["k_tarih"]."</td>
				                <td>".$satirarama["d_yeri"]."</td>
				                <td>".$satirarama["d_tarih"]."</td>
				                <td>".$satirarama["il"]."</td>
				                <td><a href='hasta_silme_form_islemler.php?deger=$id'>Sil</td>
				                <td><a href='hasta_duzenle.php?duzenle=$id' style='color:red'>Düzenle</td>
				                </tr>";
							 	
							
						}
				}
				else
					echo "Yanlış sorgu";


}
else
{


			if ($sec=="id")
			{

				$sorguaramaid="SELECT * FROM hastalar WHERE id='$arama' ";
				if($sonucaramaid=mysql_query($sorguaramaid)) 
				{
					
						while($satiraramaid=mysql_fetch_array($sonucaramaid))
						{
							
							$id=$satiraramaid["id"];
							include "tablo_renklendirme.php";
						echo "<tr bgcolor='".$renk."'>
				                <td>".$satiraramaid["id"]."</td>
				                <td>".$satiraramaid["tc"]."</td>
				                <td>".$satiraramaid["ad"]."</td>
				                <td>".$satiraramaid["soyad"]."</td>
				                <td>".$satiraramaid["email"]."</td>
				                <td>".$satiraramaid["adres"]."</td>
				                <td>".$satiraramaid["telefon"]."</td>
				                <td>".$satiraramaid["k_tarih"]."</td>
				                <td>".$satiraramaid["d_yeri"]."</td>
				                <td>".$satiraramaid["d_tarih"]."</td>
				                <td>".$satiraramaid["il"]."</td>
				                <td><a href='hasta_silme_form_islemler.php?deger=$id'>Sil</td>
				                <td><a href='hasta_duzenle.php?duzenle=$id' style='color:red'>Düzenle</td>
				                </tr>";
						}
				}
				$sec="";
			}

			if($sec=="tc")
			{
				$sorguaramatc="SELECT  * FROM hastalar WHERE tc='$arama' ORDER BY id DESC ";

				if($sonucaramatc=mysql_query($sorguaramatc)) 
				{
					
						while($satiraramatc=mysql_fetch_array($sonucaramatc))
						{
								$id=$satiraramatc["id"];
								include "tablo_renklendirme.php";
								echo "<tr bgcolor='".$renk."'>
				                <td>".$satiraramatc["id"]."</td>
				                <td>".$satiraramatc["tc"]."</td>
				                <td>".$satiraramatc["ad"]."</td>
				                <td>".$satiraramatc["soyad"]."</td>
				                <td>".$satiraramatc["email"]."</td>
				                <td>".$satiraramatc["adres"]."</td>
				                <td>".$satiraramatc["telefon"]."</td>
				                <td>".$satiraramatc["k_tarih"]."</td>
				                <td>".$satiraramatc["d_yeri"]."</td>
				                <td>".$satiraramatc["d_tarih"]."</td>
				                <td>".$satiraramatc["il"]."</td>
				                <td><a href='hasta_silme_form_islemler.php?deger=$id'>Sil</td>
				                <td><a href='hasta_duzenle.php?duzenle=$id' style='color:red'>Düzenle</td>
				                </tr>";
					
							
						}
				}
				else
					echo "Yanlış sorgu";
			}

			if($sec=="isim")
			{
				$sorguaramaisim="SELECT  * FROM hastalar WHERE ad='$arama' ORDER BY id DESC   ";

				if($sonucaramaisim=mysql_query($sorguaramaisim)) 
				{
					
						while($satiraramaisim=mysql_fetch_array($sonucaramaisim))
						{
							$id=$satiraramaisim["id"];
							include "tablo_renklendirme.php";
							    echo "<tr bgcolor='".$renk."'>
				                <td>".$satiraramaisim["id"]."</td>
				                <td>".$satiraramaisim["tc"]."</td>
				                <td>".$satiraramaisim["ad"]."</td>
				                <td>".$satiraramaisim["soyad"]."</td>
				                <td>".$satiraramaisim["email"]."</td>
				                <td>".$satiraramaisim["adres"]."</td>
				                <td>".$satiraramaisim["telefon"]."</td>
				                <td>".$satiraramaisim["k_tarih"]."</td>
				                <td>".$satiraramaisim["d_yeri"]."</td>
				                <td>".$satiraramaisim["d_tarih"]."</td>
				                <td>".$satiraramaisim["il"]."</td>
				                <td><a href='hasta_silme_form_islemler.php?deger=$id'>Sil</td>
				              	<td><a href='hasta_duzenle.php?duzenle=$id' style='color:red'>Düzenle</td>
				                </tr>";
							
						}
				}
				else
					echo "Yanlış sorgu";
			}

			if($sec=="soyisim")
			{
				$sorguaramasoyisim="SELECT * FROM hastalar WHERE soyad='$arama' ORDER BY id DESC  ";

				if($sonucaramasoyisim=mysql_query($sorguaramasoyisim)) 
				{
					
						while($satiraramasoyisim=mysql_fetch_array($sonucaramasoyisim))
						{
								$id=$satiraramasoyisim["id"];
								include "tablo_renklendirme.php";
							    echo "<tr bgcolor='".$renk."'>
				                <td>".$satiraramasoyisim["id"]."</td>
				                <td>".$satiraramasoyisim["tc"]."</td>
				                <td>".$satiraramasoyisim["ad"]."</td>
				                <td>".$satiraramasoyisim["soyad"]."</td>
				                <td>".$satiraramasoyisim["email"]."</td> 
				                <td>".$satiraramasoyisim["adres"]."</td>
				                <td>".$satiraramasoyisim["telefon"]."</td>
				                <td>".$satiraramasoyisim["k_tarih"]."</td>
				                <td>".$satiraramasoyisim["d_yeri"]."</td>
				                <td>".$satiraramasoyisim["d_tarih"]."</td>
				                <td>".$satiraramasoyisim["il"]."</td>
				                <td><a href='hasta_silme_form_islemler.php?deger=$id'>Sil</td>
				                <td><a href='hasta_duzenle.php?duzenle=$id' style='color:red'>Düzenle</td>
				                </tr>";
							
						}
				}
				else
					echo "Yanlış sorgu";
			}

			if($sec=="tarih")
			{
				$sorguaramatarih="SELECT  * FROM hastalar WHERE k_tarih='$arama' ORDER BY id DESC  ";

				if($sonucaramatarih=mysql_query($sorguaramatarih)) 
				{
					
						while($satiraramatarih=mysql_fetch_array($sonucaramatarih))
						{
								$id=$satiraramatarih["id"];
								include "tablo_renklendirme.php";
								echo "<tr bgcolor='".$renk."'>
				                <td>".$satiraramatarih["id"]."</td>
				                <td>".$satiraramatarih["tc"]."</td>
				                <td>".$satiraramatarih["ad"]."</td>
				                <td>".$satiraramatarih["soyad"]."</td>
				                <td>".$satiraramatarih["email"]."</td>
				                <td>".$satiraramatarih["adres"]."</td>
				                <td>".$satiraramatarih["telefon"]."</td>
				                <td>".$satiraramatarih["k_tarih"]."</td>
				                <td>".$satiraramatarih["d_yeri"]."</td>
				                <td>".$satiraramatarih["d_tarih"]."</td>
				                <td>".$satiraramatarih["il"]."</td>
				                <td><a href='hasta_silme_form_islemler.php?deger=$id'>Sil</td>
				                <td><a href='hasta_duzenle.php?duzenle=$id' style='color:red'>Düzenle</td>
				                </tr>";
							
						}
				}
				else
					echo "Yanlış sorgu";
			}
			
			
			







}

echo "</table>";


?>
