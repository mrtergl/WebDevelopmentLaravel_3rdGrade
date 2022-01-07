<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kocaeli Üniversitesi</title>

  <link href="css/kayitol.css" rel="stylesheet">

</head>

<body>
  <div class="container" id="container">
    <div class="form-container sign-up-container">
      <form action="{{url('kayitol')}}" method="POST" id="kayitolform" name="kayitolform" enctype="multipart/form-data">
        @csrf
        <h2>Kayıt Ol</h2>
        <input type="text" name="ogr_no" minlength="9" maxlength="9" placeholder="Öğrenci No" required>
        <input type="text" name="adsoyad" placeholder="Ad Soyad" required>
        <input type="email" name="email" placeholder="E-mail: ornek@gmail.com" required>
        <input type="text" name="tc_no" minlength="11" maxlength="11" placeholder="TC No" required>
        <input type="tel" name="tel_no" minlength="11" placeholder="Telefon Numarası" required>
        <select name="fakulte" id="fakulteselect" required>
          <option disabled selected value>Fakülte Seçin</option>
          @foreach ($fakulteler as $item)
          <option value="{{$item}}">{{$item}}</option>
          @endforeach
        </select>
        <select name="bolum" id="bolumselect" required>
          <option disabled selected value>Bölüm Seçin</option>
          @foreach ($bolumler as $item)
          <option value="{{$item}}">{{$item}}</option>
          @endforeach
        </select>
        <input id="datefield" name="dogum_tarihi" type="text" onfocus="(this.type='date')" min='1899-01-01' max='2000-13-13' placeholder="Doğum Tarihiniz" required>
        <textarea id="exampleFormControlTextarea1" name="adres" placeholder="Adres" rows="1" required></textarea>
        <input type="password" name="sifre" minlength="8" aria-describedby="passwordHelpBlock" required placeholder="Şifre Girin(minimum 8 karakter)">
        <input type="file" id="img" name="img" accept="image/*" required>
        <button id="kayitolbutonu" onclick="validateForm()">Kayıt Ol</button>
      </form>
    </div>
    <div class="form-container sign-in-container">
      <form action="{{url('login')}}" method="POST" id=girisformu>
        @csrf
        <h1 style="margin-bottom: 30px">Giriş Yap</h1>
        <input type="text" name="ogrnogiris" minlength="9" maxlength="9" placeholder="Öğrenci Numarası" required />
        <input type="password" name="sifregiris" id="sifregiris"placeholder="Şifre" required />
        <input type="checkbox" onclick="myFunction()">  Şifreyi Göster
        <a href="sifremiUnuttum">Şifremi Unuttum</a>
        <button id=girisyap onclick="girisYap()">Giriş Yap</button>
        <a style="margin-top: 50px;" href="admin">Admin Girişi</a>
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">

        <div class="overlay-panel overlay-left">
          <img src="img/logo.jpg" width="100" height="100">
          <br>
          <h1>Kocaeli Üniversitesi Öğrenci Başvuru Platformu</h1>
          <p>Başvuru kayıt toplama platformuna üye olmak için yandaki formu doldurun</p>
          <br>
          <p>Eğer zaten üyeyseniz giriş yapın !</p>
          <button class="ghost" id="signIn">Giriş YAP</button>
        </div>
        <div class="overlay-panel overlay-right">
          <img src="img/logo.jpg" width="100" height="100">
          <h1>Kocaeli Üniversitesi Öğrenci Başvuru Platformu</h1>
          <p>Başvuru platformuna girş yapın</p>
          <br>
          <p>Eğer üye değilseniz aşağıdaki butondan üye olabilirsiniz
          <p>
            <button class="ghost" id="signUp">Kayıt Ol</button>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="js/kayitol.js"></script>

</html>