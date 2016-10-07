@extends('Backend.layout')
@include('Backend.partials.backheader')
@section('content')


<div class="container" style="border:1px solid black">
		
		<div class="col-md-12">
		<div class="col-md-8">
		<h3>List Attributes for Category {Name of the category selected }</h3>
		</div>
		<div class="col-md-4 col-md-push-2">
		<input type="button" value="Add Atrributes" data-toggle="modal" data-target="#myModal" style="margin-top:4%;margin-left:5%;" class="btn btn-success" >
		<div class="modal fade" id="myModal" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <center><h4 class="modal-title">Add Category</h4></center>
					        </div>
					        <center><div class="modal-body">
					          <p>Attribute Name</p>
					          <br/>
					          <input type="text" value="" style="width:40%;height:5%;"><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;
					          <input type="text" value="" style="width:40%;height:5%;">&nbsp;&nbsp;<a href="#"><span class="glyphicon glyphicon-trash"></span></a><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;
					          <input type="text" value="" style="width:40%;height:5%;">&nbsp;&nbsp;<a href="#"><span class="glyphicon glyphicon-trash"></span></a><br/><br/>

					          <a href="#"><span class="glyphicon glyphicon-plus"></span></a>Add an Attribute<br/><br/><br/>

					          <button class="btn btn-success btn-md" >Save</button>&nbsp;&nbsp;&nbsp;&nbsp;
					          <button type="button" class="btn btn-default btn-md" data-dismiss="modal">Cancel</button>
					        </div></center>
					        <div class="modal-footer">
					          
					        </div>
					      </div>
					      
					    </div>
					  </div>

		</div>
        </div>

        <div class="col-md-12 table-responsive">
              <table id="example" class="table  table-bordered table-hover well">
                <thead style="background-color:#bdbdbd;">
                  <tr class="animtable">
                    <th>Sr No</th>
                    <th>Attribute Name</th>
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
                    <td>RAM</td>
                    
                    <td>
                    <button class="btn btn-success">Edit</button>&nbsp;&nbsp;
                    <button class="btn btn-success">Delete</button>&nbsp;&nbsp;
				  </td>
                  </tr>
                  <tr class="animtable">
                    <td>2</td>
                    <td>PROCESSORS</td>
                    <td>
                    <button class="btn btn-success">Edit</button>&nbsp;&nbsp;
                    <button class="btn btn-success">Delete</button>&nbsp;&nbsp;
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