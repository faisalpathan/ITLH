@extends('Backend.layout')
@include('Backend.partials.backheader')
@section('content')
<div class="container" style="border:1px solid black;">
<h2>Category / Edit Category</h2>
<br/><br/>
		<div class="col-md-12">
		<div class="col-md-3">
		<h4>Category Title</h4>
		</div>
		<div class="col-md-3">
		<input id="cname" name="cname" placeholder="Ente Category title" class="form-control input-md" type="text">
		</div>
		</div>

		<div class="col-md-12" style="margin-top: 2%;">
		<div class="col-md-3">
		<h4>Is Visible</h4>
		</div>
		<div class="col-md-4" style="margin-top: 1%;">
				<label class="radio-inline">
		      <input type="radio" name="optradio" checked="checked" >True
		    </label>
		    <label class="radio-inline">
		      <input type="radio" name="optradio">False
		    </label>
		</div>
		</div>

		<div class="col-md-12" style="margin-top: 3%;">
		<div class="col-md-3">
		<h4>Icon</h4>
		</div>
		<div class="col-md-3">
				<div class="input-group">
		  		<input type="text" class="form-control">
		  		<span class="input-group-btn">
		    	<button class="btn btn-default btn-success" type="button">Upload</button>
		  		</span>
				</div>
				<br>
				<img src="images/newproduct2.jpg" class="img-responsive" width=150 height=150>
				
				<div class="col-md-9 col-md-push-5" style="margin-top:-55%;margin-left:19%">
				<h5>Thumbnail of the Icon</h5>
				<br/><br/>
				<a href="#"><span class="glyphicon glyphicon-trash"></span></a>
				</div>
		</div>
		</div>
		<br/>
		<div class ="col-md-12" style="margin-top:4%;">
		<div class="col-md-2 col-md-push-3">
		 	<button type="button" class="btn btn-default btn-success btn-lg">Save</button>
		 </div>
		 <div class ="col-md-3 col-md-push-2">
		 	<button type="button" class="btn btn-default btn-success btn-lg">Cancel</button>
		</div>		
		</div>
		<div class="col-md-12" style="margin-top:2%;">
		</div>
</div>
<script src="js/jquery.min.js" ></script>
            <script src="js/bootstrap.min.js"></script>
			      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>
</html>
@stop