@extends('Wireframes.layout')
@include('Wireframes.partials.header')
@section('content')
<br/>
<div class="col-md-push-1 container-fluid wow fadeIn">
      <div class="col-md-push-0 well  col-md-12" style="border:1px solid; border-radius:0px;">
        <!--First Part-->
        <div class="col-md-8" style="margin-top:-2.6%;margin-left:-2%;">
          <h3>Sign Up</h3>
          <br>
        </div>
        <div class="col-md-6 text-center">
          <form class="form-horizontal">
            <!-- Text input-->
            <div class="form-group col-md-12">
              <div class="col-md-5 col-md-pull-1">
                <label class="control-label" style="font-size:15px;" for="Fname">First Name</label>
              </div>
              <div class="col-md-7 col-md-pull-2">
                <input id="Fname" name="Fname" placeholder="" class="form-control input-md" type="text">
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group col-md-12">
              <div class="col-md-5 col-md-pull-1">
                <label class="control-label" style="font-size:15px;" for="Lname">Last Name</label>
              </div>
              <div class="col-md-7 col-md-pull-2">
                <input id="Lname" name="Lname" placeholder="" class="form-control input-md" type="text">
              </div>
            </div>
            <!-- Multiple Radios (inline) -->
            <div class="form-group col-md-12">
              <div class="col-md-5 col-md-pull-1">
                <label class="control-label" style="font-size:15px;" for="radios">Gender</label>
              </div>
              <div class=" col-md-7 col-md-pull-4">
                <label class="radio-inline col-md-push-1" for="radios-0">
                  <input name="radios" id="radios-0" value="male" checked="checked" style="font-size:15px;" type="radio">Male</label>
                <label class="radio-inline col-md-push-1" for="radios-1">
                  <input name="radios" id="radios-1" value="female" style="font-size:15px;" type="radio">Female</label>
              </div>
            </div>
            <div class="form-group col-md-12 ">
              <div class="col-md-5 col-md-pull-1">
                <label class="control-label" for="date">Date Of Birth</label>
              </div>
              <div class=" col-md-7 col-md-pull-2">
                <input type="text" class="datepicker" style="width:87%;">                
                </div>
              </div>
           
            <!-- Text input-->
            <div class="form-group col-md-12">
              <div class="col-md-5 col-md-pull-1">
                <label class="control-label" style="font-size:15px;" for="ContactNum">Contact Number</label>
              </div>
              <div class="col-md-7 col-md-pull-2">
                <input id="ContactNum" name="ContactNum" placeholder="" class="form-control input-md" type="text">
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group col-md-12">
              <div class="col-md-5 col-md-pull-1">
                <label class="control-label" style="font-size:15px;" for="email" >Email</label>
              </div>
              <div class="col-md-7 col-md-pull-2">
                <input id="email" name="email" placeholder="" class="form-control input-md"  type="email" required>
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group col-md-12">
              <div class="col-md-5 col-md-pull-1">
                <label class="control-label" style="font-size:15px;" for="password">Password</label>
              </div>
              <div class="col-md-7 col-md-pull-2">
                <input id="password" name="password" placeholder="" class="form-control input-md" type="password">
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group col-md-12">
              <div class="col-md-5 col-md-pull-1">
                <label class="control-label" style="font-size:15px;" for="Re-password">Re-enter Password</label>
              </div>
              <div class="col-md-7 col-md-pull-2">
                <input id="Re-password" name="Re-password" placeholder="" class="form-control input-md" type="password">
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6 ">
          <!--Text Area-->
          <div class="form-group">
            <div class="col-md-5 col-md-pull-1">
              <label class="control-label" style="font-size:15px;" for="radios">Permanent Address</label>
            </div>
            <div class="col-md-7 col-md-pull-2">
              <textarea rows="4" class="col-md-12" name="permanentaddress"></textarea>
            </div>
          </div>
          <!-- Button -->
          <div class="col-md-12">
            <!--DoBreak-->
            <br>            <br>            <br>            <br>            <br>            <br>            <br>            <br>            <br>            <br>            <br>            <br><br>
            <div class="form-group col-md-6 col-md-pull-2 ">
              <a href="myprofile" ><button id="signup" name="signup" class="btn btn-success">Sign Up</button></a>
            </div>
            <!-- Button -->
            <div class="form-group col-md-6 col-md-pull-3">
              <button id="cancle" name="cancle" class="btn btn-success">Cancel</button>
            </div>
          </div>
        </div>
      </div>
    </div>           
		<script src="js/jquery.min.js" ></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		 <script>
               $(document).ready(function () {
    $(".datepicker").datepicker({
        showOn: "button",
        buttonImage: "images/calender.png",
        buttonImageOnly: true
    });
});
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
            <script>
              new WOW().init();
              </script>
           
</body>
</html>
@stop