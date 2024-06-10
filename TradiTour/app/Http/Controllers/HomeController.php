<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('RagamBudaya.bahari');
    }

    public function nonbahari()
    {
        return view('RagamBudaya.WisataNonbahari');
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
    public function login()
    {
        return view('autentifikasi.login');
    }
    public function register()
    {
        return view('autentifikasi.register');
    }

    public function artikel()
    {
        return view('RagamBudaya.artikel');
    }

    public function profile()
    {
        return view('profile.index');
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


    public function admin()
    {
        return view('admin.landingpage');
    }

    public function user()
    {
        return view('admin.user.index');
    }
}
