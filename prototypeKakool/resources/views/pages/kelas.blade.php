@extends('layouts.base')
@section('nav')
  @include('includes.nav')
@endsection
@section('title','Kelas - Kakool')

<!--  -->
@section('css')
<style media="screen">
.mr-3{
  height: 165px;
}
#container {
    width: 600px;
    margin: auto auto auto auto;
    padding: 20px;
}
.pagination {
    background: #f2f2f2;
    padding: 20px;
    margin-bottom: 20px;
}
.page {
    display: inline-block;
    padding: 0px 9px;
    margin-right: 4px;
    border-radius: 3px;
    border: solid 1px #c0c0c0;
    background: #fff;
    box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);
    font-size: .875em;
    font-weight: bold;
    text-decoration: none;
    color: #717171;
    text-shadow: 0px 1px 0px rgba(255,255,255, 1);
}

.page:hover, .page.gradient:hover {
    background: #fefefe;
    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#FEFEFE), to(#f0f0f0));
    background: -moz-linear-gradient(0% 0% 270deg,#FEFEFE, #f0f0f0);
}

.page.active {
    border: none;
    background: #0487d9;
    box-shadow: inset 0px 0px 8px rgba(0,0,0, .5), 0px 1px 0px rgba(255,255,255, .8);
    color: #f0f0f0;
    text-shadow: 0px 0px 3px rgba(0,0,0, .5);
}

.page.gradient {
    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f8f8f8), to(#e9e9e9));
    background: -moz-linear-gradient(0% 0% 270deg,#f8f8f8, #e9e9e9);
}
</style>
@endsection

<!--  -->
@section('content')
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
                                        <h3>Kelas Office Ms.Word</h3>
                                        <p><b>Intensif</b> Nama Mentor</p>
                                        <p>Deskripsi kelas nanti disini</p>
                                        <h5>Rp. 1.200.000</h5>
                                    </div>
                                </div>
                                <div class="single_food_item media">
                                    <img src="img/import/rpl_m_excell.png" class="mr-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Kelas Office Ms.Excell</h3>
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
                                      <h3>Kelas Office Ms.Power Point</h3>
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
                                      <h3>Kelas Markup Website</h3>
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
                                    <h3>Kelas Pemrograman Python</h3>
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
                                      <h3>Kelas Desain Corel Draw x7</h3>
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
                                    <h3>Kelas Desain Inkscape</h3>
                                    <p><b>Live-Stream</b> Nama Mentor</p>
                                    <p>Deskripsi kelas nanti disini</p>
                                    <h5>Rp. 350.000</h5>
                                </div>
                            </div>

                          </div>
                        </div>
                    </div>


                    <div id="container">
                        <div class="pagination">
                          <a href="#" class="page active">1</a><a href="#" class=
                          "page">2</a><a href="#" class="page">3</a><span
                          class="page ">4</span><a href="#" class=
                          "page">5</a><a href="#" class="page">6</a><a href="#"
                          class="page">>|</a>
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
