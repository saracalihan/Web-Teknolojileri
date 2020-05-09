<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0 shrink-to-fit=no">
    <link rel="icon" href="<%= BASE_URL %>favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="style.css" type="text/css" rel="stylesheet"/>
    <title>Admin</title>
  </head>
  <body>

    <nav > <!-- navigasyon cubugu -->
      <a class="logo" href="hakkimda.html">AlihanSaraç  </a>
      <div id="sekmeler">
        <a href="egitim.html" >Eğitim</a> |
        <a href="sehrim.html">Şehrim</a> |
        <a href="mirasimiz.html">Mirasımız</a> |
        <a href="iletisim.html">İletişim</a>
        <a href="login.html" id="login">Giriş Yap</a>
      </div>
    </nav>
    
    <div class="admin">
    <?php if($_POST["name"]=="a@a.com" && $_POST["password"]==123456)
			{
        {echo" <h1>Merhaba ".$_POST["name"]."</h1>";}
        return;
      }
      else{
        echo "Kullanıcı epostası yada şifre hatalı";
        header("refresh:2; login.html");
      }    
				?>
    </div>

    <div id="footer"><!-- footer cubugu -->
      <h1>Footer</h1>
    </div>

  </body>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>

