<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="windows-1254">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    *{ 
    font-family: 'DejaVu Sans'; 
    }
    body{
        background-color: white;
    }
    img{
        margin-left:85mm;
        width:80; 
        height:80;
    }
</style>

<body>
    <div class="a4">
        <img src="@php echo $pic @endphp" style="align=center"  >
        <h2 style="text-align:center;">T.C. <br/> KOCAELİ ÜNİVERSİTESİ <br/> <b><i>{{$postData['fakulte']}}</i></b>  BÖLÜM BAŞKANLIĞINA </h2><br/>
        <br/>
        <p style=font-size:130%>Kocaeli Üniversitesi Ön Lisans ve Lisans Eğitim ve Öğretim Yönetmeliğinin 43. maddesi uyarında, Fakülteniz <b><i>{{$postData['bolum']}}</i></b> Bölümü aşağıda belirtmiş olduğum (I. Öğr / II. Öğr.) Çift Anadal Programı (ÇAP) kapsamında öğrenim görme talebimin kabul edilmesini arz ederim.
            <br/><br/><br/><br/></b>	<br/>Ad Soyad : <b><i>{{$postData['adsoyad']}}</i></b> <br/>Öğrenci No : <b><i>{{$postData['ogr_no']}}</i></b>  <br/>Adres 	:	<b><i>{{$postData['adres']}}</i></b> <br/>GSM	:	<b><i>{{$postData['tel_no']}}</i></b> <br/>E-Posta Adresi	:	<b><i>{{$postData['email']}}</i></b></p> <br/>Ek	:	<b><i>Transkript, <br/>     İkinci anadal taban puanı ile öğrencinin aldığı puanı gösteren belge <br/>     (Başarı sıralaması ilk %20'de bulunmayan öğrenciler için)</i></b></p>
            <p style=font-size:150%>İMZA</p>
    </div>
</body>
</html>