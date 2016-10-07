@extends('Frontend.layout')
@include('Frontend.partials.header')
@section('content')
<br/>
<div class="col-md-push-1 container-fluid">
      <div class="col-md-push-0 well  col-md-12" style="border:1px solid; border-radius:0px;">
        <!--First Part-->
        <div class="col-md-12">
          <h2>Log in</h2>
          <br><br/>
        </div>
        <div class="col-md-5 " style="border:1px solid black; border-radius:2px;left:3%;">
          <form class="form-horizontal col-md-12">
            <!-- Text input-->
            <div class="col-md-12">
              <br>
            </div>
            <div class="form-group col-md-12">
              <div class=" col-md-5 col-md-push-3">
                <label class="control-label" style="font-size:23px;" for="usernameL">Username</label>
              </div>
              <div class="col-md-12">
                <br>
              </div>
              <div class="col-md-11">
                <input id="username" name="username" class="form-control input-md" type="text">
              </div>
            </div>
            <!-- Text input-->
            <div class="col-md-12">
              <br>
            </div>
            <div class="form-group col-md-12">
              <div class=" col-md-10 col-md-push-2">
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label class="control-label" style="font-size:23px;" for="usernameL">Password</label>
              </div>
              <div class="col-md-12">
                <br>
              </div>
              <div class="col-md-11">
                <input id="username" name="username" class="form-control input-md" type="text">
              </div>
            </div>
            <!-- Text input-->
            <div class="col-md-12">
              <br>
            </div>
            <div class="form-group col-md-12">
              <div class=" col-md-7 col-md-push-4">
                <a href="orderhistory"><button id="signin" class="btn btn-success  btn-responsive" name="resetlink">Log in</button></a>
              </div>
            </div>
            <div class="form-group col-md-12">
              <div class="col-md-12 col-md-push-4">
                <a href="resetpass" class="col-md-8 col-md-pull-2" style="font-size:17px; color:#1e88e5;text-decoration:underline;">Forget Password?</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/jquery.min.js" ></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
            <script>
              new WOW().init();
              </script>
</body>
</html>
@stop