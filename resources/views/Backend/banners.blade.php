@extends('Backend.layout')
@include('Backend.partials.backheader')
@section('content')

<div class="container" style="border:1px solid black">
		
		<div class="col-md-12">
		<div class="col-md-3">
		<h2>Banners</h2>
		</div>
		<div class="col-md-9 col-md-push-7">
		<input type="button" value="Add Banner" style="margin-top:4%;margin-left:1%;" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal1">
		<div class="modal fade" id="myModal1" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <center><h4 class="modal-title">Add Banner</h4></center>
					        </div>
					        <center><div class="modal-body">
					          <p>Select an image to add in the  Banner list</p>
					          <br/>
							<div class="input-group col-md-5">
					  		<input type="text" class="form-control">
					  		<span class="input-group-btn">
					    	<button class="btn btn-default btn-success" type="button">Upload</button>
					  		</span>
							</div>
							<div style="margin-left:47%;margin-top:-4%;">
							&nbsp;&nbsp;&nbsp;<a href="#"><span class="glyphicon glyphicon-trash"></span></a>
							</div>
					          <br/><br/>
					          <button class="btn btn-success" >Add</button>&nbsp;&nbsp;&nbsp;
					          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					        </div></center>
					        <div class="modal-footer">
					          
					        </div>
					      </div>
					      
					    </div>
					  </div>

		</div>
        </div>


        <div class="col-md-12 table-responsive" style="margin-top: 3%;">
              <table id="example" class="table  table-bordered table-hover well">
                <thead style="background-color:#bdbdbd;">
                  <tr class="animtable">
                    <th>Sr No</th>
                    <th>Banner name</th>
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
                    <td>Banner1.jpg</td>
                    <td>
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
					          <p>If you Delete this banner, you will no longer see it in the front end<br/>Are you sure you want to Delete this banner ?</p>
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
                    <td>2</td>
                    <td>Banner2.jpg</td>
                    <td>  
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
					          <p>If you Delete this banner, you will no longer see it in the front end<br/>Are you sure you want to Delete this banner ?</p>
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
                    <td>3</td>
                    <td>Banner3.jpg</td>
                    <td>                  	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Delete</button>&nbsp;&nbsp;
                    	 <div class="modal fade" id="myModal" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <center><h4 class="modal-title">Delete Category</h4></center>
					        </div>
					        <center><div class="modal-body">
					          <p>If you Delete this banner, you will no longer see it in the front end<br/>Are you sure you want to Delete this banner ?</p>
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
					"search": false,
					"info":     false
				} );
			} );
     </script>
</body>
</html>


@stop