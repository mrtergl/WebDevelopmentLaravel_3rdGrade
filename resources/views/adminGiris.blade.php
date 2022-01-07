<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    .basvuru {
        height: 300px;
        width: 300px;
        background-color: mediumseagreen;
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

    .all {
        display: block;
    }

    .all {
        text-align: center;
        margin-bottom: 20px;
        margin-left: 20%;
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
<div>
    <div class="container" style="margin-top: 5%;">
        <div class="row">
            <div class="col-6 col-sm-4" style="width: 50%;">
                <div class="d-grid gap-2">
                    <button class="btn btn-success" type="button" style="font-size: xx-large;">YAZ OKULU
                        BAŞVURULARI</button>
                    <a href="{{url('/adminYazOkulu')}}"><button class="btn btn-outline-primary" type="button" style="width: 100%;">GELEN BAŞVURULAR</button></a>
                    <a href="{{url('/adminYazOkuluOnayli')}}"><button class="btn btn-outline-primary" type="button" style="width: 100%;">ONAYLANAN BAŞVURULAR</button></a>
                    <a href="{{url('/adminYazOkuluRed')}}"><button class="btn btn-outline-primary" type="button" style="width: 100%;">REDDEDİLEN BAŞVURULAR</button></a>
                </div>
            </div>
            <div class="col-6 col-sm-4" style="width: 50%;">
                <div class="d-grid gap-2">
                    <button class="btn btn-warning" type="button" style="font-size: xx-large;">YATAY GEÇİŞ
                        BAŞVURULARI</button>
                    <a href="{{url('/adminYatayGecis')}}"><button class="btn btn-outline-primary" type="button" style="width: 100%;">GELEN BAŞVURULAR</button></a>
                    <a href="{{url('/adminYatayGecisOnayli')}}"><button class="btn btn-outline-primary" type="button" style="width: 100%;">ONAYLANAN BAŞVURULAR</button></a>
                    <a href="{{url('/adminYatayGecisRed')}}"><button class="btn btn-outline-primary" type="button" style="width: 100%;">REDDEDİLEN BAŞVURULAR</button></a>
                </div>
            </div>

            <div class="w-100 d-none d-md-block"></div>

            <div class="col-6 col-sm-4" style="width:50%;margin-top: 3%;">
                <div class="d-grid gap-2">
                    <button class="btn btn-info" type="button" style="font-size: xx-large;">ÇAP
                        BAŞVURULARI</button>
                    <a href="{{url('/adminCAP')}}"><button class="btn btn-outline-primary" type="button" style="width: 100%;">GELEN BAŞVURULAR</button></a>
                    <a href="{{url('/adminCAPOnayli')}}"><button class="btn btn-outline-primary" type="button" style="width: 100%;">ONAYLANAN BAŞVURULAR</button></a>
                    <a href="{{url('/adminCAPRed')}}"><button class="btn btn-outline-primary" type="button" style="width: 100%;">REDDEDİLEN BAŞVURULAR</button></a>
                </div>
            </div>
            <div class="col-6 col-sm-4" style="width: 50%;margin-top:3%;">
                <div class="d-grid gap-2">
                    <button class="btn btn-secondary" type="button" style="font-size: xx-large;">DGS
                        BAŞVURULARI</button></a>
                    <a href="{{url('/adminDGS')}}"><button class="btn btn-outline-primary" type="button" style="width: 100%;">GELEN BAŞVURULAR</button></a>
                    <a href="{{url('/adminDGSOnayli')}}"><button class="btn btn-outline-primary" type="button" style="width: 100%;">ONAYLANAN BAŞVURULAR</button></a>
                    <a href="{{url('/adminDGSRed')}}"><button class="btn btn-outline-primary" type="button" style="width: 100%;">REDDEDİLEN BAŞVURULAR</button></a>
                </div>
            </div>
            <div class="w-100 d-none d-md-block"></div>
            <div class="col-6 col-sm-4" style="width: 50%;margin-top: 3%;margin-left: 25%;">
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="button" style="font-size: xx-large;">DERS İNTİBAK
                        BAŞVURULARI</button>
                    <a href="{{url('/adminDersIntibak')}}"><button class="btn btn-outline-primary" type="button" style="width: 100%;">GELEN BAŞVURULAR</button></a>
                    <a href="{{url('/adminDersIntibakOnayli')}}"><button class="btn btn-outline-primary" type="button" style="width: 100%;">ONAYLANAN BAŞVURULAR</button></a>
                    <a href="{{url('/adminDersIntibakRed')}}"><button class="btn btn-outline-primary" type="button" style="width: 100%;">REDDEDİLEN BAŞVURULAR</button></a>
                </div>
            </div>
        </div>
    </div>