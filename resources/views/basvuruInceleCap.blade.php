<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BAŞVURU İNCELE</title>
    <link rel="stylesheet" href="css/bilgiDuzenle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

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
    </header>

    <div class="all">
        <div class="image">
            <img src="img/logo.jpg" width="100" height="100">
        </div>
        <div class="container" style="width: 75%;padding-top: 65px;margin-left: 13%; max-width:none;height:auto;margin-bottom:50px;">
            <div class="title">ÖĞRENCİ BAŞVURU BİLGİLERİ</div>
            <div style="display:flex;margin-top: 25px;margin-left: 65px;">
                <div style="color:aliceblue;">
                    <div style="display:flex;">
                        <i class="bi bi-filter-square" style="font-size: 1.5rem;margin-right: 1rem;"></i>
                        <h3>Öğrenci No </h3>
                    </div>
                    <div style="display:flex;">
                        <i class="bi bi-filter-square" style="font-size: 1.5rem;margin-right: 1rem;"></i>
                        <h3>Ad-Soyad </h3>
                    </div>
                    <div style="display:flex;">
                        <i class="bi bi-filter-square" style="font-size: 1.5rem;margin-right: 1rem;"></i>
                        <h3>Başvuru Adı </h3>
                    </div>
                    <div style="display:flex;">
                        <i class="bi bi-calendar-event" style="font-size: 1.5rem;margin-right: 1rem;"></i>
                        <h3>Başvuru Tarihi </h3>
                    </div>
                    <div style="display:flex;">
                        <i class="bi bi-clipboard-check" style="font-size: 1.5rem;margin-right: 1rem;"></i>
                        <h3>E-posta</h3>
                    </div>
                    <div style="display:flex;">
                        <i class="bi bi-clipboard-check" style="font-size: 1.5rem;margin-right: 1rem;"></i>
                        <h3>Telefon No </h3>
                    </div>
                    <div style="display:flex;">
                        <i class="bi bi-clipboard-check" style="font-size: 1.5rem;margin-right: 1rem;"></i>
                        <h3>Bölüm </h3>
                    </div>
                    <div style="display:flex;">
                        <i class="bi bi-clipboard-check" style="font-size: 1.5rem;margin-right: 1rem;"></i>
                        <h3>Yıl </h3>
                    </div>
                    <div style="display:flex;">
                        <i class="bi bi-clipboard-check" style="font-size: 1.5rem;margin-right: 1rem;"></i>
                        <h3>Başvurulan Üniversite </h3>
                    </div>
                    <div style="display:flex;">
                        <i class="bi bi-clipboard-check" style="font-size: 1.5rem;margin-right: 1rem;"></i>
                        <h3>Başvurulan Fakülte</h3>
                    </div>
                    <div style="display:flex;">
                        <i class="bi bi-clipboard-check" style="font-size: 1.5rem;margin-right: 1rem;"></i>
                        <h3>Not Ortalaması </h3>
                    </div>
                    <div style="display:flex;">
                        <i class="bi bi-clipboard-check" style="font-size: 1.5rem;margin-right: 1rem;"></i>
                        <h3>Öğrenciye ait başvuru belgeleri </h3>
                    </div>
                </div>

                <div style="float:inline-end;margin-left: 30px;color:aliceblue;">
                    <h3>:</h3>
                    <h3>:</h3>
                    <h3>:</h3>
                    <h3>:</h3>
                    <h3>:</h3>
                    <h3>:</h3>
                    <h3>:</h3>
                    <h3>:</h3>
                    <h3>:</h3>
                    <h3>:</h3>
                    <h3>:</h3>
                    <h3>:</h3>
                    <h3>:</h3>
                    <h3>:</h3>
                </div>
                <div style="color: black;display:flex;margin-left: 35px;">
                    <div style="width: 330px;">
                        <div style="display:flex;">
                            <h4>{{$bilgiler['tc_no']}}</h4>
                        </div>
                        <div style="display:flex;">
                            <h4>{{$bilgiler['ogr_no']}}</h4>
                        </div>
                        <div style="display:flex;">
                            <h4>{{$bilgiler['adsoyad']}}</h4>
                        </div>
                        <div style="display:flex;">
                            <h4>Çap Başvurusu</h4>
                        </div>
                        <div style="display:flex;">
                            <h4>{{$bilgiler['tarih']}}</h4>
                        </div>
                        <div style="display:flex;">
                            <h4>{{$bilgiler['email']}}</h4>
                        </div>
                        <div style="display:flex;">
                            <h4>{{$bilgiler['tel_no']}}</h4>
                        </div>
                        <div style="display:flex;">
                            <h4>{{$bilgiler['fakulte']}}</h4>
                        </div>
                        <div style="display:flex;">
                            <h4>{{$bilgiler['bolum']}}</h4>
                        </div>
                        <div style="display:flex;">
                            <h4>{{$bilgiler['sinif']}}</h4>
                        </div>
                        <div style="display:flex;">
                            <h4>{{$bilgiler['ogrenim']}}</h4>
                        </div>
                        <div style="display:flex;">
                            <h4>{{$bilgiler['bas_fakulte']}}</h4>
                        </div>
                        <div style="display:flex;">
                            <h4>{{$bilgiler['bas_bolum']}}</h4>
                        </div>
                        <div style="display:flex;">
                            <h4><a href="{{$bilgiler['EK1']}}"><button type="button" class="btn btn-light btn-lg" style="width: max-content;">Transkript</button></a></h4>
                        </div>
                        <div style="display:flex;">
                            <h4><a href="{{$bilgiler['EK2']}}"><button type="button" class="btn btn-light btn-lg" style="width: max-content;">İkinci Anadal Taban Puanını Gösteren Belge</button></a></h4>
                        </div>
                        <div style="display:flex;">
                            <h4><a href="{{$bilgiler['EK3']}}"><button type="button" class="btn btn-light btn-lg" style="width: max-content;">ÇAP Başvuru Formu</button></a></h4>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    @if($bilgiler['onayD'] == 'ONAY BEKLİYOR')
    <div style="display:flex; margin-bottom:55px; margin-top:25px;margin-left: 40%;">
        <button type="button" class="btn btn-success btn-lg" style="width: 12rem;margin-right:10px;height:4rem;" data-bs-toggle="modal" data-bs-target="#onaylaModal">ONAYLA</button>
        <button type="button" class="btn btn-danger btn-lg" style="width: 12rem;" data-bs-toggle="modal" data-bs-target="#reddetModal">REDDET</button>
    </div>
    <div class="modal fade" id="onaylaModal" tabindex="-1" aria-labelledby="onaylaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">BAŞVURU KAYDEDİLİYOR</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-dialog modal-dialog-centered" style="text-align: center;">
                    {{$bilgiler['ogr_no']}} numaralı öğrencinin cAP başvrusu onaylanacak. Devam etmek istediğinize emin
                    misiniz?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">HAYIR</button>
                    <form method="POST" name="basvuruOnaylaYatayGecis">
                        @csrf
                        <input type="submit" class="btn btn-success" value="EVET"></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="reddetModal" tabindex="-1" aria-labelledby="reddetModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">BAŞVURU REDDEDİLİYOR</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-dialog modal-dialog-centered" style="text-align: center;">>
                    {{$bilgiler['ogr_no']}} numaralı öğrencinin Cap Basvurusu reddedilecek. Devam etmek istediğinize emin
                    misiniz?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">HAYIR</button>
                    <form method="POST" action="/capR?numara=<?php echo $bilgiler['ogr_no'] ?>">
                        @csrf
                        <input type="submit" class="btn btn-secondary" value="EVET"></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endif
</body>

</html>