<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Kreait\Firebase\Database;
use Kreait\Firebase\Storage;
use Kreait\Firebase\Firestore;

class AdminController extends Controller
{
    public function __construct(Database $database, Storage $storage)
    {
        $this->database = $database;
        $this->tablename = 'ogrenciler';
        $this->storage = $storage;
    }

    public function adminCAP()
    {

        $degerler = $this->database->getReference('CapBasvuru')->getValue();
        return view('adminCAP', compact('degerler'));
    }

    public function adminDersIntibak()
    {

        $degerler = $this->database->getReference('DersintibakBasvuru')->getValue();
        return view('adminDersIntibak', compact('degerler'));
    }

    public function adminYazOkulu()
    {

        $degerler = $this->database->getReference('YazOkuluBasvuru')->getValue();
        return view('adminYazOkulu', compact('degerler'));
    }

    public function adminDGS()
    {

        $degerler = $this->database->getReference('DGSBasvuru')->getValue();
        return view('adminDGS', compact('degerler'));
    }

    public function adminYatayGecis()
    {

        $degerler = $this->database->getReference('YatayGecisBasvuru')->getValue();
        return view('adminYatayGecis', compact('degerler'));
    }
    public function adminBasvuruIncele(Request $request)
    {
        $numara = $request->numara;
        $bilgiler = $this->database->getReference('YazOkuluBasvuru')->getChild($numara)->getValue();
        $numara = $request->ogr_no;

        return view('adminBasvuruIncele', compact('numara', 'bilgiler'));
    }
    public function adminBasvuruInceleYatayGecis(Request $request)
    {
        $numara = $request->numara;
        $bilgiler = $this->database->getReference('YatayGecisBasvuru')->getChild($numara)->getValue();
        return view('basvuruInceleYatayGecis', compact('numara', 'bilgiler'));
    }
    public function adminBasvuruInceleCap(Request $request)
    {
        $numara = $request->numara;
        $bilgiler = $this->database->getReference('CapBasvuru')->getChild($numara)->getValue();
        return view('basvuruInceleCap', compact('numara', 'bilgiler'));
    }
    public function adminBasvuruInceleDGS(Request $request)
    {
        $numara = $request->numara;
        $bilgiler = $this->database->getReference('DGSBasvuru')->getChild($numara)->getValue();
        return view('basvuruInceleDgs', compact('numara', 'bilgiler'));
    }
    public function adminBasvuruInceleDersIntibak(Request $request)
    {
        $numara = $request->numara;
        $bilgiler = $this->database->getReference('DersintibakBasvuru')->getChild($numara)->getValue();
        return view('basvuruInceleDersIntibak', compact('numara', 'bilgiler'));
    }
    public function basvuruOnayla(Request $request)
    {
        $numara = $request->numara;
        $onayD = 'ONAYLANDI';
        $basvuruOnay =  ['onayD' => $onayD];
        $this->database->getReference('YazOkuluBasvuru/' . $numara)->update($basvuruOnay);
        header("Location:/adminGiris");
        exit();
    }
    public function basvuruOnaylaYatayGecis(Request $request)
    {
        $numara = $request->numara;
        $onayD = 'ONAYLANDI';
        var_dump($numara);
        $basvuruOnay =  ['onayD' => $onayD];
        $this->database->getReference('YatayGecisBasvuru/' . $numara)->update($basvuruOnay);
        header("Location:/adminGiris");
        exit();
    }
    public function basvuruOnaylaDersIntibak(Request $request)
    {
        $numara = $request->numara;
        $onayD = 'ONAYLANDI';
        $basvuruOnay =  ['onayD' => $onayD];
        $this->database->getReference('DersintibakBasvuru/' . $numara)->update($basvuruOnay);
        header("Location:/adminGiris");
        exit();
    }
    public function basvuruOnaylaCap(Request $request)
    {
        $numara = $request->numara;
        $onayD = 'ONAYLANDI';
        $basvuruOnay =  ['onayD' => $onayD];
        $this->database->getReference('CapBasvuru/' . $numara)->update($basvuruOnay);
        header("Location:/adminGiris");
        exit();
    }
    public function basvuruOnaylaDgs(Request $request)
    {
        $numara = $request->numara;
        $onayD = 'ONAYLANDI';
        $basvuruOnay =  ['onayD' => $onayD];
        $this->database->getReference('DGSBasvuru/' . $numara)->update($basvuruOnay);
        header("Location:/adminGiris");
        exit();
    }
    public function basvuruReddet(Request $request)
    {

        $numara = $request->numara;
        $onayD = 'REDDEDİLDİ';
        $basvuruOnay =  ['onayD' => $onayD];
        $this->database->getReference('YazOkuluBasvuru/' . $numara)->update($basvuruOnay);
        header("Location:/adminGiris");
        exit();
    }

