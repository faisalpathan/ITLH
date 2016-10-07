@extends('Backend.layout')
@include('Backend.partials.backheader')
@section('content')
<div class="container" style="border:1px solid black">
		
		<div class="col-md-12">
		<div class="col-md-3">
		<h2>Categories</h2>
		</div>
		<div class="col-md-9 col-md-push-7">
		<a href="addcategory"><input type="button" value="Add Category" style="margin-top:2%;margin-left:5%;" class="btn btn-success" >
		</a></div>
        </div>

<div class="col-md-12 table-responsive">
              <table id="example" class="table  table-bordered table-hover well">
                <thead style="background-color:#bdbdbd;">
                  <tr class="animtable">
                    <th>Sr No</th>
                    <th>Category</th>
                    <th>Is Visible</th>
                    <th>Actions</th>
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
                    <td>Mobile</td>
                    <td>
                    <div class="checkbox">
    				<label><input type="checkbox" value=""checked>&nbsp;True</label>
    				</div>
    				</td>
                    <td>
                    	<a href="editcategory"><button class="btn btn-success">Edit</button></a>&nbsp;&nbsp;
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
					          <p>If you Delete this category, you will no longer see it in the front end<br/>Are you sure you want to Delete this category ?</p>
					          <br/>
					          <button class="btn btn-success" >Delete</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					        </div></center>
					        <div class="modal-footer">
					          
					        </div>
					      </div>
					      
					    </div>
					  </div>
                    	<a href="listattributes"><button class="btn btn-success">List Attributes</button></a>
                    </td>
                    
                  </tr>
                  <tr class="animtable">
                    <td>2</td>
                    <td>Tablets</td>
                    <td><div class="checkbox">
    				<label><input type="checkbox" value="" checked>&nbsp;True</label>
    				</div></td>
                    <td>
                    	<a href="editcategory"><button  type="button" class="btn btn-success">Edit</button></a>&nbsp;&nbsp;
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
					          <p>If you Delete this category, you will no longer see it in the front end<br/>Are you sure you want to Delete this category ?</p>
					          <br/>
					          <button class="btn btn-success" >Delete</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					        </div></center>
					        <div class="modal-footer">
					          
					        </div>
					      </div>
					      
					    </div>
					  </div>
                    	<a href="listattributes"><button type="button" class="btn btn-success">List Attributes</button></a>
                    </td>
                    
                  </tr>
                  <tr class="animtable">
                    <td>3</td>
                    <td>Laptops</td>
                    <td><div class="checkbox">
    				<label><input type="checkbox" value="" checked>&nbsp;True</label>
    				</div></td>
                    <td>
                    	<a href="editcategory"><button type="button" class="btn btn-success" >Edit</button></a>&nbsp;&nbsp;
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
					          <p>If you Delete this category, you will no longer see it in the front end<br/>Are you sure you want to Delete this category ?</p>
					          <br/>
					          <button class="btn btn-success" >Delete</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					        </div></center>
					        <div class="modal-footer">
					          
					        </div>
					      </div>
					      
					    </div>
					  </div>
                    	<a href="listattributes"><button type="button" class="btn btn-success">List Attributes</button></a>
                    </td>
                    
                  </tr>
                  <tr class="animtable">
                    <td>4</td>
                    <td>Motherboards</td>
                    <td><div class="checkbox">
    				<label><input type="checkbox" value="" checked>&nbsp;True</label>
    				</div></td>
                    <td>
                    	<a href="editcategory"><button type="button" class="btn btn-success">Edit</button></a>&nbsp;&nbsp;
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
					          <p>If you Delete this category, you will no longer see it in the front end<br/>Are you sure you want to Delete this category ?</p>
					          <br/>
					          <button class="btn btn-success" >Delete</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					        </div></center>
					        <div class="modal-footer">
					          
					        </div>
					      </div>
					      
					    </div>
					  </div>
                    	<a href="listattributes"><button type="button" class="btn btn-success">List Attributes</button></a>
                    </td>
                    
                  </tr>
                  <tr class="animtable">
                    <td>5</td>
                    <td>Processors</td>
                    <td><div class="checkbox">
    				<label><input type="checkbox" value=""checked>&nbsp;True</label>
    				</div></td>
                    <td>
                    	<a href="editcategory"><button class="btn btn-success">Edit</button></a>&nbsp;&nbsp;
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
					          <p>If you Delete this category, you will no longer see it in the front end<br/>Are you sure you want to Delete this category ?</p>
					          <br/>
					          <button class="btn btn-success" >Delete</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					        </div></center>
					        <div class="modal-footer">
					          
					        </div>
					      </div>
					      
					    </div>
					  </div>
                    	<a href="listattributes"><button class="btn btn-success">List Attributes</button></a>
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
					"search": false,
					"info":     false
				} );
			} );
     </script>
</body>
</html>


@stop