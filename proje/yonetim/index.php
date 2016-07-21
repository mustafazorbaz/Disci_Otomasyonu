<?php
	@session_start();
	if(@$_SESSION['oturum']==true)	//Bu if blogu oturum açıksa  açık sayfa gelsin istedim 
	{
		header("Location:randevular.php");//açıksa  yonetim.php sayfasına yonlendirdi.
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Giriş</title>
<link href="sekil.css" rel="stylesheet" type="text/css" />
</head>

<body>


<table width="373" height="126" border="0" align="center">
  <tr>
    <td width="373"><img src="../ikonlar/logo.png" width="358" height="92" /></td>
  </tr>
</table>
<table width="350" border="10" bordercolor="#666666" align="center">
  
  <tr>
    <td height="300"><form id="form1" name="form1" method="post" action="index_islem.php">
      <p>
        <label for="kullanici"></label>
      </p>
      <table width="350" border="0">
        <tr>
          <td width="102" height="30"><strong>Kullanıcı :</strong></td>
          <td width="202"><label for="kullanici2"></label>
            <input name="kullanici" type="text" class="text" id="kullanici" value="" size="20" /></td>
        </tr>
        <tr>
          <td height="30"><strong>Şifre:</strong></td>
          <td><label for="parola"></label>
            <input name="parola" type="password" class="text" id="parola" size="20" /></td>
        </tr>
        <tr>
          <td height="40" colspan="2" >  
            <input name="giris"  type="submit" id="giris" value="   Giriş   "  class="girisbtn" /></td>
          
        </tr>
        <tr>
          <td height="30" colspan="2"><label for="uyari"></label></td>
          </tr>
      </table>
      <p>&nbsp; </p>
    </form></td>
  </tr>
</table>
<p class="yazi" align="center">© 2013 - 2015, Her Hakkı Saklıdır. KTÜ Of Teknolojileri Tic. Ltd. Şti.
Sicil No: 123456789</p>



</body>
</html>