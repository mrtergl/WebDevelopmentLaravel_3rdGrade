<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bilgi Düzenle</title>
    <link rel="stylesheet" href="css/bilgiDuzenle.css">
</head>

<body>
    <header>
        <nav class="nav">
            <ul class="menu">
                <li class="menu_item"><a href="/login?numara=<?php echo $numara ?>">Ana Sayfa</a></li>
                <li class="menu_item"><a href="#">Başvurularım</a>
                    <ul class="submenu">
                        <li class="submenu_item"><a href='/bitenBasvurular?numara=<?php echo $numara ?>'>Biten Başvurular</a></li>
                        <li class="submenu_item"><a href='/devamEdenBasvurular?numara=<?php echo $numara ?>'>Devam Eden Başvurular</a></li>
                    </ul>
                <li class="menu_item"><a href="#">Başvuru Yap</a>
                    <ul class="submenu">
                        <li class="submenu_item"><a href='/dersintibak?numara=<?php echo $numara ?>'>Ders İntibak Başvurusu</a></li>
                        <li class="submenu_item"><a href='/yatayGecisBasvuru?numara=<?php echo $numara ?>'>Yatay Geçiş Başvurusu</a></li>
                        <li class="submenu_item"><a href='/dgsbasvuru?numara=<?php echo $numara ?>'>Dikey Geçiş Başvurusu</a></li>
                        <li class="submenu_item"><a href='/yazOkuluBasvuru?numara=<?php echo $numara ?>'>Yaz Okulu Başvurusu</a></li>
                        <li class="submenu_item"><a href='/capbasvuru?numara=<?php echo $numara ?>'>ÇAP Başvurusu</a></li>
                    </ul>
                <li class="menu_item"><a href="/bilgiDuzenle?numara=<?php echo $numara ?>">Bilgilerimi Düzenle</a></li>
            </ul>
        </nav>
    </header>
    <div class="all">
        <div class="image">
            <img src="img/logo.jpg" width="100" height="100">
        </div>
        <div class="container" style="width: 750px;padding-top: 65px;margin-left: 30%;">
            <div class="title">Bilgi Düzenleme</div>
            <form method="POST" name="bilgiduzenle">
                @csrf
                <div class="user-details">
                    <div class="input-box" style="width:80%;margin-left: 10%;">
                        <label class="details">E-posta<span style="color:red"></span></label>
                        <input type="email" name="email" value={{$bilgiler['email']}} autocomplete="off" required>
                    </div>
                </div>
                <div class="user-details">
                    <div class="input-box" style="width:80%;margin-left: 10%;">
                        <label class="details">Telefon Numarası</label>
                        <input type="tel" minlength="11" name="tel_no" placeholder="Telefon Numaranızı girin" value={{$bilgiler['tel_no']}} autocomplete="off" required>
                    </div>
                </div>
                <div class="user-details">
                    <div class="input-box" style="width:80%;margin-left: 10%;">
                        <label class="details">Adres <span style="color:red"></span></label>
                        <textarea id="exampleFormControlTextarea1" autocomplete="off" rows="1" name="adres" required>{{$bilgiler['adres']}}</textarea>
                    </div>
                </div>
                <div class="user-details">
                    <div class="input-box" style="width:80%;margin-left: 10%;">
                        <label class="details">Şifre<span style="color:red"></label>
                        <input type="text" minlength="8" value={{$bilgiler['sifre']}} name='sifre' autocomplete="off" required>
                    </div>
                </div>
                <div class="button">
                    <br><br><br><br>
                    <input type="submit" value="Güncelle" onclick="click()">
                    <br><br>
                </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    <script>
        function click() {
            alert("Bilgileriniz Güncellenmiştir");
            return false;
        }
    </script>
</body>

</html>