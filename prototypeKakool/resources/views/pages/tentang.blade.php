@extends('layouts.base')
@section('nav')
  @include('includes.nav')
@endsection
@section('title','Tentang Kakool - Kakool')

<!--  -->
@section('css')
<style media="screen">

</style>
@endsection

<!--  -->
@section('content')

<section class="review_part gray_bg section_padding" style="padding-bottom: 0px">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="section_tittle">
                        <h2>Tentang Kakool</h2>
                    </div>
                </div>
            </div>
            <p style="text-align: center;color:#000;font-size: 120%;">
              Kakool merupakan platform belajar komputer online. Kakool dibuat karena kesadaran dari sekelompok mahasiswa penempuh PRPL akan pentingnya pembelajaran TIK. Terlebih lagi mata pelajaran komputer juga sudah dihapus dari kurikulum.
            </p>
            <p style="text-align: center;color:#000;font-size: 120%;">
              Kakool juga memjadi solusi menekan angka pengangguran dengan cara menyediakan pekerjaan bagi SDM yang handal dibidang komputer. Saat ini Kakool memiliki fokus mitra LBB Komputer di Kabupaten Jember dan Sekitarnya.
            </p>
        </div>
    </section>

<section class="review_part gray_bg section_padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="section_tittle">
                        <p>Testimoni</p>
                        <h2>Kata Mereka</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-11">
                    <div class="client_review_part owl-carousel">
                        <div class="client_review_single media">
                            <div class="client_img align-self-center">
                                <img src="img/client/client_1.png" alt="">
                            </div>
                            <div class="client_review_text media-body">
                                <p> Dashboard yang ada di Kakool sangat memudahkan mentor untuk memantau perkembangan siswa yang bisa bahasa pemrograman tertentu. .</p>
                                <h4>Elfin Pujianto, <span>Mentor</span></h4>
                            </div>
                        </div>
                        <div class="client_review_single media">
                            <div class="client_img align-self-center">
                                <img src="img/client/client_1.png " alt="">
                            </div>
                            <div class="client_review_text media-body">
                                <p>Di Kakool pembelajarannya lebih mudah, simple dan jelas.</p>
                                <h4>Lutfiah Rifa'ah, <span>Siswa</span></h4>
                            </div>
                        </div>
                        <div class="client_review_single media">
                            <div class="client_img align-self-center">
                                <img src="img/client/client_1.png" alt="">
                            </div>
                            <div class="client_review_text media-body">
                                <p>Kakool membantu belajar siswa secara interaktif dalam belajar komputer, semua siswa kami senang mengikuti Arkademy, karena sangat memotivasi siswa untuk berkembang dalam bidang IT.</p>
                                <h4>Hartawan Bahari M, <span>Mentor</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

<!--  -->
@section('js')

@endsection
