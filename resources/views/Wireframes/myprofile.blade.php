@extends('Wireframes.layout')
@include('Wireframes.partials.header1')
@section('content')
<br/>
<div class="col-md-push-1 container-fluid">
      <div class="col-md-push-0 well  col-md-12" style="border:1px solid; border-radius:0px;">
        <!--First Part-->
        <div class="col-md-8" style="margin-top:-2.6%;margin-left:-2%;">
          <h3>My Profile</h3>
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
                <label class="control-label" style="font-size:15px;" for="email">Email Address</label>
              </div>
              <div class="col-md-7 col-md-pull-2">
                <input id="email" name="email" placeholder="" class="form-control input-md" type="email">
              </div>
            </div>
            <div class="col-md-12">
              <br>
            </div>
            <div class="form-group col-md-12 ">
              <!-- Modal -->
              <div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 style="background:color:grey; text-align:center;" class="modal-title" id="myModalLabel">Change Password</h4>
                    </div>
                    <!-- Modal Body -->
                    <div class="modal-body">
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="newpassword">New Password</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control input-lg" id="newpassword">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="re-enternewpassword">Re-enter New Password</label>
                        <div class="col-sm-5">
                          <input type="password" class="form-control input-lg" id="re-enternewpassword">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-pull-2 col-sm-10">
                          <button type="submit" class="btn btn-success btn-responsive">Change</button>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-pull-2 col-sm-10">
                          <button type="submit" class="btn btn-success btn-responsive" data-dismiss="modal">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Button trigger modal -->
             <a href="resetpass"> <button type="button" class="btn btn-success btn-success col-md-7" data-toggle="modal" data-target="#myModalNorm">Change Password</button></a>
              <!-- Modal -->
              <div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header" style="background-color:grey;">
                      <h4 class="modal-title" style="text-align:center;" id="myModalLabel">Change Password</h4>
                    </div>
                    <!-- Modal Body -->
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="newpassword">New Password</label>
                        <input type="text" class="form-control" id="newpassword">
                      </div>
                      <div class="form-group">
                        <label for="re-enternewpassword">Re-enter New Password</label>
                        <input type="password" class="form-control" id="re-enternewpassword">
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-success col-md-offset-2 btn-responsive">Change</button>
                        <button type="button" class="btn btn-success col-md-offset-2 btn-responsive" data-dismiss="modal">Cancel</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <!-- Text input-->
        </div>
        <div class="col-md-6 ">
          <!--Text Area-->
          <div class="form-group">
            <div class="col-md-3 col-md-push-10">
              <a href="editprofile"><button type="submit" class="btn btn-success col-md-offset-4 btn-responsive">Edit</button></a>
            </div>
          </div>
          <div class="col-md-12">
            <br>
            <br>
          </div>
          <div class="form-group">
            <div class="col-md-5 col-md-pull-1">
              <label class="control-label" style="font-size:15px;" for="radios">Permanent Address</label>
            </div>
            <div class="col-md-7 col-md-pull-2">
              <textarea rows="4" class="col-md-12" name="permanentaddress"></textarea>
            </div>
          </div>
          <div class="col-md-12">
            <!--Pincode-->
            <div class="form-group">
              <div>
                <br>
              </div>
              <div class="col-md-4 col-md-pull-1">
                <label class="control-label" style="font-size:15px;" for="radios">Pincode</label>
              </div>
              <div class="col-md-8 col-md-pull-1">
                <input type="text" name="pincode" class="col-md-8 ">
              </div>
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