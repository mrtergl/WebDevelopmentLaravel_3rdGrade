<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Öğrenci Ana Sayfası</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<style>
    .basvuru {
        height: 225px;
        width: 225px;
        background: radial-gradient(circle farthest-corner at 10% 20%,
                rgba(14, 174, 87, 1) 0%,
                rgba(12, 116, 117, 0.8) 90%);
        margin-left: 55px;
        padding-top: 15px;
        text-align: center;
        font-size: xx-large;
        font-weight: bold;
        padding: 25px;
        border-radius: 15px;
        box-shadow: grey;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

    }

    .basvuru:hover {
        background-color: lawngreen;
    }

    .nav {
        width: 100%;
        background: radial-gradient(circle farthest-corner at 10% 20%,
                rgba(14, 174, 87, 1) 0%,
                rgba(12, 116, 117, 1) 90%);
        color: #fff;
        top: 0px;
        left: 0;
        z-index: 50;
    }

    .menu {
        line-height: 25px;
        font-weight: 100;
    }

    .nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        text-align: center;
    }

    .nav .menu .menu_item {
        display: inline-block;
        text-align: center;
        font-size: 15px;
    }

    .nav .menu .menu_item a {
        padding: 12px 24px;
        cursor: pointer;
        text-decoration: none;
        color: white;
        display: block;
        text-align: left;
    }


    .submenu {
        text-transform: none;
        display: none;
        position: absolute;
        width: 220px;
        background: radial-gradient(circle farthest-corner at 10% 20%,
                rgba(14, 174, 87, 1) 0%,
                rgba(12, 116, 117, 0.8) 90%);
        z-index: 60;
    }

    .header .nav {
        overflow: inherit;

    }

    .submenu_item {
        border-left: 4px solid transparent;
    }

    .nav .menu .menu_item a:hover {
        transition: 1s ease;
        background-color: white;
        color: black;
    }

    .menu_item:hover .submenu {
        display: block;
    }

    .submenu_item:hover {
        border-left: 4px solid black;
    }
</style>

<body>
    <div>
        <header>
            <nav class="nav">
                <ul class="menu">
                    <li class="menu_item"><a href="/login?numara=<?php echo $numara ?>">Ana Sayfa</a></li>
                    <li class="menu_item"><a href="#">Başvurularım</a>
                        <ul class="submenu">
                            <li class="submenu_item"><a href='/bitenBasvurular'>Biten Başvurular</a></li>
                            <li class="submenu_item"><a href='/devamEdenBasvurular'>Devam Eden Başvurular</a></li>
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
        <div class="container" style="margin-top: 25px;">
            <div class="row">
                <div class="col">
                    <div class="card mb-3" style="max-width: 650px;margin-top:2rem;margin-left:5rem;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{$image}}" class="img-fluid rounded-start" alt="ogrenciFoto" style="margin-top: 9px;margin-left: 9px;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body" style="text-align:center;">

                                    <h5 class="card-title">{{$ad}}</h5>
                                    <h5 class="card-title">{{$numara}}</h5>
                                    <p class="card-text">{{$tc}}</p>
                                    <p class="card-text">{{$fakulte}}</p>
                                    <p class="card-text">{{$bolum}}</p>
                                    <p class="card-text">{{$email}}</p>
                                    <p class="card-text">{{$dogumt}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-grid gap-2" style="margin-top:3rem;">
                        <a class="btn btn-success" style="height:55px;font-size:x-large;" href="devamEdenBasvurular">
                            Devam Eden Başvurular
                        </a>
                        <a class="btn btn-success" style="height:55px;font-size:x-large;" href="bitenBasvurular">
                            Biten Başvurular
                        </a>
                        <a class="btn btn-success" style="height:55px;font-size:x-large;" href="/bilgiDuzenle?numara=<?php echo $numara ?>">
                            Bilgilerimi Düzenle
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-top:55px;">
            <h1 style="margin-left:105px;">BAŞVURULAR</h1>
            <div style="height:5px;background-color:green;font-size: x-large;margin-left:25px;margin-right:25px;">
            </div>
        </div>

        <div style="margin-top:55px;display:inline-flex;margin-left:10%;">
            <a style="color:#fff" href='/yazOkuluBasvuru?numara=<?php echo $numara ?>'>
                <div class="basvuru">
                    YAZ OKULU BAŞVURUSU
                </div>
            </a>
            <a style="color:#fff" href='/yatayGecisBasvuru?numara=<?php echo $numara ?>'>
                <div class="basvuru">
                    YATAY GEÇİŞ BAŞVURUSU
                </div>
            </a>
            <a style="color:#fff" href='/capbasvuru?numara=<?php echo $numara ?>'>
                <div class="basvuru" style="padding-top: 45px;">
                    ÇAP BAŞVURUSU
                </div>
            </a>
            <a style="color:#fff" href='/dersintibak?numara=<?php echo $numara ?>'>
                <div class="basvuru">
                    DERS İNTİBAK BAŞVURUSU
                </div>
            </a>
            <a style="color:#fff" href='/dgsbasvuru?numara=<?php echo $numara ?>'>
                <div class="basvuru" style="padding-top: 45px;">
                    DGS BAŞVURUSU
                </div>
            </a>
        </div>
</body>