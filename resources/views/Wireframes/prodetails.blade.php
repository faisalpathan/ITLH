@extends('Wireframes.layout')
@include('Wireframes.partials.header')
@section('content')
<br/>

        <div class="container well wow fadeInUp" style="border :1px solid black; padding-left:10px;padding-right:10px;padding-bottom:10px;padding-top:10px;">
        <div class="container" style=" ">
        <h1>Xiaomi Redmi Note 3</h1>
        <div class="col-md-5" style="margin-bottom:20px; margin-left:-16px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/topselling1.jpg" width="350px" height="380px"></div>
        <div class="col-md-3" style="margin-left:100px;">
            <h1>Order now</h1><br><br>
            <style>
                #errmsg
                {
                color: red;
                }
            </style>
           
            <p>Quantity : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input style="width:45px; height:30px;" type="text" class="inputs" value="1" id="quantity" size="2" min="1"><span id="errmsg"></span>
			&nbsp;<button id="plus" >+</button>&nbsp;<button id="minus">-</button></p><br>
            <p>Availability : &nbsp;&nbsp;<font color="lightgreen" size=4> In Stock</font></p>
                      
                     <br><br><br>
            </p><p>Price : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs 12000/-</p><br>
        </div>
        <div class="col-md-3" style="padding-bottom:7px; padding-left:20px;">
        <h2>Payment Options</h2>
        <form><br>
    <div class="radio">
      <label><input type="radio" name="optradio">Net Banking</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio">Credit Card</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio">Debit Card</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio">Cash On Delivery</label>
    </div>
  </form><br>
     <a href="checkout"><button class="myButton" style="margin-left:27px;margin-top:26px;">Checkout</button></a>
        </div>    
        </div>
    <br><br/>  
    
  </div>
  <div class="row wow fadeInUp">
    <div class="col-md-12">
      <div class="carousel carousel-showmanymoveone slide" id="carousel123">
        <div class="carousel-inner">
          <div class="item active">
            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="http://placehold.it/500/0054A6/fff/&amp;text=1" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="http://placehold.it/500/002d5a/fff/&amp;text=2" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="http://placehold.it/500/d6d6d6/333&amp;text=3" class="img-responsive"></a></div>
          </div>          
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="http://placehold.it/500/002040/eeeeee&amp;text=4" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="http://placehold.it/500/0054A6/fff/&amp;text=5" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="http://placehold.it/500/002d5a/fff/&amp;text=6" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="http://placehold.it/500/eeeeee&amp;text=7" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="http://placehold.it/500/40a1ff/002040&amp;text=8" class="img-responsive"></a></div>
          </div>
        </div>
        <a class="left carousel-control" href="#carousel123" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a class="right carousel-control" href="#carousel123" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
    </div>
  </div>
  
   <br><br><br/><br/>
   <div class="container wow fadeInUp well">
   <ul class="nav nav-tabs"> 
            <li class="active">
                <a href="#tab1" data-toggle="tab">Specifications</a>
            </li>             
            <li></li>             
            <li></li>             
            <li></li>             
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab1">
                <table style="" border="1px dotted black" class="table  table-bordered table-hover">
