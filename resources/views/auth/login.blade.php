@extends('layouts.default')
@section('content')
<?php

Session::set('backUrl', URL::previous());
?>

<style type="text/css">

  .loginBtn {
    box-sizing: border-box;
    position: relative;
    /* width: 13em;  - apply for fixed size */
    margin: 0.2em;
    padding: 0 15px 0 46px;
    border: none;
    text-align: left;
    line-height: 34px;
    white-space: nowrap;
    border-radius: 0.2em;
    font-size: 16px;
    color: #FFF;
  }
  .loginBtn:before {
    content: "";
    box-sizing: border-box;
    position: absolute;
    top: 0;
    left: 0;
    width: 34px;
    height: 100%;
  }
  .loginBtn:focus {
    outline: none;
  }
  .loginBtn:active {
    box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
  }


  /* Facebook */
  .loginBtn--facebook {
    background-color: #4C69BA;
    background-image: linear-gradient(#4C69BA, #3B55A0);
    /*font-family: "Helvetica neue", Helvetica Neue, Helvetica, Arial, sans-serif;*/
    text-shadow: 0 -1px 0 #354C8C;
  }
  .loginBtn--facebook:before {
    border-right: #364e92 1px solid;
    background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png') 6px 6px no-repeat;
  }
  .loginBtn--facebook:hover,
  .loginBtn--facebook:focus {
    background-color: #5B7BD5;
    background-image: linear-gradient(#5B7BD5, #4864B1);
  }


  /* Google */
  .loginBtn--google {
    /*font-family: "Roboto", Roboto, arial, sans-serif;*/
    background: #DD4B39;
  }
  .loginBtn--google:before {
    border-right: #BB3F30 1px solid;
    background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_google.png') 6px 6px no-repeat;
  }
  .loginBtn--google:hover,
  .loginBtn--google:focus {
    background: #E74B37;
  }


</style>
<div class="clearfix"></div>
<section id="page-title">

  <div class="container clearfix">
    <h1>My Account</h1>

  </div>

</section><!-- #page-title end -->




        <!-- Content
        ============================================= -->
        <section id="content">

          <div class="content-wrap">

            <div class="container clearfix">

              <div class="tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 500px;">

                <ul class="tab-nav tab-nav2 center clearfix">
                  <li class="inline-block"><a href="#tab-login">Login</a></li>
                  <li class="inline-block"><a href="#tab-register">Register</a></li>
                </ul>

                <div class="tab-container">

                  <div class="tab-content clearfix" id="tab-login">
                    <div class="panel panel-default nobottommargin">
                      <div class="panel-body" style="padding: 40px;">

                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                          <strong>Whoops!</strong> There were some problems with your input.<br><br>
                          <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                        </div>
                        @endif
                        <form method="POST" action="{{ url('/auth/login') }}">
                         
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">

                          <h3>Login to your Account</h3>

                          <div class="col_full">
                            <label for="login-form-username">Email:</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                          </div>

                          <div class="col_full">
                            <label for="login-form-password">Password:</label>
                            <input type="password" class="form-control" name="password">
                          </div>

                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="remember"> Remember Me
                            </label>
                          </div>

                          <div class="col_full nobottommargin">




                            

                            <button class="button button-3d nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>

                            <br>
                            <div id="fb-root"></div>

                           


                            
                            <a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
                          </div>

                        </form>
                      </div>
                    </div>
                  </div>

                  <div class="tab-content clearfix" id="tab-register">
                    <div class="panel panel-default nobottommargin">
                      <div class="panel-body" style="padding: 40px;">
                        <h3>Register for an Account</h3>

                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                          <strong>Whoops!</strong> There were some problems with your input.<br><br>
                          <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                        </div>
                        @endif
                        <form class="form-horizontal" role="form" method="POST" action="{{ route("profiles.store") }}">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">    
                          <div class="col_full">
                            <label for="register-form-name">Name:</label>
                            <!-- <input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" /> -->
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                          </div>

                          <div class="col_full">
                            <label for="register-form-email">Email Address:</label>
                            <!-- <input type="text" id="register-form-email" name="register-form-email" value="" class="form-control" /> -->
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                          </div>

                                           <!--  <div class="col_full">
                                                <label for="register-form-username">Choose a Username:</label>
                                                <input type="text" id="register-form-username" name="register-form-username" value="" class="form-control" />
                                              </div> -->

                                              <div class="col_full">
                                                <label for="register-form-phone">Phone:</label>
                                                <!-- <input type="text" id="register-form-phone" name="register-form-phone" value="" class="form-control" /> -->
                                                <input class="form-control" name="ph1" value="{{ old('phone') }}" type="text"s>
                                              </div>

                                              <div class="col_full">
                                                <label for="register-form-password">Choose Password:</label>
                                                <!-- <input type="password" id="register-form-password" name="register-form-password" value="" class="form-control" /> -->
                                                <input id="password1" type="password" class="form-control" name="password">
                                              </div>

                                              <div class="col_full">
                                                <label for="register-form-repassword">Re-enter Password:</label>
                                                <!-- <input type="password" id="register-form-repassword" name="register-form-repassword" value="" class="form-control" /> -->
                                                <input id="password2" type="password" class="form-control" name="password_confirmation">
                                              </div>

                                              <div class="checkbox">
                                                <label>
                                                  <input type="checkbox">  I'v read and agreed on <a href="#">Condations</a>
                                                </label>
                                              </div>

                                              <div class="col_full nobottommargin">
                                                <button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
                                              </div>

                                            </form>
                                          </div>
                                        </div>
                                      </div>

                                    </div>

                                  </div>

                                </div>

                              </div>

                            </section><!-- #content end -->



                            <script type="text/javascript">
                              window.onload = function () {
                                document.getElementById("password1").onchange = validatePassword;
                                document.getElementById("password2").onchange = validatePassword;
                              }
                              function validatePassword(){
                                var pass2=document.getElementById("password2").value;
                                var pass1=document.getElementById("password1").value;
                                if(pass1!=pass2)
                                  document.getElementById("password2").setCustomValidity("Passwords Don't Match");
                                else
                                  document.getElementById("password2").setCustomValidity('');  
//empty string means no validation error
}
</script><script type="text/javascript">
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#blah')
      .attr('src', e.target.result)
      .width(150)
      .height(150);
    };

    reader.readAsDataURL(input.files[0]);
  }
}

</script>









@stop

