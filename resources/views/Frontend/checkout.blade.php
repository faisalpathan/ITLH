@extends('Frontend.layout')
@include('Frontend.partials.header')
@section('content')
<br/>

<div class=" col-md-12 container-fluid wow fadeInUp">
      <div class="row">
        <div class="col-md-12 col-md-push-0">
          <!--Upper part-->
          <div class="col-md-12  text-justify well well-lg" style="border:1px solid; border-radius:0px;">
            <h4 style="margin-left:30%;">You Must Login Sign Up before You can buy the product</h5>
            <div>
              <br><br/>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 style="background:color:grey; text-align:center;" class="modal-title" id="myModalLabel">Login</h4>
                  </div>
                  <!-- Modal Body -->
                  <div class="modal-body">
                    <form class="form-horizontal" role="form">
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="inputuser">Username</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control input-lg" id="inputuser" placeholder="Username">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="inputPassword3">Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control input-lg" id="inputPassword3" placeholder="Password">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-success btn-responsive">Sign in</button>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-success btn-responsive" data-dismiss="modal">Cancel</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- Button trigger modal -->
           <a href="login>" <button type="button" style="margin-left:35%;"class="btn btn-success btn-default col-md-1" data-toggle="modal" data-target="#myModalNorm">Login</button></a>
            <!-- Modal -->
            <div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header" style="background-color:grey;">
                    <h4 class="modal-title" style="text-align:center;" id="myModalLabel">Login</h4>
                  </div>
                  <!-- Modal Body -->
                  <div class="modal-body">
                    <form role="form">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-success col-md-offset-3 btn-responsive">Sign in</button>
                        <button type="button" class="btn btn-success col-md-offset-2 btn-responsive" data-dismiss="modal">Cancel</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <a href="signup" ><button type="button" class="btn btn-success btn-responsive col-md-1 col-md-push-1">Sign Up</button></a>
          </div>
        </div>
        <div class=" col-md-12 container-fluid wow fadeInUp">
          <div class="row">
            <div class="col-md-12 col-md-push-0">
              <!--Lower part-->
              <div class="col-md-12  text-justify well " style="border:1px solid; border-radius:0px;">
                <div class="col-md-12">
                  <h3>Checkout</h3>
                </div>
                <div class="col-md-12 table-responsive">
                  <table id="example" class="table  table-bordered table-striped ">
                    <thead style="background-color:#bdbdbd;">
                      <tr class="animtable">
                        <th>Product Name</th>
                        <th>Availability</th>
                        <th>Quantity</th>
                        <th>price</th>
                        <th>Payment Option</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr class="animtable"> 
                        <th id="FooterHidden"></th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <tr class="animtable">
                        <td>Xiaomi Redmi Note 3</td>
                        <td>In Stock</td>
                        <td>3</td>
                        <td>35000</td>
                        <td>Cash On Delivery</td>
                        <td>Remove</td>
                      </tr>
                      <tr class="animtable">
                        <td>Moto G4 Plus(32GB)</td>
                        <td>Out Of Stock</td>
                        <td>2</td>
                        <td>35000</td>
                        <td>Cash On Delivery</td>
                        <td>Remove</td>
                      </tr>
                      <tr class="animtable">
                        <td>Moto Z</td>
                        <td>In Stock</td>
                        <td>1</td>
                        <td>35000</td>
                        <td>Cash On Delivery</td>
                        <td>Remove</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!--Main bottom part-->
                <div class="col-md-12">
                  <div class="col-md-12">
                    <h3>Shipping Address</h3>
                  </div>
                  <div class="col-md-4">
                    <!--This is for shipping address-->
                    <textarea rows="4" class="col-md-12" name="permanentaddress"></textarea>
                  </div>
                  <div class="col-md-3">
                    <!--This is for Checkbox-->
                    <input type="checkbox" name="permanentaddresschk" value="">Same as Permanent Address</div>
                  <div class="col-md-3 col-md-push-3">
                    <!--This is for Buy now button-->
                    <a href="orderconfirm"><button type="button" class="btn btn-success col-md-6 btn-responsive">Buy Now</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
             
			<script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
			<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
			<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
			<script>
						 $(document).ready(function() {
				$('#example').DataTable( {
					"paging":   false,
					"ordering": true,
					"info":     false
				} );
			} );
					
            </script>                                                                                                                                               
            <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
            <script>
              new WOW().init();
              </script>                                                       
</body>
</html>
@stop