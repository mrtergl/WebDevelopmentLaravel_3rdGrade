<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DGS Başvurusu</title>
  <link rel="stylesheet" href="css/dersintibak.css">
</head>
<style>
  .container .title::before {
    content: "";
    position: absolute;
    bottom: 0;
    height: 3px;
    width: 4cm;
    background: white;
    margin-left: 20px;
  }
</style>

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
    <div class="container" style="max-height:60cm;margin-left: 30%;">
      <div class="title">DGS Başvurusu</div>
      <form method="POST" name="form">
        @csrf
        <div class="user-details">
          <div class="input-box">
            <label class="details">Öğrenci Numarası<span style="color:red">*</span></label>
            <input type="text" name="ogr_no" minlength="9" maxlength="9" value={{$bilgiler['ogr_no']}} autocomplete="off" readonly required>
          </div>
          <div class="input-box">
            <label class="details">Ad Soyad<span style="color:red">*</span></label>
            <input type="text" name="adsoyad" value={{$bilgiler['adsoyad']}} autocomplete="off" readonly required>
          </div>
          <div class="input-box">
            <label class="details">E-posta<span style="color:red">*</span></label>
            <input type="email" name="email" value={{$bilgiler['email']}} autocomplete="off" readonly required>
          </div>
          <div class="input-box">
            <label class="details">TC Kimlik Numarası<span style="color:red">*</span></label>
            <input type="text" name="tc_no" minlength="11" maxlength="11" value={{$bilgiler['tc_no']}} autocomplete="off" readonly required>
          </div>
          <div class="input-box">
            <label class="details">Telefon Numarası</label>
            <input type="tel" minlength="11" name="tel_no" value={{$bilgiler['tel_no']}} autocomplete="off" readonly required>
          </div>
          <div class="input-box">
            <label class="details">Adres<span style="color:red">*</span></label>
            <textarea id="exampleFormControlTextarea1" name="adres" placeholder="Adres girin" rows="1" required></textarea>
          </div>

          <div class="select">
            <label class="details">Sınıf<span style="color:red">*</span></label>
            <select name="sinif" id="sinif">
              <option disabled selected class="selected">Sınıf Seçin</option>
              <option value="1.Sınıf">1.Sınıf</option>
              <option value="2.Sınıf">2.Sınıf</option>
              <option value="3.Sınıf">3.Sınıf</option>
              <option value="4.Sınıf">4.Sınıf</option>
            </select>
          </div>
          <div class="select">
            <label class="details">Öğrenim Türü<span style="color:red">*</span></label>
            <select name="ogrenim" id="ogrenim">
              <option disabled selected class="selected">Öğrenim Türü</option>
              <option value="1.Örenim">1.Öğrenim</option>
              <option value="2.Öğrenim">2.Öğrenim</option>
            </select>
          </div>
          <div class="select">
            <label class="details">Fakülte<span style="color:red">*</span></label>
            <select name="fakulte" id="fakulte">
              <option disabled selected class="selected">Fakülte Seçin</option>
              @foreach ($fakulteler as $item)
              <option value="{{$item}}">{{$item}}</option>
              @endforeach
            </select>
          </div>
          <div class="select">
            <label class="details">Bölüm <span style="color:red">*</label>
            <select name="bolum" id="bolum" required>
              <option disabled selected class="selected">Bölüm Seçin </span></option>
              @foreach ($bolumler as $item)
              <option value="{{$item}}">{{$item}}</option>
              @endforeach
            </select>
          </div>
          <div class="input-box">
            <label class="details">Başvurulacak Fakülte<span style="color:red">*</span></label>
            <input type="text" name="bas_fakulte" minlength="9" maxlength="9" placeholder="Başvurulacak Fakülte" required>
          </div>
          <div class="input-box">
            <label class="details">Başvurulacak Bölüm<span style="color:red">*</span></label>
            <input type="text" name="bas_bolum" minlength="9" maxlength="9" placeholder="Başvurulacak Bölüm" required>
          </div>
        </div>
        <div class="button-container">
          <div class="button1">
            <br>
            <input type="submit" value="PDF'e dönüştür" onclick="validateForm()">
          </div>
          <div class="button2">
            <br>
            <a href='/dgsBELGE?numara=<?php echo $numara ?>'><input type="button" value="Başvuru Formu Yükle"></a>
          </div>
        </div>
      </form>
    </div>
  </div>
  </div>
  </div>
  
</body>

</html>