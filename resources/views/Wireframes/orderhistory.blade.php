@extends('Wireframes.layout')
@include('Wireframes.partials.header2')
@section('content')
<br/>

            <div class=" colo-md-12 container-fluid">
      <div class="row">
        <div class="col-md-12 col-md-push-0">
          <!--Lower part-->
          <div class="col-md-12  text-justify well " style="border:1px solid; border-radius:0px;">
            <div class="col-md-12">
              <h3>Order History</h3>
            </div>
            <div class="col-md-12 table-responsive">
              <table id="example" class="table  table-bordered table-striped">
                <thead style="background-color:#bdbdbd;">
                  <tr class="animtable">
                    <th>Sr No</th>
                    <th>Product Name</th>
                    <th>Categeory</th>
                    <th>Quantity</th>
                    <th>Ordered On</th>
                    <th>Price</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr class="animtable">
                    <th id="FooterHidden"></th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr class="animtable">
                    <td>1</td>
                    <td>Redmin Note 3</td>
                    <td>Mobiles</td>
                    <td>1</td>
                    <td>Date</td>
                    <td>12000/-</td>
                    <td>Pending</td>
                  </tr>
                  <tr class="animtable">
                    <td>2</td>
                    <td>Moto G4 plus</td>
                    <td>Mobiles</td>
                    <td>1</td>
                    <td>Date</td>
                    <td>13000/-</td>
                    <td>Delivered</td>
                  </tr>
                  <tr class="animtable">
                    <td>3</td>
                    <td>Moto Z4</td>
                    <td>Mobiles</td>
                    <td>1</td>
                    <td>Date</td>
                    <td>11000/-</td>
                    <td>Pending</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div><br/>

			<script src="js/jquery.min.js" ></script>
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