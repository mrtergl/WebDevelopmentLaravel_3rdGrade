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

        </div>
        <div class="form-container sign-in-container">
            <form action="{{url('admin')}}" method="POST" id=admingirisformu>
                @csrf
                <h1 style="margin-bottom: 30px">Admin Girişi</h1>
                <input type="text" name="adminNo" placeholder="Admin No" required />
                <input type="password" name="adminSifre" placeholder="Şifre" required />
                <button id=girisyap onclick="girisYap()">Gönder</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">

                <div class="overlay-panel overlay-left">
                    <img src="img/logo.jpg" width="100" height="100">
                </div>
                <div class="overlay-panel overlay-right">
                    <img src="img/logo.jpg" width="100" height="100">
                    <h1>Kocaeli Üniversitesi Öğrenci Başvuru Platformu</h1>
                </div>
            </div>
        </div>
</body>

</html>