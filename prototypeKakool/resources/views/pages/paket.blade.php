@extends('layouts.base')
@section('nav')
  @include('includes.nav')
@endsection
@section('title','Paket Kelas- Kakool')

<!--  -->
@section('css')
<style media="screen">

</style>
@endsection

<!--  -->
@section('content')
    <section class="chefs_part blog_item_section section_padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="section_tittle">
                        <h2>Pilihan Paket Kelas</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <!-- <img src="#" alt=""> -->
                        </div>
                        <div class="single_blog_text text-center">
                            <h3>Paket Video Daring</h3>
                            <h4 style="margin-bottom: 20px;">Harga: <b>Rp 150.000 - Rp 250.000</b></h4>
                            <ul>
                              <li>Tersedia modul yang dapat diunduh</li><hr>
                              <li>Siswa dapat melakukan tanya jawab melalui fitur kirim pesan kepada mentor</li><hr>
                              <li>Quiz diberikan bersama dengan peserta paket Online Stream</li><hr>
                            </ul>
                            <p></p>
                            <a href="/daftar" class="single_page_btn d-none d-sm-block" style="margin-top: 10px;margin-bottom: 20px;">Pilih Paket</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <!-- <img src="#" alt=""> -->
                        </div>
                        <div class="single_blog_text text-center">
                            <h3>Paket Online Stream</h3>
                            <h4 style="margin-bottom: 20px;">Harga: <b>Rp 550.000 - Rp 750.000</b></h4>
                            <ul>
                              <li>Tersedia modul yang dapat diunduh</li><hr>
                              <li>Peserta kelas sejumlah 5-10 Siswa</li><hr>
                              <li>Kelas live-steam berlangsung dalam 6x<a href="#">60 menit</a> </li><hr>
                              <li>Siswa dapat melakukan tanya jawab melalui <a href="#">live-chat</a> </li><hr>
                              <li>Menentukan jadwal Quiz daring (diawasi Mentor)</li><hr>
                            </ul>
                            <p></p>
                            <a href="/daftar" class="single_page_btn d-none d-sm-block" style="margin-top: 10px;margin-bottom: 20px;">Pilih Paket</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <!-- <img src="#" alt=""> -->
                        </div>
                        <div class="single_blog_text text-center">
                            <h3>Paket Intensif</h3>
                            <h4 style="margin-bottom: 20px;">Harga: <b>Rp 1.200.000 - Rp 1.600.000</b></h4>
                            <ul>
                              <li>Tersedia modul yang dapat diunduh</li><hr>
                              <li>Kelas dapat bersifat <a href="#">private</a> </li><hr>
                              <li>Kelas live-steam berlangsung dalam 4x<a href="#">90 menit</a> </li><hr>
                              <li>Siswa dapat melakukan tanya jawab melalui <a href="#">live-chat</a> </li><hr>
                              <li>Quiz dilakukan sesuai kehendak</li><hr>
                            </ul>
                            <p></p>
                            <a href="/daftar" class="single_page_btn d-none d-sm-block" style="margin-top: 10px;margin-bottom: 20px;">Pilih Paket</a>
                        </div>
                    </div>
                </div>

            </div>
            <p>Fasilitas yang akan disediakan oleh Kakool akan menyesuaikan dengan jenis paket kelas yang akan diambil. Hal tersebut telah tertulis dalam <a href="#">Privasi dan Kebijakan</a> </p>
        </div>
    </section>

@endsection

<!--  -->
@section('js')

@endsection
