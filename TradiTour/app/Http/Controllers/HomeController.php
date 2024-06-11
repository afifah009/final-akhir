<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bahari;
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
        $recentBahariArticles = Bahari::latest()->take(6)->get();
        return view('RagamBudaya.bahari', compact('recentBahariArticles'));
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

    public function forum()
    {
        return view('forum.index');
    }

    public function kontak()
    {
        return view('kontak.index');
    }

        public function artikel()
    {
        return view('RagamBudaya.artikel');
    }

    public function penginapan()
    {
        return view('penginapan.index');
    }
    public function galeri()
    {
        return view('galeri.index');
    }
    public function twit()
    {
        return view('forum.form');
    }

}
