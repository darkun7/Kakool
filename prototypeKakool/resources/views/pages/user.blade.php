@extends('layouts.base')

@section('nav')
  @include('includes.nav-user')
@endsection

@section('title','Dasbor - Kakool')

<!--  -->
@section('css')
<style media="screen">
.welcome{
  padding: 25px;
  padding-top: 25px;
  border-radius: 0;
  background: #0487d9;
  color: #fff;
  text-align: center;
  font-size: 24px;
  padding-top: 33px;
  border: 0;
  font-family: 'Helvetica',sans-serif;
  cursor: pointer;
}
.wrapper-journey {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 40px;
}
.journey-box {
    display: flex;
    width: 150px;
    height: 40px;
    background: #0487d9;
    align-items: center;
    justify-content: center;
    border-radius: 20px;
    color: #fff;
    font-size: 14px;
    font-weight: bolder;
}
.journey-box a{
  color: white;
}
.inact{
    display: flex;
    width: 150px;
    height: 40px;
    align-items: center;
    justify-content: center;
    border-radius: 20px;
    color: #fff;
    font-size: 14px;
    font-weight: bolder;
    background: #7d7d7d;
}
.inact a{
  color: white;
}
.dasbor{
  padding-top:24px;
}
</style>
@endsection

<!--  -->
@section('content')
<section class="food_menu" style="background-color:#E9E9F1">
  @if($type=="siswa" or $type=="mentor")
  <div class="welcome">
    <h4 style="color: white; text-transform: capitalize"><b style="color:white;">Selamat Datang</b>, Pengguna {{$type}}</h4>
  </div>
  @endif
  <div class="container">
    @if($type=="siswa")
    siswa

    @elseif($type=="mentor")

    <div class="wrapper-journey">
      <div class="journey-box">
        <a href="/user/verifikasi">Verifikasi Mentor</a>
      </div>
      <div class="journey-box">
        <a href="#">Kelas Saya</a>
      </div> <div class="journey-box">
        <a href="#">Buat Kelas</a>
      </div>
      <div class="journey-box">
        <a href="/user/stream">Live-Stream</a>
      </div>
    </div>
    <section class="dasbor">
      <div class="row">
        <div class="col-xl-6">
          <h3><b>Kelas</b></h3>
          <img src="/img/import/rpl_kelas_siswa.png" alt="">
        </div>
        <div class="col-xl-6">
            <h3><b>Tugas/ Kuis</b></h3>
          <img src="/img/import/rpl_tugas.png" alt="">
        </div>
      </div>
    </section>
    @elseif($type=="stream")
    <h2>Live Stream Kelas ....</h2>
    <img src="/img/import/rpl_stream.png" alt="" style="height: 600px;">
    @elseif($type=="verifikasi")
    <div class="wrapper-journey">
      <div class="journey-box">
        <a href="/user/verifikasi">Verifikasi Mentor</a>
      </div>
      <div class="inact">
        <a href="#">Ujian Mentor</a>
      </div> <div class="inact">
        <a href="#">Training Mentor</a>
      </div>
    </div>
    <h2 style="padding-top:24px">Verifikasi Mentor</h2>
    <form>
      <div class="form-group">
        <label for="exampleInputPassword1">Nama Lengkap</label>
        <input type="text" class="form-control" placeholder="Nama Lengkap">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Instansi Terakhir</label>
        <input type="text" class="form-control" placeholder="Nama Lengkap">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Tanggal Lulus</label>
        <input type="date" class="form-control" placeholder="Nama Lengkap">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Profesi</label>
        <input type="text" class="form-control" placeholder="Nama Lengkap">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Spesialisasi</label>
        <select class="form-control" name="">
          <option value="Office Word">Ms. Office Word</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Ulasan Diri</label>
        <textarea class="form-control" name="name" rows="8" cols="80">Ulasan Diri</textarea>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Unggah Berkas</label>
        <input type="file" class="form-control" placeholder="Nama Lengkap">
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    @endif
  </div>
</section>


@endsection

<!--  -->
@section('js')

@endsection