<tbody>
<tr class="animtable" style="height: 36px;">
<td style="height: 36px; width: 44%;background-color: #f8f8ff;">&nbsp;OS</td>
<td style="height: 36px; width: 80.8611%;">Android v5.1 (Lollipop&nbsp;</td>
</tr>
<tr style="height: 36px;" class="animtable">
<td style="height: 36px; width: 44%;background-color: #f8f8ff;">&nbsp;RAM</td>
<td style="height: 36px; width: 80.8611%;">&nbsp;3 GB</td>
</tr>
<tr style="height: 34px;" class="animtable">
<td style="height: 34px; width: 44%;background-color: #f8f8ff;">&nbsp;Item Weight&nbsp;</td>
<td style="height: 34px; width: 80.8611%;">&nbsp;163 g</td>
</tr>
<tr style="height: 38px;" class="animtable">
<td style="height: 38px; width: 44%;background-color: #f8f8ff;">&nbsp;Product Dimensions</td>
<td style="height: 38px; width: 80.8611%;">15 x 0.9 x 7.6 cm</td>
</tr>
<tr style="height: 38px;" class="animtable">
<td style="height: 38px; width: 44%;background-color: #f8f8ff;">&nbsp;Item model number</td>
<td style="height: 38px; width: 80.8611%;">&nbsp;Redmi Note 3</td>
</tr>
<tr style="height: 37px;" class="animtable">
<td style="height: 37px; width: 44%;background-color: #f8f8ff;">&nbsp;Wireless communication technologies</td>
<td style="height: 37px; width: 80.8611%;">&nbsp;Bluetooth , WiFi Hotspot</td>
</tr>
<tr style="height: 71px;" class="animtable">
<td style="height: 71px; width: 44%;background-color: #f8f8ff;">&nbsp;Connectivity technologies</td>
<td style="height: 71px; width: 80.8611%;">&nbsp;GSM,(850/900/1800/1900 MHz),3G,WCDMA,(2100/1900/850/900&nbsp;MHz),4G LTE,FDD,(B1/B3/B7/B5/B8),TD-LTE,(B38/B39/B40/B41),GPRS,EDGE,WiFi</td>
</tr>
<tr style="height: 76px;" class="animtable">
<td style="height: 76px; width: 44%;background-color: #f8f8ff;">&nbsp;Special features</td>
<td style="height: 76px; width: 80.8611%;">&nbsp;Dual SIM,GPS,Music Player,Video Player,FM Radio,Light sensor,Compass,Gyroscope,Proximity sensor,Accelerometer,Fingerprint sensor,IR blaster,E-mail</td>
</tr>
<tr style="height: 52px;" class="animtable">
<td style="height: 52px; width: 44%;background-color: #f8f8ff;">&nbsp;Other camera features</td>
<td style="height: 52px; width: 80.8611%;">&nbsp;16MP primary camera with auto focus, flash and 5MP front facing camera</td>
</tr>
<tr style="height: 45px;" class="animtable">
<td style="height: 45px; width: 44%;background-color: #f8f8ff;">&nbsp;Form factor</td>
<td style="height: 45px; width: 80.8611%;">&nbsp;Touchscreen Phone</td>
</tr>
<tr style="height: 30px;" class="animtable">
<td style="height: 30px; width: 44%;background-color: #f8f8ff;">&nbsp;Weight</td>
<td style="height: 30px; width: 80.8611%;">&nbsp;165 grams</td>
</tr>
<tr style="height: 31px;" class="animtable">
<td style="height: 31px; width: 44%;background-color: #f8f8ff;">&nbsp;Color</td>
<td style="height: 31px; width: 80.8611%;">&nbsp;Silver</td>
</tr>
<tr style="height: 31px;" class="animtable">
<td style="height: 31px; width: 44%;background-color: #f8f8ff;">Battery Power Rating</td>
<td style="height: 31px; width: 80.8611%;">4050</td>
</tr>
<tr style="height: 27px;" class="animtable">
<td style="height: 27px; width: 44%;background-color: #f8f8ff;">Whats in the &nbsp;box</td>
<td style="height: 27px; width: 80.8611%;">Handset,Charger and User Guide&nbsp;</td>
</tr>
</tbody>
</table>
            </div>
            </div>
</div>
     <!-- Bootstrap core JavaScript
    ==================================================-->
            <!-- Placed at the end of the document so the pages load faster -->
 <!-- Bootstrap core JavaScript
    ==================================================-->
            <!-- Placed at the end of the document so the pages load faster -->

            
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script>
			(function(){
  // setup your carousels as you normally would using JS
  // or via data attributes according to the documentation
  // http://getbootstrap.com/javascript/#carousel
  $('#carousel123').carousel({ interval: 2000 });
  
}());

(function(){
  $('.carousel-showmanymoveone .item').each(function(){
    var itemToClone = $(this);

    for (var i=1;i<4;i++) {
      itemToClone = itemToClone.next();

      // wrap around if at end of item collection
      if (!itemToClone.length) {
        itemToClone = $(this).siblings(':first');
      }

      // grab item, clone, add marker class, add to collection
      itemToClone.children(':first-child').clone()
        .addClass("cloneditem-"+(i))
        .appendTo($(this));
    }
  });
}());
$(document).ready(function()
            {
                var count=1;
                 $("#quantity").keypress(function (e)
                  {
                //if the letter is not digit then display error and don't type anything
                if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) 
                {
                //display error message
                $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
                }
                });
                $("#plus").click(function()
                {
                     var counter = $('#quantity').val();
                    counter++ ;
                    $('#quantity').val(counter);
                });
                $("#minus").click(function()
                {
                   var counter = $('#quantity').val();
                    counter-- ;
                    //$('#quantity').val(counter); 
                    if(counter <= 0)
                    {
                     $("#errmsg").html("Invalid i/p").show().fadeOut("slow");
                    $("#quantity").val(1);
                    }
                    else
                     {
                     $('#quantity').val(counter);    
                    }
                });
        });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
            <script>
              new WOW().init();
              </script>
        
    

</body></html>
@stop