@extends('Backend.layout')
@include('Backend.partials.backheader')
@section('content')
<div class="container" style="border:1px solid black;">
	<div class="row">
		<div class="col-md-12">
		<div class="col-md-5">
		<h2>DashBoard</h2>
		</div>
		<div class="col-md-7" style="margin-top:2%;">
                         
                 <div class="col-md-4 col-md-push-4">
                 <label>To :</label> &nbsp;&nbsp;&nbsp;
                <input type="text" class="datepicker" placeholder="        /      /  " style="width:50%;">                
                </div>
              
              <div class="col-md-4 col-md-push-4">
              <label>From :</label> &nbsp;&nbsp;&nbsp;
                <input type="text" class="datepicker" placeholder="      /       /   "  style="width:50%;">                
                </div>
              </div>
		</div>
		
				<div class="col-md-11 col-md-push-0" style="border:1px solid black;margin-top:4%;margin-left:4%;">
				<a href="#"><img src="images/graph.jpg" class="img-responsive" width="1140"></a>	
				</div>
				
		<br/><br/>
			<div class="container">
				<div class="col-md-3" style="border:1px solid black;margin-top:3%; margin-left: 2.8%;">
				<h4>Most Sold Products</h4>
				<ul class="nav nav-pills nav-stacked">
    			<li><a href="#">Home</a></li>
    			<li><a href="#">Menu 1</a></li>
   				<li><a href="#">Menu 2</a></li>
    			<li><a href="#">Menu 3</a></li>
  				</ul>
				</div>
				<div class="col-md-1">
				</div>
				<div class="col-md-3" style="border:1px solid black;margin-top:3%; margin-left: 2%;">
				<h4>Most Profitable Products</h4>
				<ul class="nav nav-pills nav-stacked">
    			<li><a href="#">Home</a></li>
    			<li><a href="#">Menu 1</a></li>
   				<li><a href="#">Menu 2</a></li>
    			<li><a href="#">Menu 3</a></li>
  				</ul>
				</div>
				<div class="col-md-1">
				</div>
				<div class="col-md-3" style="border:1px solid black;margin-top:3%; margin-left: 8%;">
				<h4>Most Important Client</h4>
				<ul class="nav nav-pills nav-stacked">
    			<li><a href="#">Home</a></li>
    			<li><a href="#">Menu 1</a></li>
   				<li><a href="#">Menu 2</a></li>
    			<li><a href="#">Menu 3</a></li>
  				</ul>
				</div>
				<div class="col-md-1">
				</div>
			</div>
		</div>
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
</body>
</html>

@stop