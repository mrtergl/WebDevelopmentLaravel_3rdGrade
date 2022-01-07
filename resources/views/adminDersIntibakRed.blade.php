<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DERS İNTİBAK REDDEDİLEN BAŞVURULAR</title>
    <link rel="stylesheet" href="css/bitenBasvurular.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">


</head>
<style>
    .container .title::before {
        content: "";
        position: absolute;
        bottom: 0;
        height: 3px;
        width: 4cm;
        margin-left: 20px;
        background: white;
    }
</style>

<body>
    <header>
        <nav class="nav" style="height: 55px;">
            <ul class="menu">
                <li class="menu_item " style="font-size:larger;"><a href="/adminGiris">Ana Sayfa</a></li>
                <li class="menu_item" style="font-size:larger;">Gelen Başvurular
                    <ul class="submenu">
                        <li class="submenu_item"><a href='/adminDersIntibak'>Ders İntibak Başvurusu</a></li>
                        <li class="submenu_item"><a href='/adminYatayGecis'>Yatay Geçiş Başvurusu</a></li>
                        <li class="submenu_item"><a href='/adminDGS'>Dikey Geçiş Başvurusu</a></li>
                        <li class="submenu_item"><a href='/adminYazOkulu'>Yaz Okulu Başvurusu</a></li>
                        <li class="submenu_item"><a href='/adminCAP'>ÇAP Başvurusu</a></li>
                    </ul>
                <li class="menu_item" style="margin-left: 25px;font-size:larger;">Onaylanan Başvurular
                    <ul class="submenu">
                        <li class="submenu_item"><a href='/adminDersIntibakOnayli'>Ders İntibak Başvurusu</a></li>
                        <li class="submenu_item"><a href='/adminYatayGecisOnayli'>Yatay Geçiş Başvurusu</a></li>
                        <li class="submenu_item"><a href='/adminDGSOnayli'>Dikey Geçiş Başvurusu</a></li>
                        <li class="submenu_item"><a href='/adminYazOkuluOnayli'>Yaz Okulu Başvurusu</a></li>
                        <li class="submenu_item"><a href='/adminCAPOnayli'>ÇAP Başvurusu</a></li>
                    </ul>
                <li class="menu_item" style="margin-left: 25px;font-size:larger;">Reddedilen Başvurular
                    <ul class="submenu">
                        <li class="submenu_item"><a href='/adminDersIntibakRed'>Ders İntibak Başvurusu</a></li>
                        <li class="submenu_item"><a href='/adminYatayGecisRed'>Yatay Geçiş Başvurusu</a></li>
                        <li class="submenu_item"><a href='/adminDGSRed'>Dikey Geçiş Başvurusu</a></li>
                        <li class="submenu_item"><a href='/adminYazOkuluRed'>Yaz Okulu Başvurusu</a></li>
                        <li class="submenu_item"><a href='/adminCAPRed'>ÇAP Başvurusu</a></li>
                    </ul>
            </ul>
        </nav>
    </header>
    <div class="title" style="font-size: xx-large;margin-top: 10px;color: green;font-weight: 800;text-align:center;">REDDEDİLEN BAŞVURULAR
    </div>
    <div class="all">

        @foreach ($degerler as $item)
        @if($item['onayD'] == 'REDDEDİLDİ')
        <div class="basvuruTakip" style="display: flex;">
            <div style="margin-top:20px;display:flex;">
                <div style="margin-left: 35px;">
                    <div style="display:flex;">
                        <i class="bi bi-filter-square" style="font-size: 1.5rem;margin-right: 1rem;"></i>
                        <h4>ÖĞRENCİ NO </h4>
                    </div>
                    <div style="display:flex;">
                        <i class="bi bi-filter-square" style="font-size: 1.5rem;margin-right: 1rem;"></i>
                        <h4>ÖĞRENCİ AD-SOYAD </h4>
                    </div>
                    <div style="display:flex;">
                        <i class="bi bi-filter-square" style="font-size: 1.5rem;margin-right: 1rem;"></i>
                        <h4>BAŞVURU ADI </h4>
                    </div>
                    <div style="display:flex;">
                        <i class="bi bi-calendar-event" style="font-size: 1.5rem;margin-right: 1rem;"></i>
                        <h4>BAŞVURU TARİHİ </h4>
                    </div>
                    <div style="display:flex;">
                        <i class="bi bi-clipboard-check" style="font-size: 1.5rem;margin-right: 1rem;"></i>
                        <h4>BAŞVURU DURUMU </h4>
                    </div>
                </div>
                <div style="float:inline-end;margin-left:2rem;">
                    <h4>:</h4>
                    <h4>:</h4>
                    <h4>:</h4>
                    <h4>:</h4>
                    <h4>:</h4>
                </div>
            </div>
            <div style="margin-top:20px;text-align:left;color: black;display:flex;">
                <div style="margin-left: 30px;">
                    <div style="display:flex;">
                        <h4>{{$item['ogr_no']}}</h4>
                    </div>
                    <div style="display:flex;">
                        <h4>{{$item['adsoyad']}}</h4>
                    </div>
                    <div style="display:flex;">
                        <h4>Ders İntibak Başvurusu </h4>
                    </div>
                    <div style="display:flex;">
                        <h4>{{$item['tarih']}}</h4>
                    </div>
                    <div style="display:flex;">
                        <h4>{{$item['onayD']}} </h4>
                    </div>
                </div>
            </div>
            <div style="margin-top:20px;text-align:left;color: black;display:flex;margin-left: 10%;">
                <div style="display:flex;margin-top: 45px;height: 50px;">
                    <a href="/basvuruInceleDersIntibak?numara=<?php echo $item['ogr_no'] ?>">
                        <button type="button" class="btn btn-info btn-lg" style="width: 15rem;" data-bs-toggle="modal" data-bs-target="#bilgiModal">İncele</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endif
    @endforeach
    <!-- Modal -->

    <!-- Button trigger modal -->

