<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.home');
    }
    public function getMasukPage()
    {
      return view('pages.masuk');
    }
    public function getDaftarPage()
    {
      return view('pages.daftar');
    }
    public function getTentangPage()
    {
      return view('pages.tentang');
    }
    public function getKelasPage()
    {
      return view('pages.kelas');
    }
    public function getPaketPage()
    {
      return view('pages.paket');
    }
    public function getMentorPage()
    {
      return view('pages.mentor');
    }
    public function getSiswaPage()
    {
      return view('pages.siswa');
    }

    public function userShow($type)
    {
        return view('pages.user',['type' => $type]);
    }
    public function getBayarPage()
    {
      return view('pages.bayar');
    }
    // public function getUserPage()
    // {
    //   return view('pages.user');
    // }
    // public function getDonasiPage()
    // {
    //   return view('pages.donasi');
    // }
    //
    // public function getAdminPage()
    // {
    //   return view('pages.admin');
    // }
}
