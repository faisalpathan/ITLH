@extends('Backend.layout')
@include('Backend.partials.backheader')
@section('content')

<div class="container" style="border:1px solid black">

<div class="col-md-12">
		<div class="col-md-8">
		<h2>Products</h2>
		</div>
		<div class="col-md-4 col-md-push-2">
		<a href="addproduct"><button class="btn btn-default btn-success btn-lg" style="margin-top:4%;">Add Products</button>
		</a>
    </div>
</div>
<div class="col-md-12">
 <div class="col-md-5 col-md-push-9">      
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

<div class="col-md-12 table-responsive">
              <table id="example" class="table  table-bordered table-hover well">
                <thead style="background-color:#bdbdbd;">
                  <tr class="animtable">
                    <th>Sr No</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Price per unit</th>
                    <th>Units in Inventory</th>
                    <th>Added On</th>
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
                    <td>1</td>
                    <td>Redmi Note 3</td>
                    <td>
                    Mobiles
    				</td>
    				<td>12000</td>
    				<td>5000</td>
    				<td>Date</td>
                    <td>
                    	<a href="editproduct"><button class="btn btn-success">Edit</button>&nbsp;&nbsp;</a>
                    	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Delete</button>&nbsp;&nbsp;
                    	 <div class="modal fade" id="myModal" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <center><h4 class="modal-title">Delete Category</h4></center>
					        </div>
					        <center><div class="modal-body">
					          <p>If you Delete this Product, you will no longer see it in the front end<br/>Are you sure you want to Product this Product ?</p>
					          <br/>
					          <button class="btn btn-success" >Delete</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					        </div></center>
					        <div class="modal-footer">
					          
					        </div>
					      </div>
					      
					    </div>
					  </div>
                    	<button class="btn btn-success">List Attributes</button>
                    </td>
                    
                  </tr>
                  <tr class="animtable">
                    <td>2</td>
                    <td>Samsung Galaxy J5</td>
                    <td>Mobiles</td>
                    <td>15000</td>
                    <td>4500</td>
                    <td>Date</td>
                    <td>
                    <a href="editproduct">	<button  type="button" class="btn btn-success">Edit</button></a>&nbsp;&nbsp;
                    	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Delete</button>&nbsp;&nbsp;
                    	 <div class="modal fade" id="myModal" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <center><h4 class="modal-title">Delete Product</h4></center>
					        </div>
					        <center><div class="modal-body">
					          <p>If you Delete this Product, you will no longer see it in the front end<br/>Are you sure you want to Delete this Product ?</p>
					          <br/>
					          <button class="btn btn-success" >Delete</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					        </div></center>
					        <div class="modal-footer">
					          
					        </div>
					      </div>
					      
					    </div>
					  </div>
                    	<button type="button" class="btn btn-success">List Attributes</button>
                    </td>
                    
                  </tr>
                  
                </tbody>
              </table>
            </div>


</div>



<script src="js/jquery.min.js" ></script>
            <script src="js/bootstrap.min.js"></script>
			      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     
     	<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
			<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
			<script>
										 $(document).ready(function() {
				$('#example').DataTable( {
					"paging":   false,
					"ordering": true,					
					"info":     false,
					"searching": false
				} );
			} );
     </script>
</body>
</html>


@stop