<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/login');
    }

    public function beranda()
    {
        $data = [
            'title' => 'Beranda',
            'currentURI' => 'beranda'
        ];
        return view('pages/beranda', $data);
    }

    public function profil_dpm()
    {
        $data = [
            'title' => 'Profil DPM',
            'currentURI' => 'profil-dpm'
        ];
        return view('pages/profil-dpm', $data);
    }

    public function arsip()
    {
        $data = [
            'title' => 'Arsip Dokumen',
            'currentURI' => 'arsip'
        ];
        return view('pages/arsip', $data);
    }

    public function galeri()
    {
        $data = [
            'title' => 'Galeri DPM',
            'currentURI' => 'galeri'
        ];
        return view('pages/galeri', $data);
    }

    public function aspirasi()
    {
        $data = [
            'title' => 'Aspirasi',
            'currentURI' => 'aspirasi'
        ];
        return view('pages/aspirasi', $data);
    }

    public function user()
    {
        $data = [
            'title' => 'User',
            'currentURI' => 'user'
        ];
        return view('pages/user', $data);
    }
}
