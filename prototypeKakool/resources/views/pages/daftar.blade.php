@extends('layouts.base')
@section('nav')
  @include('includes.nav')
@endsection
@section('title','Daftar - Kakool')

<!--  -->
@section('css')
<style media="screen">
html,
body,
.login-box {
  height: 100%;
}
body {
    font-size: 14px;
    line-height: 1.42857;
    height: 350px;
    padding: 0;
    margin: 0;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-weight: 400;
    overflow-x: hidden;
    overflow-y: auto;

}
.form-control {
    background-color: #fcfcfc;
    background-image: none;
    border: 1px solid #999999;
    border-radius: 0;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
    color: #333333;
    display: block;
    font-size: 14px;
    height: 34px;
    line-height: 1.42857;
    padding: 6px 12px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    width: 100%;
}

.login-box, .register-box {
    width: 550px;
    margin: 7% auto;
}

}.login-box-msg, .register-box-msg {
    margin: 0;
    text-align: center;
    padding: 0 20px 20px 20px;
}.login-box-body, .register-box-body {
    background: #fff;
    padding: 25px;
    border-top: 0;
    color: #666;
}.has-feedback {
    position: relative;
}
.form-group {
    margin-bottom: 15px;
}.has-feedback .form-control {
    padding-right: 42.5px;
}.login-box-body .form-control-feedback, .register-box-body .form-control-feedback {
    color: #777;
}
.form-control-feedback {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 2;
    display: block;
    width: 34px;
    height: 34px;
    line-height: 34px;
    text-align: center;
    pointer-events: none;
}.checkbox, .radio {
    position: relative;
    display: block;
    margin-top: 10px;
    margin-bottom: 10px;
}.icheck>label {
    padding-left: 0;
}
.checkbox label, .radio label {
    min-height: 20px;
    padding-left: 20px;
    margin-bottom: 0;
    font-weight: 400;
    cursor: pointer;
}
</style>
@endsection

<!--  -->
@section('content')
<!-- <input type="reset" id="reset" class="btn-flat grey-text waves-effect"> -->
<section class="food_menu" style="background-color:#E9E9F1">
  <div class="container">
    <div class="login-box">
    <div class="login-box-body">
      <div class="section_tittle" style="margin-bottom:24px">
          <h2>Buat Akun Kakool</h2>
          <p style="text-align: center;">Platform kursus komputer online, solusi tepat untuk pelajar 3 SD - 3 SMA untuk menghadapi kebutuhan pengetahuan TIK</p>
      </div>
        <form action="#" method="post" accept-charset="utf-8">

                <div class="row">
                  <div class="col-sm-6">
                    <a href="/user/siswa" class="single_page_btn" style="text-align:center;font-weight:bold;">Daftar Sebagai Siswa</a>
                  </div>
                  <div class="col-sm-6">
                    <a href="/user/mentor" class="single_page_btn" style="text-align:center;font-weight:bold;">Daftar Sebagai Mentor</a>
                  </div>

                </div>
        </form>
        <p style="margin-top: 24px;text-align: center;">Sudah punya akun? <a href="/masuk">Masuk</a><br></p>


            </div><!-- /.login-box-body -->
</div>

  </div>
</section>

@endsection

<!--  -->
@section('js')
<script type="text/javascript">
$("#reset").on("click", function() {
$('label').removeClass('active');
});
</script>
@endsection
