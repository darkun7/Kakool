<style media="screen">
  .menu_btn{
  padding: 5px;
  }
  .menu_btn a,
  .menu_btn_2 a{
    font-weight: bold;
  }
  .nav-link{
    font-weight: bold;
  }
</style>
<!--::header part start::-->
<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="/user/
@if($type=='verifikasi' or $type=='stream')
{{$jenis='mentor'}}
@else
{{$type}}
@endif
                    "> <img src="/img/logo.png" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item justify-content-end"
                        id="navbarSupportedContent">
                        <ul class="navbar-nav">
                          <li class="nav-item">
                              <a class="nav-link" href="/kelas">Kelas</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#">Modul</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="/paket">Paket Kelas</a>
                          </li>


                        </ul>
                    </div>
                    <div class="menu_btn_2">
                        <a href="/" class="btn_1 d-none d-sm-block" style="text-transform: capitalize">Pengguna
                        @if($type=="verifikasi" or $type=="stream")
                          mentor
                        @else
                          {{$type}}
                        @endif <img src="/img/client/client_1.png" alt="" style="height:30px"> <span class="fa-sort-desc"></span> </a>
                    </div>

                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header part end-->
