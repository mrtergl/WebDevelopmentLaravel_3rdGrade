<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Devam Eden Başvurular</title>
    <link rel="stylesheet" href="css/bitenBasvurular.css">
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
        <nav class="nav">
            <ul class="menu">
                <li class="menu_item"><a href=#><i class="fas fa-home"></i></a></li>
                <li class="menu_item"><a href="/login">Ana Sayfa</a></li>
                <li class="menu_item"><a href="#">Başvurularım</a>
                    <ul class="submenu">
                        <li class="submenu_item"><a href='/bitenBasvurular'>Biten Başvurular</a></li>
                        <li class="submenu_item"><a href='/devamEdenBasvurular'>Devam Eden Başvurular</a></li>
                    </ul>
                <li class="menu_item"><a href="#">Başvuru Yap</a>
                    <ul class="submenu">
                        <li class="submenu_item"><a href='/dersintibak'>Ders İntibak Başvurusu</a></li>
                        <li class="submenu_item"><a href='yatayGecisBasvuru'>Yatay Geçiş Başvurusu</a></li>
                        <li class="submenu_item"><a href='/dgsbasvuru'>Dikey Geçiş Başvurusu</a></li>
                        <li class="submenu_item"><a href='/yazOKuluBasvuru'>Yaz Okulu Başvurusu</a></li>
                        <li class="submenu_item"><a href='/capbasvuru'>ÇAP Başvurusu</a></li>
                    </ul>
                <li class="menu_item"><a href="/bilgiDuzenle">Bilgilerimi Düzenle</a></li>
            </ul>
        </nav>
    </header>
    <div class="all">
        <div class="container" style="max-width: 100%;padding-left: 150px;padding-right: 150px;height: 95vh;overflow: auto;">
            <div class="title">Biten Başvurular</div>
            <div class="basvuruTakip" style="display: flex;">
                <div style="margin-top:20px;display:flex;width: 40%;">
                    <div style="margin-left: 2rem;">
                        <div style="display:flex;">
                            <i class="bi bi-filter-square" style="font-size: 1.5rem;margin-right: 1rem;"></i>
                            <h2>BAŞVURU ADI </h2>
                        </div>
                        <div style="display:flex;">
                            <i class="bi bi-calendar-event" style="font-size: 1.5rem;margin-right: 1rem;"></i>
                            <h2>BAŞVURU TARİHİ </h2>
                        </div>
                        <div style="display:flex;">
                            <i class="bi bi-clipboard-check" style="font-size: 1.5rem;margin-right: 1rem;"></i>
                            <h2>BAŞVURU DURUMU </h2>
                        </div>
                    </div>
                    <div style="float:inline-end;margin-left:2rem;">
                        <h2>:</h2>
                        <h2>:</h2>
                        <h2>:</h2>
                    </div>
                </div>
                <div style="margin-top:20px;text-align:left;color: black;display:flex;width: 50%;">
                    <div style="margin-left: 2rem;">
                        <div style="display:flex;">
                            <h2>YATAY GEÇİŞ BAŞVURUSU </h2>
                        </div>
                        <div style="display:flex;">
                            <h2>25.12.2021</h2>
                        </div>
                        <div style="display:flex;">
                            <h2>BAŞVURU SONLANDI </h2>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>