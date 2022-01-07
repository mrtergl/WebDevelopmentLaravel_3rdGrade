<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Kreait\Firebase\Auth;
use Kreait\Firebase\Database;
use Kreait\Firebase\Storage;
use Kreait\Firebase\Firestore;
use PDF;


class UserController extends Controller
{
    public function __construct(Database $database, Storage $storage)
    {
        $this->database = $database;
        $this->tablename = 'ogrenciler';
        $this->storage = $storage;
    }

    //          DOSYA YÜKLEME
    public function dersintibakBelge(Request $request)
    {
        $numara = $request->numara;
        $image = $request->EK1;
        $student   = app('firebase.firestore')->database()->collection('PDF')->document('defT5uT7SDu9K5RFtIdl');
        $firebase_storage_path = 'PDF/';
        $name     = $numara . '.DersIntibakBasvuru';
        $localfolder = public_path('firebase-temp-uploads') . '/';
        $extension = 'pdf';
        $file      = $name . '.' . $extension;
        if ($image->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder . $file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);

            unlink($localfolder . $file);
        }

        $expiresAt = new \DateTime('2040-01-01');
        $ek1Reference = app('firebase.storage')->getBucket()->object("PDF/" . $numara . ".DersIntibakBasvuru.pdf");
        $ek1 = $ek1Reference->signedUrl($expiresAt);



        $image = $request->EK2;
        $student   = app('firebase.firestore')->database()->collection('PDF')->document('defT5uT7SDu9K5RFtIdy');
        $firebase_storage_path = 'PDF/';
        $name     = $numara . '.DersIntibakTranskript';
        $localfolder = public_path('firebase-temp-uploads') . '/';
        $extension = 'pdf';
        $file      = $name . '.' . $extension;
        if ($image->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder . $file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
            unlink($localfolder . $file);
        }

        $expiresAt = new \DateTime('2040-01-01');
        $ek2Reference = app('firebase.storage')->getBucket()->object("PDF/" . $numara . ".DersIntibakTranskript.pdf");
        $ek2 = $ek2Reference->signedUrl($expiresAt);

        $image = $request->EK3;
        $student   = app('firebase.firestore')->database()->collection('PDF')->document('defT5uT7SDu9K5RFtIdy');
        $firebase_storage_path = 'PDF/';
        $name     = $numara . '.DersIntibakBelge';
        $localfolder = public_path('firebase-temp-uploads') . '/';
        $extension = 'pdf';
        $file      = $name . '.' . $extension;
        if ($image->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder . $file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
            unlink($localfolder . $file);
        }

        $expiresAt = new \DateTime('2040-01-01');
        $ek3Reference = app('firebase.storage')->getBucket()->object("PDF/" . $numara . ".DersIntibakBelge.pdf");
        $ek3 = $ek3Reference->signedUrl($expiresAt);

        $postData = [
            'EK1' => $ek1,
            'EK2' => $ek2,
            'EK3' => $ek3,
        ];

