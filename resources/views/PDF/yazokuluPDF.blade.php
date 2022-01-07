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
        <h1 style="text-align:center;">T.C. <br/> KOCAELİ ÜNİVERSİTESİ <br/>{{$postData['fakulte']}}<br/>BÖLÜM BAŞKANLIĞINA</h1>
        <br/>
        <p style=font-size:150%>Kocaeli Üniversitesi <b><i>{{$postData['bolum']}}</i></b> Bölümü <b><i>{{$postData['ogTur']}}</i></b>, <b><i>{{$postData['ogr_no']}}</i></b> numaralı <b><i>{{$postData['adsoyad']}}</i></b> isimli öğrencisiyim.
             <br> 2020/2021 Eğitim Öğretim yılı yaz öğretimi kapsamında aşağıda bilgilerini verdiğim ders/dersleri almak istiyorum. Kontrol listesinde belirtilen adımları tamamladım. <br> Gereği için arz ederim.
             <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
             <br><br> Öğrenci E-mail: <b><i>{{$postData['email']}}</i></b> <br> Öğrenci Adres: <b><i>{{$postData['adres']}}</i></b> <br> Öğrenci GSM: <b><i>{{$postData['tel_no']}}</i></b>
             <br>Danışman Adı:<b><i>{{$postData['danisman']}}</i></b> <br>Yaz Okulu için Başvurulan Üniversite: <b><i>{{$postData['buni']}}</i></b></br> </br>
             <br><br><br><b><i>Dilekçe Ekleri</i></b><p style=font-size:120%> 1- Yaz döneminde ders almak istenilen Üniversite ve Kocaeli Üniversitesinin ilgili bölümlerinin,
             öğrencinin üniversiteye <b>giriş yılındaki</b> taban puanlarını gösteren belge ektedir. <br>2- Alınmak istenilen derslerin karşı Üniversitedeki
             ders saati/kredi/AKTS ve ders içeriklerini gösteren belge ektedir. <br> 3- Başvurulan dönem içinde alınmış transkript ektedir.<br><br>  4- Yaz Okulu başvuru formu ektedir.<p style=font-size:160%>
             &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp; İmza:<br>
    </div>
</body>
</html>