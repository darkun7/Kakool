@extends('layouts.base')
@section('nav')
  @include('includes.nav')
@endsection
@section('title','Masuk - Kakool')

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
    width: 450px;
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
          <h2>Halo, Kakoolian</h2>
          <p>Masuk untuk memulai perjalanan bersama Kakool.</p>
      </div>
        <form action="#" method="post" accept-charset="utf-8">
          <div class="form-group has-feedback">
            <input type="text" name="login" value="" placeholder="Email" class="form-control" id="login" maxlength="80" size="30">            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            <span><font color="red"></font></span>
          </div>
          <div class="form-group has-feedback">
              <input type="password" name="password" value="" placeholder="Password" class="form-control" id="password" size="30">            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              <span><font color="red"></font></span>
          </div>
                <div class="row">
                    <a href="/user/siswa" class="single_page_btn" style="text-align:center;font-weight:bold;margin-left:auto;margin-right:auto;">Masuk</a>
                </div>
        </form>
        <div class="row">
          <div class="col-xl-6">
              <a href="#forgot">Lupa Password?</a><br>
          </div>
          <div class="col-xl-6" style="text-align:right;">
            <a href="/daftar">Belum Punya Akun</a><br>
          </div>
        </div>


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
