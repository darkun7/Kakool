@extends('layouts.base')
@section('nav')
  @include('includes.nav')
@endsection
@section('title','Kakool | Kelas Komputer Online')

<!--  -->
@section('css')
<style media="screen">
  .mr-3{
    height: 165px;
  }
</style>
@endsection

<!--  -->
@section('content')
<!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Kursus Via Live-Stream</h5>
                            <h1>Belajar Cara Baru</h1>
                            <p>Kakool merupakan platform kursus komputer, kalian bisa belajar darimana saja. Belajar TIK menjadi lebih asik, tentunya juga bersertifikat.</p>
                            <div class="banner_btn">
                                <div class="banner_btn_iner">
                                    <a href="/tentang" class="btn_2">Selengkapnya <img src="img/icon/left_1.svg" alt=""></a>
                                </div>
                                <!-- <a href="https://www.youtube.com/watch?v=pBFQdxA-apI" class="popup-youtube video_popup">
                                    <span><img src="img/icon/play.svg" alt=""></span> Watch our story</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- intro_video_bg start-->
    <section class="intro_video_bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="intro_video_iner text-center">
                            <h2>Layanan Kami</h2>
                            <div class="intro_video_icon">
                                <a id="play-video_1" class="video-play-button popup-youtube"
                                    href="https://www.youtube.com/watch?v=pBFQdxA-apI">
                                    <span class="ti-control-play"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- intro_video_bg start-->

    <!-- kelas part start-->
    <section class="food_menu gray_bg">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="section_tittle">
                        <p>Ter-populer</p>
                        <h2>Kelas Rekomendasi</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="nav nav-tabs food_menu_nav" id="myTab" role="tablist">
                        <a class="active" id="Office-tab" data-toggle="tab" href="#office" role="tab"
                            aria-controls="Special" aria-selected="false">Aplikasi Office <img src="img/icon/play.svg"
                                alt="play"></a>
                        <a id="Launch-tab" data-toggle="tab" href="#pemrograman" role="tab" aria-controls="Launch"
                            aria-selected="false">Pemrograman <img src="img/icon/play.svg" alt="play"></a>
                        <a id="Dinner-tab" data-toggle="tab" href="#desain-grafis" role="tab" aria-controls="Dinner"
                            aria-selected="false">Desain Grafis <img src="img/icon/play.svg" alt="play"> </a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active single-member" id="office" role="tabpanel"
                            aria-labelledby="Special-tab">
                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="single_food_item media">
                                        <img src="img/import/rpl_m_word.png" class="mr-3" alt="...">
                                        <div class="media-body align-self-center">
                                            <a href="/bayar"> <h3>Kelas Office Ms.Word</h3> </a>
                                            <p><b>Intensif</b> Nama Mentor</p>
                                            <p>Deskripsi kelas nanti disini</p>
                                            <h5>Rp. 1.200.000</h5>
                                        </div>
                                    </div>
                                    <div class="single_food_item media">
                                        <img src="img/import/rpl_m_excell.png" class="mr-3" alt="...">
                                        <div class="media-body align-self-center">
                                            <a href="/bayar"> <h3>Kelas Office Ms.Excell</h3> </a>
                                            <p><b>Live-Stream</b> Nama Mentor</p>
                                            <p>Deskripsi kelas nanti disini</p>
                                            <h5>Rp. 350.000</h5>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-6 col-lg-6">
                                  <div class="single_food_item media">
                                      <img src="img/import/rpl_m_excell.png" class="mr-3" alt="...">
                                      <div class="media-body align-self-center">
                                          <a href="/bayar"> <h3>Kelas Office Ms.Power Point</h3> </a>
                                          <p><b>Live-Stream</b> Nama Mentor</p>
                                          <p>Deskripsi kelas nanti disini</p>
                                          <h5>Rp. 350.000</h5>
                                      </div>
                                  </div>

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade single-member" id="pemrograman" role="tabpanel"
                            aria-labelledby="Sneaks-tab">
                            <div class="row">
                              <div class="col-sm-6 col-lg-6">
                                  <div class="single_food_item media">
                                      <img src="img/import/rpl_m_web.png" class="mr-3" alt="...">
                                      <div class="media-body align-self-center">
                                          <a href="/bayar"> <h3>Kelas Markup Website</h3></a>
                                          <p><b>Intensif</b> Nama Mentor</p>
                                          <p>Deskripsi kelas nanti disini</p>
                                          <h5>Rp. 1.200.000</h5>
                                      </div>
                                  </div>

                              </div>
                              <div class="col-sm-6 col-lg-6">
                                <div class="single_food_item media">
                                    <img src="img/import/rpl_m_py.png" class="mr-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <a href="/bayar"> <h3>Kelas Pemrograman Python</h3> </a>
                                        <p><b>Live-Stream</b> Nama Mentor</p>
                                        <p>Deskripsi kelas nanti disini</p>
                                        <h5>Rp. 350.000</h5>
                                    </div>
                                </div>

                              </div>

                            </div>
                        </div>

                        <div class="tab-pane fade single-member" id="desain-grafis" role="tabpanel"
                            aria-labelledby="Sneaks-tab">
                            <div class="row">

                              <div class="col-sm-6 col-lg-6">
                                  <div class="single_food_item media">
                                      <img src="img/import/rpl_m_corel.png" class="mr-3" alt="...">
                                      <div class="media-body align-self-center">
                                          <a href="/bayar"> <h3>Kelas Desain Corel Draw x7</h3></a>
                                          <p><b>Intensif</b> Nama Mentor</p>
                                          <p>Deskripsi kelas nanti disini</p>
                                          <h5>Rp. 1.200.000</h5>
                                      </div>
                                  </div>

                              </div>
                              <div class="col-sm-6 col-lg-6">
                                <div class="single_food_item media">
                                    <img src="img/import/rpl_m_inkscape.png" class="mr-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <a href="/bayar"> <h3>Kelas Desain Inkscape</h3> </a>
                                        <p><b>Live-Stream</b> Nama Mentor</p>
                                        <p>Deskripsi kelas nanti disini</p>
                                        <h5>Rp. 350.000</h5>
                                    </div>
                                </div>

                              </div>
                            </div>
                        </div>

                        <a href="/kelas" class="single_page_btn d-none d-sm-block" style="text-align:center;font-weight:bold;">Lebih Banyak</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- kelas part start-->

@endsection

<!--  -->
@section('js')

@endsection
