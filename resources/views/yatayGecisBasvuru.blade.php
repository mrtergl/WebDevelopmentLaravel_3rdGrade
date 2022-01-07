<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Yatay Geçiş Başvurusu</title>
  <link rel="stylesheet" href="css/dersintibak.css">
</head>
<style>
  .container .title::before {
    content: "";
    position: absolute;
    bottom: 0;
    height: 3px;
    width: 5cm;
    background: white;
    margin-left: 30px;
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
    <div class="container" style="height:235mm;margin-left: 30%;">
      <div class="title">Yatay Geçiş Başvurusu</div>
      <form method="POST" name="form">
        @csrf
        <div class="user-details">
          <div class="input-box">
            <label class="details">Ad Soyad<span style="color:red">*</span></label>
            <input type="text" name="adsoyad" value={{$bilgiler['adsoyad']}} autocomplete="off" readonly required>
          </div>
          <div class="input-box">
            <label class="details">T.C. Kimlik Numarası<span style="color:red">*</span></label>
            <input type="text" name="tc_no" minlength="11" maxlength="11" value={{$bilgiler['tc_no']}} autocomplete="off" readonly required>
          </div>
          <div class="input-box">
            <label class="details">Telefon Numarası<span style="color:red">*</label>
            <input type="tel" minlength="11" maxlength="11" name="tel_no" value={{$bilgiler['tel_no']}} autocomplete="off" readonly required>
          </div>
          <div class="input-box">
            <label class="details">E-posta<span style="color:red">*</span></label>
            <input type="email" name="email" value={{$bilgiler['email']}} autocomplete="off" readonly required>
          </div>
          <div class="input-box">
            <label class="details">Adres <span style="color:red">*</span></label>
            <textarea id="exampleFormControlTextarea1" name="adres" placeholder="Adres girin" rows="1" required></textarea>
          </div>

          <div class="select">
            <label class="details">Öğretim Türü<span style="color:red">*</span></label>
            <select name="ogTur" id="ogTur">
              <option disabled selected class="selected">Öğretim Türü</option>
              <option value="1.Öğretim">1.Öğretim</option>
              <option value="2.Öğretim">2.Öğretim</option>
            </select>
          </div>
          <div class="input-box">
            <label class="details">KOÜ Öğrenci Numarası</label>
            <input type="text" name="ogr_no" minlength="9" maxlength="9" value={{$bilgiler['ogr_no']}} autocomplete="off" readonly required>
          </div>
          <div class="input-box">
            <label class="details">Kayıtlı Olduğu Üniversite<span style="color:red">*</span></label>
            <input type="text" name="uni" placeholder="Kayıtlı Olduğu Üniversite" required>
          </div>
          <div class="select">
            <label class="details">Kayıtlı Olduğu Fakülte<span style="color:red">*</span></label>
            <select name="fakulte" id="fakulte">
              <option disabled selected class="selected">Fakülte Seçin</option>
              @foreach ($fakulteler as $item)
              <option value="{{$item}}">{{$item}}</option>
              @endforeach
            </select>
          </div>
          <div class="select">
            <label class="details">Kayıtlı Olduğu Bölüm <span style="color:red">*</label>
            <select name="bolum" id="bolum" required>
              <option disabled selected class="selected">Bölüm Seçin </span></option>
              @foreach ($bolumler as $item)
              <option value="{{$item}}">{{$item}}</option>
              @endforeach
            </select>
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
          <div class="input-box">
            <label class="details">Ağırlıklı Genel Not Ortalaması<span style="color:red">*</span></label>
            <input type="text" name="agno" minlength="4" maxlength="4" placeholder="Ağırlıklı Genel Not Ortalaması" required>
          </div>
          <div class="select">
            <label class="details">Kayıtlı Olduğu Yükseköğretim Kurumuna Yerleştirildiği Yıl<span style="color:red">*</span></label>
            <select name="yil" id="yil">
              <option value="2021">2021</option>
              <option value="2020">2020</option>
              <option value="2019">2019</option>
              <option value="2018">2018</option>
              <option value="2017">2017</option>
              <option value="2016">2016</option>
              <option value="2015">2015</option>
              <option value="2014">2014</option>
              <option value="2013">2013</option>
            </select>
          </div>
          <div class="input-box">
            <label class="details">Üniversiteye Giriş Puanı<span style="color:red">*</span></label>
            <input type="text" name="puan" minlength="3" maxlength="7" placeholder="Üniversiteye Giriş Puanı" required>
          </div>
          <div class="input-box">
            <label class="details">Başvurulan Üniversite<span style="color:red">*</span></label>
            <input type="text" name="Buni" placeholder="Üniversite Adı" required>
          </div>
          <div class="select">
            <label class="details">Başvurulan Fakülte<span style="color:red">*</span></label>
            <select name="Bfakulte" id="Bfakulte">
              <option disabled selected class="selected">Fakülte Seçin</option>
              @foreach ($fakulteler as $item)
              <option value="{{$item}}">{{$item}}</option>
              @endforeach
            </select>
          </div>
          <div class="select">
            <label class="details">Başvurulan Bölüm <span style="color:red">*</label>
            <select name="Bbolum" id="Bbolum" required>
              <option disabled selected class="selected">Bölüm Seçin </span></option>
              @foreach ($bolumler as $item)
              <option value="{{$item}}">{{$item}}</option>
              @endforeach
            </select>
          </div>

        </div>
        <div class="button-container">
          <div class="button1">
            <br>
            <input type="submit" value="PDF'e dönüştür" onclick="validateForm()">
          </div>
          <div class="button2">
            <br>
            <a href='/yataygecisBELGE?numara=<?php echo $numara ?>'><input type="button" value="Başvuru Formu Yükle"></a>
          </div>
        </div>
      </form>
    </div>
  </div>
  </div>
  </div>
  
</body>

</html>