    public function basvuruReddetCap(Request $request)
    {

        $numara = $request->numara;
        $onayD = 'REDDEDİLDİ';
        $basvuruOnay =  ['onayD' => $onayD];
        $this->database->getReference('YazOkuluBasvuru/' . $numara)->update($basvuruOnay);
        header("Location:/adminGiris");
        exit();
    }

    public function basvuruReddetYatay(Request $request)
    {

        $numara = $request->numara;
        $onayD = 'REDDEDİLDİ';
        $basvuruOnay =  ['onayD' => $onayD];
        $this->database->getReference('YatayGecisBasvuru/' . $numara)->update($basvuruOnay);
        header("Location:/adminGiris");
        exit();
    }

    public function basvuruReddetDGS(Request $request)
    {

        $numara = $request->numara;
        $onayD = 'REDDEDİLDİ';
        $basvuruOnay =  ['onayD' => $onayD];
        $this->database->getReference('DGSBasvuru/' . $numara)->update($basvuruOnay);
        header("Location:/adminGiris");
        exit();
    }

    public function basvuruReddetDersI(Request $request)
    {

        $numara = $request->numara;
        $onayD = 'REDDEDİLDİ';
        $basvuruOnay =  ['onayD' => $onayD];
        $this->database->getReference('DersintibakBasvuru/' . $numara)->update($basvuruOnay);
        header("Location:/adminGiris");
        exit();
    }


    public function yazokuluR(Request $request)
    {
        $numara = $request->numara;
        return view('yazokuluR', compact('numara'));
    }

    public function yataygecisR(Request $request)
    {
        $numara = $request->numara;
        return view('yataygecisR', compact('numara'));
    }

    public function dgsR(Request $request)
    {
        $numara = $request->numara;
        return view('dgsR', compact('numara'));
    }

    public function dersintibakR(Request $request)
    {
        $numara = $request->numara;
        return view('dersintibakR', compact('numara'));
    }

    public function capR(Request $request)
    {
        $numara = $request->numara;
        return view('capR', compact('numara'));
    }

    public function adminGiris(Request $request)
    {
        $numara = $request->adminNo;
        $sifre = $request->adminSifre;

        $admin = $this->database->getReference('adminler/')->getChild('admin')->getChild('adminNo')->getValue();
        $adminSifre = $this->database->getReference('adminler/')->getChild('admin')->getChild('sifre')->getValue();
        if ($admin == $numara  & $sifre == $adminSifre) {
            header("Location:/adminGiris");
            exit();
        } else {
            header("Location:/admin");
            exit();
        }
    }

    public function adminYazOkuluOnayli()
    {

        $degerler = $this->database->getReference('YazOkuluBasvuru')->getValue();
        return view('adminYazOkuluOnayli', compact('degerler'));
    }
    public function adminYazOkuluRed()
    {

        $degerler = $this->database->getReference('YazOkuluBasvuru')->getValue();
        return view('adminYazOkuluRed', compact('degerler'));
    }
    public function adminYatayGecisOnayli()
    {

        $degerler = $this->database->getReference('YatayGecisBasvuru')->getValue();
        return view('adminYatayGecisOnayli', compact('degerler'));
    }
    public function adminYatayGecisRed()
    {
        $degerler = $this->database->getReference('YatayGecisBasvuru')->getValue();
        return view('adminYatayGecisRed', compact('degerler'));
    }
    public function adminCAPOnayli()
    {

        $degerler = $this->database->getReference('CapBasvuru')->getValue();
        return view('adminCAPOnayli', compact('degerler'));
    }
    public function adminCAPRed()
    {
        $degerler = $this->database->getReference('CapBasvuru')->getValue();
        return view('adminCAPRed', compact('degerler'));
    }

    public function adminDGSOnayli()
    {

        $degerler = $this->database->getReference('DGSBasvuru')->getValue();
        return view('adminDGSOnayli', compact('degerler'));
    }
    public function adminDGSRed()
    {
        $degerler = $this->database->getReference('DGSBasvuru')->getValue();
        return view('adminDGSRed', compact('degerler'));
    }

    public function adminDersIntibakOnayli()
    {

        $degerler = $this->database->getReference('DersintibakBasvuru')->getValue();
        return view('adminDersIntibakOnayli', compact('degerler'));
    }
    public function adminDersIntibakRed()
    {
        $degerler = $this->database->getReference('DersintibakBasvuru')->getValue();
        return view('adminDersIntibakRed', compact('degerler'));
    }
}
