<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bahari;
use App\Models\NonBahari;
use App\Models\SeniBudaya;
use App\Models\Kuliner;
use App\Models\KerajinanKreatif;
use App\Models\Gallery;


class HomeController extends Controller
{
    public function index()
    {
        return view('tampilan.landingpage');
    }

    public function about()
    {
        return view('about.index');
    }

    public function kontak()
    {
        return view('kontak.index');
    }

    public function penginapan()
    {
        return view('penginapan.index');
    }
    public function galeri()
    {
        $galeris = Gallery::all();
        return view('galeri.index', compact('galeris'));
    }

    // Ragam budaya show function

    public function bahari()
    {
        $baharis = Bahari::all();
        return view('RagamBudaya.bahari', compact('baharis'));
    }

    public function showbahari($id)
    {
        $bahari = Bahari::findOrFail($id);
        return view('artikel.bahari', compact('bahari'));
    }

    public function nonbahari()
    {
        $nonBaharis = Nonbahari::all();
        return view('RagamBudaya.nonbahari', compact('nonBaharis'));
    }

    public function shownonbahari($id)
    {
        $nonBahari = Nonbahari::findOrFail($id);
        return view('artikel.nonbahari', compact('nonBahari'));
    }

        public function kuliner()
    {
        $kuliners = Kuliner::all();
        return view('RagamBudaya.kuliner', compact('kuliners'));
    }

    public function showkuliner($id)
    {
        $kuliner = Kuliner::findOrFail($id);
        return view('artikel.kuliner', compact('kuliner'));
    }

    public function senibudaya()
    {
        $senibudayas = Senibudaya::all();
        return view('RagamBudaya.senibudaya', compact('senibudayas'));
    }

    public function showsenibudaya($id)
    {
        $senibudaya = Senibudaya::findOrFail($id);
        return view('artikel.senibudaya', compact('senibudaya'));
    }

    public function kerajinan()
    {
        $kerajinans = KerajinanKreatif::all();
        return view('RagamBudaya.kerajinan', compact('kerajinans'));
    }

    public function showkerajinan($id)
    {
        $kerajinan = KerajinanKreatif::findOrFail($id);
        return view('artikel.kerajinankreatif', compact('kerajinan'));
    }
}
