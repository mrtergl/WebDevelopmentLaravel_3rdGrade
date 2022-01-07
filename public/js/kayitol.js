var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1;
var yyyy = today.getFullYear();

if (dd < 10) {
    dd = '0' + dd;
}

if (mm < 10) {
    mm = '0' + mm;
}    

today = yyyy + '-' + mm + '-' + dd;
document.getElementById("datefield").setAttribute("max", today);

const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
  container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
  container.classList.remove("right-panel-active");
}); 


  function validateForm() {

    var a = document.forms["kayitolform"]["ogr_no"].value;
    var b = document.forms["kayitolform"]["adsoyad"].value;
    var c = document.forms["kayitolform"]["email"].value;
    var d = document.forms["kayitolform"]["tc_no"].value;
    var e = document.forms["kayitolform"]["tel_no"].value;
    var f = document.getElementById("fakulteselect").value;
    var i = document.getElementById("bolumselect").value;
    var j = document.forms["kayitolform"]["adres"].value;
    var k = document.forms["kayitolform"]["sifre"].value;
    var l = document.forms["kayitolform"]["dogum_tarihi"].value;

    if (a == "" || b==""||c == "" || d==""||e == "" || f==""|| i == "" || j==""||k == "" || l==""||a.lenght<9||k.length<8) {
      alert("Lütfen Gerekli alanları doldurun");
      return false;
    }
    else{
      alert("Kayıt İşleminiz Başarıyla Gerçekleşti");
      return true;
    }
}

function girisYap() {

  var a = document.forms["girisformu"]["ogrnogiris"].value;
  var b = document.forms["girisformu"]["sifregiris"].value;
  

  if (a == "" || b=="") {
    alert("Lütfen Gerekli alanları doldurun");
    return false;
  }
  else{
    return true;
  }
}

function myFunction() {
  var x = document.getElementById("sifregiris");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
} 