</body>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Poppins:ital,wght@1,300&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    header {
        margin-top: -10px;
        margin-left: -10px;
        margin-right: -10px;
    }

    body {
        height: 100vh;
        justify-content: center;
        align-items: center;
        padding: 10px;
        background: #e6e6e6;
        background-attachment: fixed;
    }

    .container {
        max-width: 700px;
        width: 100%;
        background-image: radial-gradient(circle farthest-corner at 10% 20%,
                rgba(14, 174, 87, 1) 0%,
                rgba(12, 116, 117, 1) 90%);
        padding: 25px 30px;
        border-radius: 20px;
        position: relative;
        margin-top: 20px;
        height: 80vh;
        z-index: 30;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.5), 0 10px 10px rgba(0, 0, 0, 0.28);
    }

    .container .title {
        font-size: 25px;
        font-weight: 500;
        position: relative;
        margin-top: -15px;
        text-align: center;
        height: 40px;
        margin-bottom: 15px;
        color: white;
    }

    .container .title::before {
        content: "";
        position: absolute;
        bottom: 0;
        height: 3px;
        width: 5cm;
        background: white;
    }

    .container form .user-details {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 10px 0 12px 0;
        color: #fff;
    }

    .user-details .input-box input {
        height: 45px;
        width: 100%;
        outline: none;
        border-radius: 15px;
        border: 0.5px solid white;
        padding-left: 15px;
        font-size: 14px;
        border-bottom-width: 3px;
        border-right-width: 3px;
        transition: all 0.3s ease;
    }

    .user-details .input-box textarea {
        width: 100%;
        outline: none;
        border-radius: 15px;
        border: 0.5px solid white;
        padding-left: 15px;
        padding-top: 10px;
        font-size: 14px;
        transition: all 0.3s ease;
        border-bottom-width: 3px;
        border-right-width: 3px;
    }

    .user-details .input-box textarea:focus,
    .user-details .input-box textarea:valid {
        border-color: black;
    }

    .user-details .input-box input:focus,
    .user-details .input-box input:valid {
        border-color: black;
    }

    @media (max-width: 584px) {
        .container {
            max-width: 100%;
        }

        form .user-details .input-box {
            margin-bottom: 15px;
            width: 100%;
        }

        .container form .user-details {
            max-height: 300px;
            overflow-y: scroll;
        }

        .user-details::-webkit-scrollbar {
            width: 0;
        }
    }

    .all {
        display: block;
    }

    .all {
        text-align: center;
        margin-bottom: 20px;
        margin-left: 20%;
    }

    .basvuruTakip {
        background-color: whitesmoke;
        height: 20%;
        border-radius: 10px;
        color: black;
        margin-top: 20px;
        width: 70rem;
        text-align: left;
        padding-left: 30px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

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