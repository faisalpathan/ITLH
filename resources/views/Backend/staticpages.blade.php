@extends('Backend.layout')
@include('Backend.partials.backheader')
@section('content')

<div class="container" style="border:1px solid black">
		
		<div class="col-md-12">
		<div class="col-md-3">
		<h2>Static Pages</h2>
		</div>
		<div class="col-md-9 col-md-push-6">
		<input type="button" value="Add Static Pages" style="margin-top:2%;margin-left:5%;" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal2">

		<div class="modal fade" id="myModal2" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <center><h4 class="modal-title">Add Static Page</h4></center>
					        </div>
					        <center>

					        <div class="modal-body">
					          
					          <div class="col-md-12">

					        	<div class="col-md-4" style="margin-top:3%;">
									<h4>Product Name</h4>
								</div>

								<div class="col-md-8" style="margin-top:3%;">
									<input type="text" class="form-control" placeholder="Enter product name" style="width:100%;" >
								</div>

							  </div>

					        	<div class="col-md-12">

					        	<div class="col-md-4" style="margin-top:3%;">
									<h4>URL</h4>
								</div>

								<div class="col-md-8" style="margin-top:3%;">
									<input type="text" class="form-control" placeholder="Enter URL here" style="width:100%;" >
								</div>

							  </div>

							  <div class="col-md-12">

					        	<div class="col-md-4" style="margin-top:3%;">
									<h4>Icon</h4>
								</div>

								<div class="col-md-8" style="margin-top:3%;">
									<div class="input-group col-md-5" style="width:102%;">
									<input type="text" class="form-control">
					  				<span class="input-group-btn">
					    			<button class="btn btn-default btn-success" type="button" style="width:90%";>Upload</button>
					  				</span>
					  				</div>
								</div>

							  </div>

							  <div class="col-md-12">

							  <div class="col-md-4" style="margin-top:3%;">
									<h4>Body</h4>
								</div>							  	

							  <div class="col-md-8" style="margin-top:3%;">

							  <textarea class="form-control" rows="5" cols="40" id="comment"></textarea>

							  </div>

							  </div>


					          <br/>
					          <div class="col-md-12"><br/></div>
					          <button class="btn btn-success" >Add</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					        </div></center>
					        <div class="modal-footer">
					          
					        </div>
					      </div>
					      
					    </div>
					  </div>
		</div>
        </div>

        <div class="col-md-12 table-responsive" style="margin-top: 5%;">
              <table id="example" class="table  table-bordered table-hover well">
                <thead style="background-color:#bdbdbd;">
                  <tr class="animtable">
                    <th>Sr No</th>
                    <th>Name</th>
                    <th>Body</th>
                    <th>URL</th>
                    <th>Icon name</th>
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
                    <td>Offers</td>
                    <td>
                    Body Content
    				</td>
    				<td>ecom/page.com</td>
    				<td>Offers.png</td>
    				
                    <td>
                    	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1">Edit</button>&nbsp;&nbsp;
                    	 <div class="modal fade" id="myModal1" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <center><h4 class="modal-title">Edit Static Page</h4></center>
					        </div>
					        <center>

					        <div class="modal-body">
					          
					          <div class="col-md-12">

					        	<div class="col-md-4" style="margin-top:3%;">
									<h4>Product Name</h4>
								</div>

								<div class="col-md-8" style="margin-top:3%;">
									<input type="text" class="form-control" placeholder="Enter product name" style="width:100%;" >
								</div>

							  </div>

					        	<div class="col-md-12">

					        	<div class="col-md-4" style="margin-top:3%;">
									<h4>URL</h4>
								</div>

								<div class="col-md-8" style="margin-top:3%;">
									<input type="text" class="form-control" placeholder="Enter URL here" style="width:100%;" >
								</div>

							  </div>

							  <div class="col-md-12">

					        	<div class="col-md-4" style="margin-top:3%;">
									<h4>Icon</h4>
								</div>

								<div class="col-md-8" style="margin-top:3%;">
									<div class="input-group col-md-5" style="width:102%;">
									<input type="text" class="form-control">
					  				<span class="input-group-btn">
					    			<button class="btn btn-default btn-success" type="button" style="width:90%";>Upload</button>
					  				</span>
					  				</div>
								</div>

							  </div>

							  <div class="col-md-12">

							  <div class="col-md-4" style="margin-top:3%;">
									<h4>Body</h4>
								</div>							  	

							  <div class="col-md-8" style="margin-top:3%;">

							  <textarea class="form-control" rows="5" cols="40" id="comment"></textarea>

							  </div>

							  </div>


					          <br/>
					          <div class="col-md-12"><br/></div>
					          <button class="btn btn-success" >Edit</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					        </div></center>
					        <div class="modal-footer">
					          
					        </div>
					      </div>
					      
					    </div>
					  </div>
                    	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Delete</button>&nbsp;&nbsp;
                    	 <div class="modal fade" id="myModal" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <center><h4 class="modal-title">Delete Static Page</h4></center>
					        </div>
					        <center><div class="modal-body">
					          <p>If you Delete this Static page, you will no longer see it in the front end<br/>Are you sure you want to Delete this Static page ?</p>
					          <br/>
					          <button class="btn btn-success" >Delete</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					        </div></center>
					        <div class="modal-footer">
					          
					        </div>
					      </div>
					      
					    </div>
					  </div>
                    	
                    </td>
                    
                  </tr>
                  <tr class="animtable">
                    <td>1</td>
                    <td>Offers</td>
                    <td>
                    Body Content
    				</td>
    				<td>ecom/page.com</td>
    				<td>Offers.png</td>
    				
                    <td>
                    	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1">Edit</button>&nbsp;&nbsp;
                    	 <div class="modal fade" id="myModal1" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <center><h4 class="modal-title">Edit Static Page</h4></center>
					        </div>
					        <center>

					        <div class="modal-body">
					          
					          <div class="col-md-12">

					        	<div class="col-md-4" style="margin-top:3%;">
									<h4>Product Name</h4>
								</div>

								<div class="col-md-8" style="margin-top:3%;">
									<input type="text" class="form-control" placeholder="Enter product name" style="width:100%;" >
								</div>

							  </div>

					        	<div class="col-md-12">

					        	<div class="col-md-4" style="margin-top:3%;">
									<h4>URL</h4>
								</div>

								<div class="col-md-8" style="margin-top:3%;">
									<input type="text" class="form-control" placeholder="Enter URL here" style="width:100%;" >
								</div>

							  </div>

							  <div class="col-md-12">

					        	<div class="col-md-4" style="margin-top:3%;">
									<h4>Icon</h4>
								</div>

								<div class="col-md-8" style="margin-top:3%;">
									<div class="input-group col-md-5" style="width:102%;">
									<input type="text" class="form-control">
					  				<span class="input-group-btn">
					    			<button class="btn btn-default btn-success" type="button" style="width:90%";>Upload</button>
					  				</span>
					  				</div>
								</div>

							  </div>

							  <div class="col-md-12">

							  <div class="col-md-4" style="margin-top:3%;">
									<h4>Body</h4>
								</div>							  	

							  <div class="col-md-8" style="margin-top:3%;">

							  <textarea class="form-control" rows="5" cols="40" id="comment"></textarea>

							  </div>

							  </div>


					          <br/>
					          <div class="col-md-12"><br/></div>
					          <button class="btn btn-success" >Edit</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					        </div></center>
					        <div class="modal-footer">
					          
					        </div>
					      </div>
					      
					    </div>
					  </div>
                    	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Delete</button>&nbsp;&nbsp;
                    	 <div class="modal fade" id="myModal" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <center><h4 class="modal-title">Delete Static Page</h4></center>
					        </div>
					        <center><div class="modal-body">
					          <p>If you Delete this Static page, you will no longer see it in the front end<br/>Are you sure you want to Delete this Static page ?</p>
					          <br/>
					          <button class="btn btn-success" >Delete</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					        </div></center>
					        <div class="modal-footer">
					          
					        </div>
					      </div>
					      
					    </div>
					  </div>
                    	
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
					"searching": false,
					"info":     false
				} );
			} );
     </script>
</body>
</html>


@stop