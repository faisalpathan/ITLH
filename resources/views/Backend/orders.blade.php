@extends('Backend.layout')
@include('Backend.partials.backheader')
@section('content')
<div class="container" style="border:1px solid black">
		<h2>Orders</h2>
		<br/>
		<div class="col-md-12">
		<div class="col-md-8" style="margin-top:2%;">
                         
                 <div class="col-md-5 col-md-push-5">
                 <label>To :</label> &nbsp;&nbsp;&nbsp;
                 <input type="text" class="datepicker" placeholder="        /      /  " style="width:50%;">                
                 </div>
              
                 <div class="col-md-5 col-md-push-4">
                 <label>From :</label> &nbsp;&nbsp;&nbsp;
                 <input type="text" class="datepicker" placeholder="      /       /   "  style="width:50%;">                
                 </div>
        </div>
        <div class="col-md-4 col-md-push-1">      
                 <ul class="pagination">
                  <li>
                    <a href="#" class="col-md-3">Prev</a>
                  </li>
                  <li>
                    <a href="#" class="col-md-1">1</a>
                  </li>
                  <li>
                    <a href="#" class="col-md-1">2</a>
                  </li>
                  <li>
                    <a href="#" class="col-md-1">3</a>
                  </li>
                  <li>
                    <a href="#" class="col-md-1">4</a>
                  </li>
                  <li>
                    <a href="#" class="col-md-3">Next</a>
                  </li>
                </ul>
         </div>
		</div>
		<br/><br/>
		<style type="text/css">
		.caret{
    color: red;
}
</style>
		<div class="col-md-12 table-responsive">
              <table id="example" class="table  table-bordered table-hover well">
                <thead style="background-color:#bdbdbd;">
                  <tr class="animtable">
                    <th>Sr No</th>
                    <th>Username</th>
                    <th>Ordered On</th>
                    <th>Payment Method</th>
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
                    <td>123@gmail.com</td>
                    <td>1/15/16</td>
                    <td>Cash On Delivery</td>
                    <td>
                    <select name="Status" class="select-responsive selectpicker">
					<option value="Pending">Pending</option>
					<option value="Delivered">Delivered</option>
					</select>
				  </td>
                  </tr>
                  <tr class="animtable">
                    <td>2</td>
                    <td>456@ymail.com</td>
                    <td>4/15/16</td>
                    <td>Cash On Delivery</td>
                    <td><select name="Status">
					<option value="Pending">Pending</option>
					<option value="Delivered">Delivered</option>
					</select></td>
                  </tr>
                  <tr class="animtable">
                    <td>3</td>
                    <td>789@rediffmail.com</td>
                    <td>7/15/16</td>
                    <td>Online Banking</td>
                    <td><select name="Status">
					<option value="Pending">Pending</option>
					<option value="Delivered">Delivered</option>
					</select></td>
                  </tr>
                </tbody>
              </table>
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
</body>
</html>

@stop