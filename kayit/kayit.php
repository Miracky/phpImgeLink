<?php

include("baglanti.php");

if(isset($_POST["kaydet"])){
    
    $email=$_POST["email"];
    $password =password_hash($_POST["parola"], PASSWORD_DEFAULT);

    $ekle="INSERT INTO kullanicilar (email, parola) VALUES ('$email','$password') ";

    $calistirekle = mysqli_query($baglanti,$ekle);

    if ($calistirekle) {
        echo '<div class="alert alert-success" role="alert">
        Kayit basarili bir sekilde eklendi
      </div>';
    }
    else{
        echo '<div class="alert alert-danger" role="alert">
        kayit eklenirken problem olustu
        </div>';
    }

    mysqli_close($baglanti);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> İmge | Iletisim </title>
    <link rel="stylesheet" href="imge.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/bb3b5c7b21.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Sono:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />


</head>
<body>

    <div class="topside">
        <i class="fa-solid fa-phone-flip"></i>
        <a href="iletisim.html" class="iletisim"><b>İletişim için</b></a>
            
    </div>

    <div id="social"  >
        
        <a href="index.html" class="bassayfa">İmge | <span>Sevgi paylaştıkça güzelleşir!!</span></a>
            <i class="fa-solid fa-magnifying-glass"></i>

        <a href="https://www.instagram.com/imgebuldan/" class="topButton" target="_blank">
            <i class="fa-brands fa-instagram"></i>
        </a>

        <a href="https://www.facebook.com/imgebuldan1" class="topButton" target="_blank">
            <i class="fa-brands fa-facebook"></i>
        </a>

        <a href="girisSayfasi.html" class="topButton">
            <i class="fa-solid fa-right-to-bracket"></i>
            <span class="girisYapText">Giriş Yap</span>
        </a>
    </div>

    <div id="container">

        <header>
            <img id="headerResim" src="imge.png" alt="">
        </header>
        <div class="container">

            <div class="singIn-Uyeol">
                Üye Ol
            </div>


                <div id="girisSayfasi">
                    <form action="kayit.php" method="POST">

                        <div class="girisSayfasi_Eposta">
                            <label class="epostaLabel">E-Posta</label>
                            <input class="epostaInput" type="text" id="login-email" name="email" >
                        </div>

                        <div class="girisSayfasi_Parola">
                            <label class="sifreLabel">Şifre</label>
                            <input class="sifreInput" type="password" id="login-Password" name="parola">
                        
                        </div>
                        <div class="telefonNum">
                            <label class="telefonLabel">Telefon Numarası</label>
                            <input type="text" class="telefonInput">
                        </div>

                        <button type="submit" class="btnPrimary" name="kaydet">Kaydet</button>

                    </form>

                </div>
            </div>    

        <footer>Tum haklari saklidir &copy; | 2022</footer>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>