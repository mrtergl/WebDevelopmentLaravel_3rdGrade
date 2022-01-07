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
        margin-left:80mm;
        width:80; 
        height:80;
    }
</style>

<body>
    <div class="a4">
        <img src="@php echo $pic @endphp" style="align=center"  >
        <h1 style="text-align:center;">T.C. <br/> KOCAELİ ÜNİVERSİTESİ <br/>ÖĞRENCİ İŞLERİ DAİRESİ<br/> BÖLÜM BAŞKANLIĞINA</h1>
        <br/>
        <p style=font-size:150%><b><i>{{$postData['uni']}}</i></b> Üniversitesi <b><i>{{$postData['fakulte']}}</i></b> <b><i>{{$postData['bolum']}}</i></b> Bölümü <b><i>{{$postData['ogTur']}}</i></b>, <b><i>{{$postData['ogr_no']}}</i></b> numaralı <b><i>{{$postData['adsoyad']}}</i></b> isimli öğrencisiyim.
             <br> 2021/2022 Eğitim Öğretim yılından itibaren eğitim öğretimime <b><i>{{$postData['Buni']}}</i></b> Üniversitesinde devam etmek istiyorum. Kontrol listesinde belirtilen adımları tamamladım. <br> Gereği için arz ederim.
             <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
             <br><br> T.C. Kimlik Numarası: <b><i>{{$postData['tc_no']}}</i></b> <br> E-mail: <b><i>{{$postData['email']}}</i></b> <br> GSM: <b><i>{{$postData['tel_no']}}</i></b> <br> Adres: <b><i>{{$postData['adres']}}</i></b> </br><br>
             <br><br><br>Ağırlıklı Genel Not Ortalaması: <b><i>{{$postData['agno']}}</i></b>
             <br>Kayıtlı Olduğu Yükseköğretim Kurumuna <br> Yerleştirildiği Yıl: <b><i>{{$postData['yil']}}</i></b>
             <br>Üniversiteye Giriş Puanı: <b><i>{{$postData['puan']}}</i></b>
             <br>Başvurulan Üniversite: <b><i>{{$postData['Buni']}}</i></b>
             <br>Başvurulan Fakülte: <b><i>{{$postData['Bfakulte']}}</i></b>
             <br>Başvurulan Bölüm: <b><i>{{$postData['Bbolum']}}</i></b>
             <br><br><br><br><b><i>Dilekçe Ekleri:</i></b><p style=font-size:120%> 1- Başvurulan dönem içinde alınmış transkript ektedir.
             <br>2- ÖSYM Sınav Sonuç belgesinin İnternet çıktısı (PDF) ektedir.
             <br> 3- Yabancı  Dil  Hazırlık  veya  Yeterlik  belgesi (Yabancı dil ile eğitim yapan programlara başvuranlar için) ektedir.
             <br><br>  4- Öğrenci Belgesi ektedir.<p style=font-size:160%>
             &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp; İmza:<br>
    </div>
</body>
</html>