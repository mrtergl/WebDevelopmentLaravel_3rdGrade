<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ders İntibak Başvurusu</title>
    <link rel="stylesheet" href="css/dersintibak.css">
</head>
<style>
    .all{
        display: block;
    }
    .title {
    font-size: 25px;
    font-weight: 500;
    position: relative;
    margin-top: -15px;
    text-align: center;
    height: 40px;
    margin-bottom: 15px;
    color: black;
}

.title::before {
    content: "";
    position: absolute;
    bottom: 0;
    height: 3px;
    width: 9cm;
    background: radial-gradient(
        circle farthest-corner at 10% 20%,
        rgba(14, 174, 87, 1) 0%,
        rgba(12, 116, 117, 1) 90%
    );;
    margin-left: 50px;
}
.button-container {
    height: 100px;
    width: 100%;
    display: flex;
    align-content: center;
    justify-content: center;
}
</style>
<body>
  <header>
    <nav class="nav">
        <ul class ="menu">
            <li class="menu_item"><a href ="/login">Ana Sayfa</a></li>
            <li class="menu_item"><a href ="#">Başvurularım</a>
                <ul class= "submenu">
                    <li class="submenu_item"><a href='/bitenBasvurular'>Biten Başvurular</a></li>
                    <li class="submenu_item"><a href='/devamEdenBasvurular'>Devam Eden Başvurular</a></li>
                </ul>
            <li class="menu_item"><a href ="#">Başvuru Yap</a>
                <ul class= "submenu">
                    <li class="submenu_item"><a href='/dersintibak'>Ders İntibak Başvurusu</a></li>
                    <li class="submenu_item"><a href='#'>Yatay Geçiş Başvurusu</a></li>
                    <li class="submenu_item"><a href='/dgsbasvuru'>Dikey Geçiş Başvurusu</a></li>
                    <li class="submenu_item"><a href='/yazOkuluBasvuru'>Yaz Okulu Başvurusu</a></li>
                    <li class="submenu_item"><a href='/capbasvuru'>ÇAP Başvurusu</a></li>
                </ul>
            <li class="menu_item"><a href ="/bilgiDuzenle">Bilgilerimi Düzenle</a></li>
        </ul>
    </nav>
</header>
 <div class= "all">
    <div class="image">
        <img src="img/logo.jpg" width="100" height="100">
    </div>
    <div class="title">Ders İntibak Başvurusu Belge Yükleme</div>
    <br>
    <form  method="POST" enctype="multipart/form-data">
        @csrf
        <div class="belge-container">
            <label>EK 1 : Transkript(Onaylı)</label>
            <input type="file" id="EK1" name="EK1" accept="application/pdf" required>
        </div>
        <div class="belge-container">
            <label>EK 2 : İkinci anadal taban puanını gösteren belge </label>
            <input type="file" name="EK2" id="EK2" accept="application/pdf" required>
        </div>
        <div class="belge-container">
            <label>EK 3 : Ders İntibak Başvuru Formu</label>
            <input type="file" name="EK3" id="EK3" accept="application/pdf" required >
        </div>
        <br><br>
        <div class="button-container">
            <div class="button1">
                <input type="submit" value="Başvuruyu Tamamla">
            </div>
        </div>
        <br><br><br>
    </form>
 </div>
</body>
</html>