        $postRef = $this->database->getReference('DersintibakBasvuru/' . $numara)->update($postData);
        header("Location:/login?numara=" . $numara);
        exit();
    }

    public function dersintibakB(Request $request)
    {
        $numara = $request->numara;
        return view('BELGE/dersintibakBELGE', compact('numara'));
    }

    public function capbasvurubelge(Request $request)
    {
        $numara = $request->numara;
        $image = $request->EK1;
        $student   = app('firebase.firestore')->database()->collection('PDF')->document('defT5uT7SDu9K5RFtIdl');
        $firebase_storage_path = 'PDF/';
        $name     = $numara . '.CAPTranskript';
        $localfolder = public_path('firebase-temp-uploads') . '/';
        $extension = 'pdf';
        $file      = $name . '.' . $extension;
        if ($image->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder . $file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
            unlink($localfolder . $file);
        }

        $expiresAt = new \DateTime('2040-01-01');
        $ek1Reference = app('firebase.storage')->getBucket()->object("PDF/" . $numara . ".CAPTranskript.pdf");
        $ek1 = $ek1Reference->signedUrl($expiresAt);

        $image = $request->EK2;
        $student   = app('firebase.firestore')->database()->collection('PDF')->document('defT5uT7SDu9K5RFtIdy');
        $firebase_storage_path = 'PDF/';
        $name     = $numara . '.CAPBasari';
        $localfolder = public_path('firebase-temp-uploads') . '/';
        $extension = 'pdf';
        $file      = $name . '.' . $extension;
        if ($image->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder . $file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
            unlink($localfolder . $file);
        }

        $expiresAt = new \DateTime('2040-01-01');
        $ek2Reference = app('firebase.storage')->getBucket()->object("PDF/" . $numara . ".CAPBasari.pdf");
        $ek2 = $ek2Reference->signedUrl($expiresAt);

        $image = $request->EK3;
        $student   = app('firebase.firestore')->database()->collection('PDF')->document('defT5uT7SDu9K5RFtIdy');
        $firebase_storage_path = 'PDF/';
        $name     = $numara . '.CAPBasvuru';
        $localfolder = public_path('firebase-temp-uploads') . '/';
        $extension = 'pdf';
        $file      = $name . '.' . $extension;
        if ($image->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder . $file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
            unlink($localfolder . $file);
        }
        $expiresAt = new \DateTime('2040-01-01');
        $ek3Reference = app('firebase.storage')->getBucket()->object("PDF/" . $numara . ".CAPBasvuru.pdf");
        $ek3 = $ek3Reference->signedUrl($expiresAt);

        $postData = [
            'EK1' => $ek1,
            'EK2' => $ek2,
            'EK3' => $ek3,
        ];

        $postRef = $this->database->getReference('CapBasvuru/' . $numara)->update($postData);
        header("Location:/login?numara=" . $numara);
        exit();
    }

    public function capbasvuruB(Request $request)
    {
        $numara = $request->numara;
        return view('BELGE/capbasvuruBELGE', compact('numara'));
    }

    public function dgsbelge(Request $request)
    {
        $numara = $request->numara;
        $image = $request->EK1;
        $student   = app('firebase.firestore')->database()->collection('PDF')->document('defT5uT7SDu9K5RFtIdl');
        $firebase_storage_path = 'PDF/';
        $name     = $numara . '.DGSYabanciDil';
        $localfolder = public_path('firebase-temp-uploads') . '/';
        $extension = 'pdf';
        $file      = $name . '.' . $extension;
        if ($image->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder . $file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
            unlink($localfolder . $file);
        }

        $expiresAt = new \DateTime('2040-01-01');
        $ek1Reference = app('firebase.storage')->getBucket()->object("PDF/" . $numara . ".DGSYabanciDil.pdf");
        $ek1 = $ek1Reference->signedUrl($expiresAt);


        $image = $request->EK2;
        $student   = app('firebase.firestore')->database()->collection('PDF')->document('defT5uT7SDu9K5RFtIdy');
        $firebase_storage_path = 'PDF/';
        $name     = $numara . '.DGSTranskript';
        $localfolder = public_path('firebase-temp-uploads') . '/';
        $extension = 'pdf';
        $file      = $name . '.' . $extension;
        if ($image->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder . $file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
            unlink($localfolder . $file);
        }

        $expiresAt = new \DateTime('2040-01-01');
        $ek2Reference = app('firebase.storage')->getBucket()->object("PDF/" . $numara . ".DGSYabanciDil.pdf");
        $ek2 = $ek2Reference->signedUrl($expiresAt);

        $image = $request->EK3;
        $student   = app('firebase.firestore')->database()->collection('PDF')->document('defT5uT7SDu9K5RFtIdy');
        $firebase_storage_path = 'PDF/';
        $name     = $numara . '.DGSDersicerikleri';
        $localfolder = public_path('firebase-temp-uploads') . '/';
        $extension = 'pdf';
        $file      = $name . '.' . $extension;
        if ($image->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder . $file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
            unlink($localfolder . $file);
        }

        $expiresAt = new \DateTime('2040-01-01');
        $ek3Reference = app('firebase.storage')->getBucket()->object("PDF/" . $numara . ".DGSDersicerikleri.pdf");
        $ek3 = $ek3Reference->signedUrl($expiresAt);



        $image = $request->EK4;
        $student   = app('firebase.firestore')->database()->collection('PDF')->document('defT5uT7SDu9K5RFtIdl');
        $firebase_storage_path = 'PDF/';
        $name     = $numara . '.DGSBasvuru';
        $localfolder = public_path('firebase-temp-uploads') . '/';
        $extension = 'pdf';
        $file      = $name . '.' . $extension;
        if ($image->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder . $file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);

            unlink($localfolder . $file);
        }

        $expiresAt = new \DateTime('2040-01-01');
        $ek4Reference = app('firebase.storage')->getBucket()->object("PDF/" . $numara . ".DGSBasvuru.pdf");
        $ek4 = $ek4Reference->signedUrl($expiresAt);

        $postData = [
            'EK1' => $ek1,
            'EK2' => $ek2,
            'EK3' => $ek3,
            'EK4' => $ek4
        ];

        $postRef = $this->database->getReference('DGSBasvuru/' . $numara)->update($postData);
        header("Location:/login?numara=" . $numara);
        exit();
    }

    public function dgsB(Request $request)
    {
        $numara = $request->numara;
        return view('BELGE/dgsBELGE', compact('numara'));
    }

    public function yazokulubelge(Request $request)
    {
        $numara = $request->numara;
        $image = $request->EK1;
        $student   = app('firebase.firestore')->database()->collection('PDF')->document('defT5uT7SDu9K5RFtIdl');
        $firebase_storage_path = 'PDF/';
        $name     = $numara . '.YazOkuluTranskript';
        $localfolder = public_path('firebase-temp-uploads') . '/';
        $extension = 'pdf';
        $file      = $name . '.' . $extension;
        if ($image->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder . $file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
            unlink($localfolder . $file);
        }

        $expiresAt = new \DateTime('2040-01-01');
        $ek1Reference = app('firebase.storage')->getBucket()->object("PDF/" . $numara . ".YazOkuluTranskript.pdf");
        $ek1 = $ek1Reference->signedUrl($expiresAt);

        $image = $request->EK2;
        $student   = app('firebase.firestore')->database()->collection('PDF')->document('defT5uT7SDu9K5RFtIdy');
        $firebase_storage_path = 'PDF/';
        $name     = $numara . '.YazOkuluBasariPuan';
        $localfolder = public_path('firebase-temp-uploads') . '/';
        $extension = 'pdf';
        $file      = $name . '.' . $extension;
        if ($image->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder . $file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
            unlink($localfolder . $file);
        }

        $expiresAt = new \DateTime('2040-01-01');
        $ek2Reference = app('firebase.storage')->getBucket()->object("PDF/" . $numara . ".YazOkuluBasariPuan.pdf");
        $ek2 = $ek2Reference->signedUrl($expiresAt);

        $image = $request->EK3;
        $student   = app('firebase.firestore')->database()->collection('PDF')->document('defT5uT7SDu9K5RFtIdy');
        $firebase_storage_path = 'PDF/';
        $name     = $numara . '.YazOkuluDersler';
        $localfolder = public_path('firebase-temp-uploads') . '/';
        $extension = 'pdf';
        $file      = $name . '.' . $extension;
        if ($image->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder . $file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
            unlink($localfolder . $file);
        }

        $expiresAt = new \DateTime('2040-01-01');
        $ek3Reference = app('firebase.storage')->getBucket()->object("PDF/" . $numara . ".YazOkuluDersler.pdf");
        $ek3 = $ek3Reference->signedUrl($expiresAt);

        $image = $request->EK4;
        $student   = app('firebase.firestore')->database()->collection('PDF')->document('defT5uT7SDu9K5RFtIdl');
        $firebase_storage_path = 'PDF/';
        $name     = $numara . '.YazOkuluAlinanDersler';
        $localfolder = public_path('firebase-temp-uploads') . '/';
        $extension = 'pdf';
        $file      = $name . '.' . $extension;
        if ($image->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder . $file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);

            unlink($localfolder . $file);
        }

        $expiresAt = new \DateTime('2040-01-01');
        $ek4Reference = app('firebase.storage')->getBucket()->object("PDF/" . $numara . ".YazOkuluAlinanDersler.pdf");
        $ek4 = $ek4Reference->signedUrl($expiresAt);

        $image = $request->EK5;
        $student   = app('firebase.firestore')->database()->collection('PDF')->document('defT5uT7SDu9K5RFtIdl');
        $firebase_storage_path = 'PDF/';
        $name     = $numara . '.YazOkuluBasvuru';
        $localfolder = public_path('firebase-temp-uploads') . '/';
        $extension = 'pdf';
        $file      = $name . '.' . $extension;
        if ($image->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder . $file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);

            unlink($localfolder . $file);
        }

        $expiresAt = new \DateTime('2040-01-01');
        $ek5Reference = app('firebase.storage')->getBucket()->object("PDF/" . $numara . ".YazOkuluBasvuru.pdf");
        $ek5 = $ek5Reference->signedUrl($expiresAt);

        $postData = [
            'EK1' => $ek1,
            'EK2' => $ek2,
            'EK3' => $ek3,
            'EK4' => $ek4,
            'EK5' => $ek4,

        ];

        $postRef = $this->database->getReference('YazOkuluBasvuru/' . $numara)->update($postData);
        header("Location:/login?numara=" . $numara);
        exit();
    }

    public function yazokuluB(Request $request)
    {
        $numara = $request->numara;
        return view('BELGE/yazokuluBELGE', compact('numara'));
    }

    public function yataygecisbelge(Request $request)
    {
        $numara = $request->numara;
        $image = $request->EK1;
        $student   = app('firebase.firestore')->database()->collection('PDF')->document('defT5uT7SDu9K5RFtIdl');
        $firebase_storage_path = 'PDF/';
        $name     = $numara . '.YatayGecisTranskript';
        $localfolder = public_path('firebase-temp-uploads') . '/';
        $extension = 'pdf';
        $file      = $name . '.' . $extension;
        if ($image->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder . $file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
            unlink($localfolder . $file);
        }

        $expiresAt = new \DateTime('2040-01-01');
        $ek1Reference = app('firebase.storage')->getBucket()->object("PDF/" . $numara . ".YatayGecisTranskript.pdf");
        $ek1 = $ek1Reference->signedUrl($expiresAt);

        $image = $request->EK2;
        $student   = app('firebase.firestore')->database()->collection('PDF')->document('defT5uT7SDu9K5RFtIdy');
        $firebase_storage_path = 'PDF/';
        $name     = $numara . '.YatayGecisSinavB';
        $localfolder = public_path('firebase-temp-uploads') . '/';
        $extension = 'pdf';
        $file      = $name . '.' . $extension;
        if ($image->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder . $file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
            unlink($localfolder . $file);
        }

        $expiresAt = new \DateTime('2040-01-01');
        $ek2Reference = app('firebase.storage')->getBucket()->object("PDF/" . $numara . ".YatayGecisSinavB.pdf");
        $ek2 = $ek2Reference->signedUrl($expiresAt);

        $image = $request->EK3;
        $student   = app('firebase.firestore')->database()->collection('PDF')->document('defT5uT7SDu9K5RFtIdy');
        $firebase_storage_path = 'PDF/';
        $name     = $numara . '.YatayGecisDil';
        $localfolder = public_path('firebase-temp-uploads') . '/';
        $extension = 'pdf';
        $file      = $name . '.' . $extension;
        if ($image->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder . $file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
            unlink($localfolder . $file);
        }

        $expiresAt = new \DateTime('2040-01-01');
        $ek3Reference = app('firebase.storage')->getBucket()->object("PDF/" . $numara . ".YatayGecisDil.pdf");
        $ek3 = $ek3Reference->signedUrl($expiresAt);

        $image = $request->EK4;
        $student   = app('firebase.firestore')->database()->collection('PDF')->document('defT5uT7SDu9K5RFtIdl');
        $firebase_storage_path = 'PDF/';
        $name     = $numara . '.YatayGecisOgrenciB';
        $localfolder = public_path('firebase-temp-uploads') . '/';
        $extension = 'pdf';
        $file      = $name . '.' . $extension;
        if ($image->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder . $file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);

            unlink($localfolder . $file);
        }

        $expiresAt = new \DateTime('2040-01-01');
        $ek4Reference = app('firebase.storage')->getBucket()->object("PDF/" . $numara . ".YatayGecisOgrenciB.pdf");
        $ek4 = $ek4Reference->signedUrl($expiresAt);

        $image = $request->EK5;
        $student   = app('firebase.firestore')->database()->collection('PDF')->document('defT5uT7SDu9K5RFtIdl');
        $firebase_storage_path = 'PDF/';
        $name     = $numara . '.YatayGecisBasvuru';
        $localfolder = public_path('firebase-temp-uploads') . '/';
        $extension = 'pdf';
        $file      = $name . '.' . $extension;
        if ($image->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder . $file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);

            unlink($localfolder . $file);
        }

        $expiresAt = new \DateTime('2040-01-01');
        $ek5Reference = app('firebase.storage')->getBucket()->object("PDF/" . $numara . ".YatayGecisBasvuru.pdf");
        $ek5 = $ek5Reference->signedUrl($expiresAt);

        $postData = [
            'EK1' => $ek1,
            'EK2' => $ek2,
            'EK3' => $ek3,
            'EK4' => $ek4,
            'EK5' => $ek4,

        ];

        $postRef = $this->database->getReference('YatayGecisBasvuru/' . $numara)->update($postData);
        header("Location:/login?numara=" . $numara);
        exit();
    }


    public function yataygecisB(Request $request)
    {
        $numara = $request->numara;
        return view('BELGE/yataygecisBELGE', compact('numara'));
    }

    //              BAŞVURU SAYFALARI

    public function dersintibak(Request $request)
    {
        $numara = $request->numara;
        $fakulteler = [];
        $bolumler = [];
        $bilgiler = $this->database->getReference('ogrenciler')->getChild($numara)->getValue();
        $degerler = $this->database->getReference('fakulteler')->getValue();
        foreach ($degerler as $key => $value) {
            $fakulte = $key;
            array_push($fakulteler, $fakulte);
        }
        $degerlerbolum = $this->database->getReference('bolumler')->getValue();
        foreach ($degerlerbolum as $key => $value) {
            $bolum = $key;
            array_push($bolumler, $bolum);
        }
        return view('dersintibak', compact('fakulteler', 'bolumler', 'numara', 'bilgiler'));
    }

    public function dersintibakForm(Request $request)
    {
        $numara = $request->numara;
        $postData = [
            'ogr_no' => $request->ogr_no,
            'adsoyad' => $request->adsoyad,
            'email' => $request->email,
            'tc_no' => $request->tc_no,
            'tel_no' => $request->tel_no,
            'bolum' => $request->bolum,
            'fakulte' => $request->fakulte,
            'sinif' => $request->sinif,
            'ogrenim' => $request->ogrenim,
            'adres' => $request->adres,
            'o_uni' => $request->o_uni,
            'o_fakulte' => $request->o_fakulte,
            'tarih' => date('m/d/Y'),
            'onayD' => 'ONAY BEKLİYOR'
        ];
        $postRef = $this->database->getReference('DersintibakBasvuru')->getChild($request->ogr_no)->set($postData);

        //PDF KISMI
        $path = base_path('public/img/logo.jpg');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $pdf = PDF::loadView('PDF/dersintibakPDF', compact('pic', 'postData'));
        return $pdf->download('Ders İntibak Başvuru Formu.pdf');
        header("Location:/dersintibak?numara=" . $numara);
        exit();
    }

    public function dersintibakFormtoPDF(Request $request)
    {
        $numara = $request->numara;
        $postData = [
            'ogr_no' => $request->ogr_no,
            'adsoyad' => $request->adsoyad,
            'email' => $request->email,
            'tc_no' => $request->tc_no,
            'tel_no' => $request->tel_no,
            'bolum' => $request->bolum,
            'fakulte' => $request->fakulte,
            'sinif' => $request->sinif,
            'ogrenim' => $request->ogrenim,
            'adres' => $request->adres,
            'o_uni' => $request->o_uni,
            'o_fakulte' => $request->o_fakulte,
            'tarih' => date('m/d/Y'),
            'onayD' => 'ONAY BEKLİYOR',
            'basvuruKod' => 'dersIntibak'
        ];
    }

    public function kayitol()
    {
        $fakulteler = [];
        $bolumler = [];
        $degerler = $this->database->getReference('fakulteler')->getValue();
        foreach ($degerler as $key => $value) {
            $fakulte = $key;
            array_push($fakulteler, $fakulte);
        }
        $degerlerbolum = $this->database->getReference('bolumler')->getValue();
        foreach ($degerlerbolum as $key => $value) {
            $bolum = $key;
            array_push($bolumler, $bolum);
        }
        return view('kayitol', compact('fakulteler', 'bolumler'));
    }

    public function dgsbasvuru(Request $request)
    {
        $numara = $request->numara;
        $fakulteler = [];
        $bolumler = [];
        $degerler = $this->database->getReference('fakulteler')->getValue();
        $bilgiler = $this->database->getReference('ogrenciler')->getChild($numara)->getValue();
        foreach ($degerler as $key => $value) {
            $fakulte = $key;
            array_push($fakulteler, $fakulte);
        }
        $degerlerbolum = $this->database->getReference('bolumler')->getValue();
        foreach ($degerlerbolum as $key => $value) {
            $bolum = $key;
            array_push($bolumler, $bolum);
        }
        return view('dgsbasvuru', compact('fakulteler', 'bolumler', 'numara', 'bilgiler'));
    }

    public function dgsForm(Request $request)
    {
        $numara = $request->numara;
        $postData = [
            'ogr_no' => $request->ogr_no,
            'adsoyad' => $request->adsoyad,
            'email' => $request->email,
            'tc_no' => $request->tc_no,
            'tel_no' => $request->tel_no,
            'bolum' => $request->bolum,
            'fakulte' => $request->fakulte,
            'sinif' => $request->sinif,
            'ogrenim' => $request->ogrenim,
            'adres' => $request->adres,
            'bas_fakulte' => $request->bas_fakulte,
            'bas_bolum' => $request->bas_bolum,
            'tarih' => date('m/d/Y'),
            'onayD' => 'ONAY BEKLİYOR',
            'basvuruKod' => 'dgs'
        ];
        $postRef = $this->database->getReference('DGSBasvuru')->getChild($request->ogr_no)->set($postData);

        //PDF KISMI
        $path = base_path('public/img/logo.jpg');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $pdf = PDF::loadView('PDF/dgsPDF', compact('pic', 'postData'));
        return $pdf->download('Dikey Geçiş Sınavı Başvuru Formu.pdf');
        header("Location:/dgsbasvuru?numara=" . $numara);
        exit();
    }

    public function dgsFormtoPDF(Request $request)
    {
        $numara = $request->numara;
        $postData = [
            'ogr_no' => $request->ogr_no,
            'adsoyad' => $request->adsoyad,
            'email' => $request->email,
            'tc_no' => $request->tc_no,
            'tel_no' => $request->tel_no,
            'bolum' => $request->bolum,
            'fakulte' => $request->fakulte,
            'sinif' => $request->sinif,
            'ogrenim' => $request->ogrenim,
            'adres' => $request->adres,
            'o_uni' => $request->o_uni,
            'o_fakulte' => $request->o_fakulte,
            'tarih' => date('m/d/Y'),
            'onayD' => 'ONAY BEKLİYOR',
            'basvuruKod' => 'dgs'
        ];
    }

    public function capbasvuru(Request $request)
    {
        $numara = $request->numara;
        $fakulteler = [];
        $bolumler = [];
        $degerler = $this->database->getReference('fakulteler')->getValue();
        $bilgiler = $this->database->getReference('ogrenciler')->getChild($numara)->getValue();
        foreach ($degerler as $key => $value) {
            $fakulte = $key;
            array_push($fakulteler, $fakulte);
        }
        $degerlerbolum = $this->database->getReference('bolumler')->getValue();
        foreach ($degerlerbolum as $key => $value) {
            $bolum = $key;
            array_push($bolumler, $bolum);
        }
        return view('capbasvuru', compact('fakulteler', 'bolumler', 'numara', 'bilgiler'));
    }

    public function capbasvuruForm(Request $request)
    {
        $numara = $request->numara;
        $postData = [
            'ogr_no' => $request->ogr_no,
            'adsoyad' => $request->adsoyad,
            'email' => $request->email,
            'tc_no' => $request->tc_no,
            'tel_no' => $request->tel_no,
            'bolum' => $request->bolum,
            'fakulte' => $request->fakulte,
            'sinif' => $request->sinif,
            'ogrenim' => $request->ogrenim,
            'adres' => $request->adres,
            'bas_fakulte' => $request->bas_fakulte,
            'bas_bolum' => $request->bas_bolum,
            'tarih' => date('m/d/Y'),
            'onayD' => 'ONAY BEKLİYOR',
            'basvuruKod' => 'cap'
        ];
        $postRef = $this->database->getReference('CapBasvuru')->getChild($request->ogr_no)->set($postData);

        //PDF KISMI
        $path = base_path('public/img/logo.jpg');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $pdf = PDF::loadView('PDF/capPDF', compact('pic', 'postData'));
        return $pdf->download('Çift Anadal Programı Başvuru Formu.pdf');
        header("Location:/capbasvuru?numara=" . $numara);
        exit();
    }

    public function capFormtoPDF(Request $request)
    {
        $numara = $request->numara;
        $postData = [
            'ogr_no' => $request->ogr_no,
            'adsoyad' => $request->adsoyad,
            'email' => $request->email,
            'tc_no' => $request->tc_no,
            'tel_no' => $request->tel_no,
            'bolum' => $request->bolum,
            'fakulte' => $request->fakulte,
            'sinif' => $request->sinif,
            'ogrenim' => $request->ogrenim,
            'adres' => $request->adres,
            'o_uni' => $request->o_uni,
            'o_fakulte' => $request->o_fakulte,
            'tarih' => date('m/d/Y'),
            'onayD' => 'ONAY BEKLİYOR',
            'basvuruKod' => 'cap'
        ];
    }

    public function yataygecisbasvuru(Request $request)
    {
        $numara = $request->numara;
        $fakulteler = [];
        $bolumler = [];
        $degerler = $this->database->getReference('fakulteler')->getValue();
        $bilgiler = $this->database->getReference('ogrenciler')->getChild($numara)->getValue();
        foreach ($degerler as $key => $value) {
            $fakulte = $key;
            array_push($fakulteler, $fakulte);
        }
        $degerlerbolum = $this->database->getReference('bolumler')->getValue();
        foreach ($degerlerbolum as $key => $value) {
            $bolum = $key;
            array_push($bolumler, $bolum);
        }
        return view('yatayGecisBasvuru', compact('fakulteler', 'bolumler', 'numara', 'bilgiler'));
    }

    public function yataygecisForm(Request $request)
    {
        $numara = $request->numara;
        $postData = [
            'ogr_no' => $request->ogr_no,
            'adsoyad' => $request->adsoyad,
            'email' => $request->email,
            'tc_no' => $request->tc_no,
            'tel_no' => $request->tel_no,
            'bolum' => $request->bolum,
            'fakulte' => $request->fakulte,
            'sinif' => $request->sinif,
            'ogrenim' => $request->ogrenim,
            'adres' => $request->adres,
            'uni' => $request->uni,
            'agno' => $request->agno,
            'puan' => $request->puan,
            'ogTur' => $request->ogTur,
            'yil' => $request->yil,
            'Buni' => $request->Buni,
            'Bfakulte' => $request->Bfakulte,
            'Bbolum' => $request->Bbolum,
            'tarih' => date('m/d/Y'),
            'onayD' => 'ONAY BEKLİYOR',
            'basvuruKod' => 'yatayGecis'
        ];
        $postRef = $this->database->getReference('YatayGecisBasvuru')->getChild($request->ogr_no)->set($postData);

        //PDF KISMI
        $path = base_path('public/img/logo.jpg');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $pdf = PDF::loadView('PDF/yatayGecisPDF', compact('pic', 'postData'));
        return $pdf->download('Yatay Geçiş Başvuru Formu.pdf');
        header("Location:/yatayGecisBasvuru?numara=" . $numara);
        exit();
    }

    public function yataygecisFormtoPDF(Request $request)
    {
        $numara = $request->numara;
        $postData = [
            'ogr_no' => $request->ogr_no,
            'adsoyad' => $request->adsoyad,
            'email' => $request->email,
            'tc_no' => $request->tc_no,
            'tel_no' => $request->tel_no,
            'bolum' => $request->bolum,
            'fakulte' => $request->fakulte,
            'sinif' => $request->sinif,
            'adres' => $request->adres,
            'uni' => $request->uni,
            'agno' => $request->agno,
            'puan' => $request->puan,
            'ogTur' => $request->ogTur,
            'yil' => $request->yil,
            'Buni' => $request->Buni,
            'Bfakulte' => $request->Bfakulte,
            'Bbolum' => $request->Bbolum,
            'tarih' => date('m/d/Y'),
            'onayD' => 'ONAY BEKLİYOR',
            'basvuruKod' => 'yatayGecis'
        ];
    }

    public function login(Request $request)
    {
        $expiresAt = new \DateTime('2040-01-01');
        $imageReference = app('firebase.storage')->getBucket()->object("Images/" . $request->numara . ".png");
        if ($imageReference->exists())
            $image = $imageReference->signedUrl($expiresAt);
        $numara = $request->numara;
        $ad = $this->database->getReference('ogrenciler/' . $request->numara)->getChild('adsoyad')->getValue();
        $tc = $this->database->getReference('ogrenciler/' . $request->numara)->getChild('tc_no')->getValue();
        $fakulte = $this->database->getReference('ogrenciler/' . $request->numara)->getChild('fakulte')->getValue();
        $bolum = $this->database->getReference('ogrenciler/' . $request->numara)->getChild('bolum')->getValue();
        $email = $this->database->getReference('ogrenciler/' . $request->numara)->getChild('email')->getValue();
        $dogumt = $this->database->getReference('ogrenciler/' . $request->numara)->getChild('dogum_tarihi')->getValue();

        return view('login', compact('tc', 'ad', 'fakulte', 'bolum', 'email', 'dogumt', 'image', 'numara'));
    }

    public function yazOkuluBasvuru(Request $request)
    {
        $numara = $request->numara;
        $fakulteler = [];
        $bolumler = [];
        $degerler = $this->database->getReference('fakulteler')->getValue();
        $bilgiler = $this->database->getReference('ogrenciler')->getChild($numara)->getValue();
        foreach ($degerler as $key => $value) {
            $fakulte = $key;
            array_push($fakulteler, $fakulte);
        }
        $degerlerbolum = $this->database->getReference('bolumler')->getValue();
        foreach ($degerlerbolum as $key => $value) {
            $bolum = $key;
            array_push($bolumler, $bolum);
        }
        return view('yazOkuluBasvuru', compact('fakulteler', 'bolumler', 'numara', 'bilgiler'));
    }

    public function yazokuluForm(Request $request)
    {
        $numara = $request->numara;
        $postData = [
            'ogr_no' => $request->ogr_no,
            'adsoyad' => $request->adsoyad,
            'email' => $request->email,
            'tel_no' => $request->tel_no,
            'bolum' => $request->bolum,
            'ogTur' => $request->ogTur,
            'fakulte' => $request->fakulte,
            'sinif' => $request->sinif,
            'buni' => $request->buni,
            'adres' => $request->adres,
            'danisman' => $request->danisman,
            'tarih' => date('m/d/Y'),
            'onayD' => 'ONAY BEKLİYOR',
            'basvuruKod' => 'yazOkulu'
        ];
        $postRef = $this->database->getReference('YazOkuluBasvuru')->getChild($request->ogr_no)->set($postData);

        //PDF KISMI
        $path = base_path('public/img/logo.jpg');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $pdf = PDF::loadView('PDF/yazokuluPDF', compact('pic', 'postData'));
        return $pdf->download('Yaz Okulu Başvuru Formu.pdf');
        header("Location:/yazOkuluBasvuru?numara=" . $numara);
        exit();
    }

    public function yazokuluFormtoPDF(Request $request)
    {
        $numara = $request->numara;
        $postData = [
            'ogr_no' => $request->ogr_no,
            'adsoyad' => $request->adsoyad,
            'email' => $request->email,
            'tel_no' => $request->tel_no,
            'bolum' => $request->bolum,
            'fakulte' => $request->fakulte,
            'sinif' => $request->sinif,
            'buni' => $request->buni,
            'adres' => $request->adres,
            'danisman' => $request->danisman,
            'tarih' => date('m/d/Y'),
            'onayD' => 'ONAY BEKLİYOR',
            'basvuruKod' => 'yazOkulu'
        ];
    }

    //                 KAYIT OL
    public function store(Request $request)
    {
        $image = $request->img;
        $student   = app('firebase.firestore')->database()->collection('Image')->document('defT5uT7SDu9K5RFtIdl');
        $firebase_storage_path = 'Images/';
        $name     = $request->ogr_no;
        $localfolder = public_path('firebase-temp-uploads') . '/';
        $extension = 'png';
        $file      = $name . '.' . $extension;
        if ($image->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder . $file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
            unlink($localfolder . $file);
            echo 'success';
        } else {
            echo 'error';
        }

        $postData = [
            'ogr_no' => $request->ogr_no,
            'adsoyad' => $request->adsoyad,
            'email' => $request->email,
            'tc_no' => $request->tc_no,
            'tel_no' => $request->tel_no,
            'fakulte' => $request->fakulte,
            'bolum' => $request->bolum,
            'dogum_tarihi' => $request->dogum_tarihi,
            'adres' => $request->adres,
            'sifre' => $request->sifre,
        ];
        $postRef = $this->database->getReference('ogrenciler/')->getChild($request->ogr_no)->set($postData);
        if ($postRef) {
            return redirect('kayitol')->with('status', 'Contact added');
        } else {
            return redirect('kayitol')->with('status', 'Contact NOT added');
        }
    }


    // BİLGİ DÜZENLE

    public function bilgiDuzenleGet(Request $request)
    {
        $numara = $request->numara;
        $bilgiler = $this->database->getReference('ogrenciler')->getChild($numara)->getValue();
        return view('bilgiDuzenle', compact('numara', 'bilgiler'));
    }

    public function bilgiDuzenlePost(Request $request)
    {
        $numara = $request->numara;
        $postData = [
            'email' => $request->email,
            'adres' => $request->adres,
            'sifre' => $request->sifre,
            'tel_no' => $request->tel_no,
        ];
        $this->database->getReference('ogrenciler/' . $numara)->update($postData);
        header("Location:/login?numara=" . $numara);
        exit();
    }

    //              LOGİN KONTROL
    public function check(Request $request)
    {
        $numara = $request->ogrnogiris;
        $sifre = $request->sifregiris;

        $ogrno = $this->database->getReference('ogrenciler/')->getChild($numara)->getChild('ogr_no')->getValue();
        $psswrd = $this->database->getReference('ogrenciler/')->getChild($numara)->getChild('sifre')->getValue();

        if ($ogrno == $numara & $sifre == $psswrd) {
            return redirect()->route('LOGin', ['numara' => $numara]);
            exit();
        } else {
            header("Location:/kayitol");
            exit();
        }
    }

    //              PDF kısmı

    public function dersintibakpdf(Request $request)
    {
        $path = base_path('public\img\logo.jpg');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $dataa = [
            $numara = $request->numara,
            'date' => date('m/d/Y')

        ];
        $pdf = PDF::loadView('PDF\dersintibakPDF', $dataa, compact('pic'));
        return $pdf->download('Ders İntibak Başvuru Formu.pdf');
    }
    public function dgsbasvurupdf()
    {
        $path = base_path('public\img\logo.jpg');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $dataa = [

            'date' => date('m/d/Y')

        ];
        $pdf = PDF::loadView('PDF\dgsPDF', $dataa, compact('pic'));
        return $pdf->download('Dikey Geçiş Başvuru Formu.pdf');
    }

    public function yazokulupdf()
    {
        $path = base_path('public\img\logo.jpg');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $dataa = [

            'date' => date('m/d/Y')

        ];
        $pdf = PDF::loadView('PDF\yazokuluPDF', $dataa, compact('pic'));
        return $pdf->download('Yaz Okulu Başvuru Formu.pdf');
    }

    public function capbasvurupdf()
    {
        $path = base_path('public\img\logo.jpg');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $dataa = [

            'date' => date('YYYY-MM-DDTHH:MM:SS')

        ];
        $pdf = PDF::loadView('PDF\capPDF', $dataa, compact('pic'));
        return $pdf->download('Çift Anadal Programı Başvuru Formu.pdf');
    }

    public function yataygecispdf()
    {
        $path = base_path('public\img\logo.jpg');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $dataa = [

            'date' => date('YYYY-MM-DDTHH:MM:SS')

        ];
        $pdf = PDF::loadView('PDF\yatayGecisPDF', $dataa, compact('pic'));
        return $pdf->download('Yatay Geçiş Başvuru Formu.pdf');
    }
}
