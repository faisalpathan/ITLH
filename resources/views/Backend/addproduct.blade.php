@extends('Backend.layout')
@include('Backend.partials.backheader')
@section('content')

<div class="container" style="border:1px solid black">

<h2>Products / Add Products </h2>
<br/>

	<div class="col-md-12" style="border:1px solid black">

			<div class="col-md-2" style="margin-top:3%;">
			<h4>Product Name</h4>
			</div>

			<div class="col-md-3" style="margin-top:3%;">
			<input type="text" class="form-control" placeholder="Enter product name" >
			</div>

			<div class="col-md-3 col-md-push-2" style="margin-top:3%;">
			<h4>Images</h4>
			</div>

			<div class="col-md-3" style="margin-top:3%;">
				<div class="input-group">

		  		<input type="text" class="form-control">
		  		<span class="input-group-btn">
		    	<button class="btn btn-default btn-success" type="button">Upload</button>
		  		</span>
				
				</div>

				<img src="images/newproduct2.jpg" class="img-responsive" width=245 height=100 style="margin-top:4%;">

				<div class="col-md-1" style="margin-left:100%;margin-top:-10%; "><a href="#"><span class="glyphicon glyphicon-trash" ></span></a>
				</div>

				<input type="text" class="form-control" placeholder=""  style="margin-top:4%;">

				<div class="col-md-1" style="margin-left:100%;margin-top:-10%; "><a href="#"><span class="glyphicon glyphicon-trash" ></span></a>
				</div>
				<div class="col-md-8" style="margin-left:18%;margin-top:4%;">
				<a href="#"><span class="glyphicon glyphicon-plus"></span></a>Add more Images<br/><br/><br/>
				</div>	

				<div class="col-md-8">
				<div class="col-md-3 col-md-push-4">
		 	<button type="button" class="btn btn-default btn-success btn-md">Add Product</button>
		 </div>
		 <div class ="col-md-3 col-md-push-12">
		 	<button type="button" class="btn btn-default btn-success btn-md">Cancel</button>
		</div>				
				</div>	
			</div>
			<div class="col-md-12">
			<br/><br/>
			</div>

			<div class="col-md-12" style="margin-top:-40%;margin-left:-2%;">

			<div class="col-md-12" >

				<div class="col-md-2" style="margin-top:3%;">
			<h4>Quatity in Stock</h4>
			</div>

			<div class="col-md-3" style="margin-top:3%;">
			<input type="text" class="form-control" placeholder="Enter Quantity in Stock" >
			</div>

			</div>

			

			<div class="col-md-12">

			<div class="col-md-2" style="margin-top:3%;">
			<h4>Price per Unit</h4>
			</div>

			<div class="col-md-3" style="margin-top:3%;">
			<input type="text" class="form-control" placeholder="Enter price per Unit" >
			</div>

			</div>

			<div class="col-md-12">

			<div class="col-md-2" style="margin-top:3%;">
			<h4>Category</h4>
			</div>

			<div class="col-md-3" style="margin-top:3%;">
			<select class="custom-select" style="width:100%;height:6%;">
							  <option selected>Mobiles</option>
							  <option value="1">Tablets</option>
							  <option value="2">Laptops</option>
							  <option value="3">Processors</option>
							  <option value="4">Motherboard</option>
							  </select>

			</div>

			</div>

			<div class="col-md-12">

			<div class="col-md-2" style="margin-top:3%;">
			<h4>RAM</h4>
			</div>

			<div class="col-md-3" style="margin-top:3%;">
			<input type="text" class="form-control" placeholder="Enter RAM" >
			</div>

			</div>

			<div class="col-md-12">

			<div class="col-md-2" style="margin-top:3%;">
			<h4>Processor</h4>
			</div>

			<div class="col-md-3" style="margin-top:3%;">
			<input type="text" class="form-control" placeholder="Enter Processor" >
			</div>

			</div>
			<div class="col-md-12">
				<br/>
				<br/>
			</div>
			</div>
	</div>
	<div class="col-md-12">
		<br/><br/>
	</div>

</div>

<script src="js/jquery.min.js" ></script>
            <script src="js/bootstrap.min.js"></script>
			      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>
</html>
@stop