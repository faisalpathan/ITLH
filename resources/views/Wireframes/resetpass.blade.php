@extends('Wireframes.layout')
@include('Wireframes.partials.header')
@section('content')
<br/>

<div class="col-md-push-1 container-fluid wow fadeIn">
      <div class="col-md-push-0 well  col-md-12" style="border:1px solid; border-radius:0px;">
        <!--First Part-->
        <div class="col-md-12">
          <h3>Reset Password</h3>
          <br>
        </div>
        <div class="col-md-5 " style="border:1px solid black; border-radius:2px;">
          <form class="form-horizontal col-md-12">
            <!-- Text input-->
            <div class="col-md-12">
              <br>
            </div>
            <div class="form-group col-md-12">
              <div class=" col-md-10">
                <label class="control-label" style="font-size:15px;" for="usernameL">New Password</label>
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
              <div class=" col-md-10">
                <label class="control-label" style="font-size:15px;" for="usernameL">Re-enter New Password</label>
              </div>
              <div class="col-md-11">
                <input id="username" name="username" class="form-control input-md" type="text">
              </div>
            </div>
            <!-- Text input-->
            <div class="col-md-12 col-md-push-1">
              <br>
            </div>
            <div class="form-group col-md-12" >
              <div class=" col-md-8">
               <a href="sendpass" <button id="resetlink" class="btn btn-success  btn-responsive col-md-12" name="resetlink" style="margin-left:30%;">Reset Password</button></a>
              </div>
            </div>
            <div class="form-group col-md-12">
              <div class=" col-md-8">
                <button id="cancellink" name="cancellink" class="btn btn-success btn-responsive col-md-12" style="margin-left:30%;">Cancel</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

            <script src="js/jquery.min.js" ></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
            <script>
              new WOW().init();
              </script>
</body>
</html>
@stop