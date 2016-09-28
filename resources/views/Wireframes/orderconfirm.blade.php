@extends('Wireframes.layout')
@include('Wireframes.partials.header2')
@section('content')
<br/>
<div class=" colo-md-12 container-fluid wow fadeIn">
      <div class="row">
        <div class="col-md-12 col-md-push-0">
          <!--Upper part-->
          <div class="col-md-12  text-justify well well-lg" style="border:1px solid; border-radius:0px;">
            <div class="col-md-12">
              <h2><font color="lightgreen"><span class="glyphicon glyphicon-check"></span>&nbsp;Order Confirmed</font></h4>
            </div><br/><br/>
            <div class="col-md-12">
              <h3><span class="glyphicon glyphicon-gift"></span>&nbsp;Congratulations.</h4>
            </div>
            <div class="col-md-12">
              <h4><span class="glyphicon glyphicon-info-sign"></span>&nbsp;Your Order for following products has been placed successfully. It will  be processed and dispatched<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;immediately. You are likely to receive it in 8-9 days.</h4>
              <br>
            </div>
            <div class="col-md-12"></div>
            <div class="col-md-12">
              <h4>Thank You For Shopping With Us.&nbsp;<i class="fa fa-smile-o" aria-hidden="true"></i></h4>
              <br>
              <br>
            </div>
             <div class="col-md-12 table-responsive">
                  <table id="myTable" class="table  table-bordered table-striped">
                    <thead style="background-color:#bdbdbd;">
                     <tr>
                  <th>Sr No</th>
                  <th>Product Name</th>
                  <th>Categeory</th>
                  <th>Ordered On</th>
                  <th>Price</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th id="FooterHidden"></th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Redmin Note 3</td>
                  <td>Mobiles</td>
                  <td>Date</td>
                  <td>12000/-</td>
                  <td>Pending</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Moto G4 plus</td>
                  <td>Mobiles</td>
                  <td>Date</td>
                  <td>13000/-</td>
                  <td>Pending</td>
                </tr>
              </tbody>
                  </table>
                </div>
            </table>
            <div>
              <br>
            </div>
          </div>
        </div>
      </div>
    </div>
  
			<script src="js/jquery.min.js" ></script>
            <script src="js/bootstrap.min.js"></script>
			<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
			<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
			<script>
						 $(document).ready(function() {
				$('#myTable').DataTable( {
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