<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bahari;
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
        return view('RagamBudaya.Nonbahari');
    }

    public function kuliner()
    {
        return view('RagamBudaya.kuliner');
    }

    public function senibudaya()
    {
        return view('RagamBudaya.SeniBudaya');
    }

    public function kerajinan()
    {
        return view('RagamBudaya.kerajinan');
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

    /*

    public function forum()
    {
        return view('forum.index');
    }

    public function twit()
    {
        return view('forum.form');
    }
    */

}
