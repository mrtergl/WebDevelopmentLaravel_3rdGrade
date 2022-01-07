<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="windows-1254">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    * {
        font-family: 'DejaVu Sans';
    }

    body {
        background-color: white;
    }

    img {
        margin-left: 85mm;
        width: 80;
        height: 80;
    }
</style>

<body>
    <div class="a4">
        <p></p>
        <img src="@php echo $pic @endphp" style="align:center;">
        <h1 style="text-align:center;">DERS İNTİBAK BAŞVURUSU</h1>
        <br />
        <p style=font-size:160%><b><i>{{$postData['fakulte']}}</i></b>,<b><i>{{$postData['bolum']}}</i></b> Bölümü <b><i>{{$postData['ogr_no']}}</i></b> numaralı <b><i>{{$postData['adsoyad']}}</i></b> isimli öğrencisiyim.
            Daha önce okumuş olduğum <b><i>{{$postData['o_uni']}}</i></b> , <b><i>{{$postData['o_fakulte']}}</i></b> Fakültesi / Yüksekokulu / Meslek Y.O. ait not durum belgesinde başarılı olduğum, aşağıda belirttiğim derslerden muaf olmak istiyorum.
            Gereği için arz ederim.<br /><br /><br /><br /><br />
            Ad Soyad : <b><i>{{$postData['adsoyad']}}</i></b> <br />
            Öğrenci No : <b><i>{{$postData['ogr_no']}}</i></b> <br />
            Bölümü-Sınıfı : <b><i>{{$postData['bolum']}}</i></b> - <b><i>{{$postData['sinif']}}</i></b><br />
            Cep Telefon No : <b><i>{{$postData['tel_no']}}</i></b> <br />
            E-posta Adresi : <b><i>{{$postData['email']}}</i></b> <br />
            Adresi : <b><i>{{$postData['adres']}}</i></b></p>
        <p style="font-size: 200%">İMZA:</p>
    </div>
</body>

</html>