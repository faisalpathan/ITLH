@extends('Frontend.layout')
@include('Frontend.partials.header')
@section('content')
<div class="col-md-pull-0  col-md-12 container-fluid wow fadeInUp">
            <div class="col-md-12 ">
                <div class="col-md-12  text-justify well well-lg" style="border:1px solid; border-radius:0px;">
                    <div class="col-md-8">
                        <a href="#"><img src="images/mfimg1.jpg" class="img-responsive" style="border:1px solid ; border-radius:0px;"></a>
                    </div>
                    <div class="col-md-4">
                        <a href="#"><img src="images/mfimg2.jpg" class="img-responsive" style="border:1px solid ; border-radius:0px;height:49.7%;"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-pull-0  col-md-12  container-fluid wow fadeInUp">
            <div class="col-md-12 ">
                <div class="col-md-12 text-justify well well-lg" style="border:1px solid ; border-radius:0px;">
                    <h2 class="col-md-12 " style="top:-35px; left:-10px; ">Top selling products</h2>
                    <div class="col-md-3 well " style="border:1px solid; top:-10px; border:1px solid ; margin-left:-1.6%;">
                        <a href="prodetails"><img src="images/topselling1.jpg" class="img-responsive center-block" style="height:160px;"></a>
                    </div>
                    <div class="col-md-3 well" style="border:1px solid; top:-10px; border:1px solid ; margin-left:0.5%;">
                        <a href="prodetails"><img src="images/topselling2.jpg" class="img-responsive center-block" style="height:160px;"></a>
                    </div>
                    <div class="col-md-3 well" style="border:1px solid; top:-10px; border:1px solid ; margin-left:0.4%;">
                        <a href="prodetails"><img src="images/topselling3.jpg" class="img-responsive center-block" style="height:160px;"></a>
                    </div>
                    <div class="col-md-3 well" style="border:1px solid; top:-10px; border:1px solid ; margin-left:0.7%; ">
                        <a href="prodetails"><img src="images/topselling4.jpg" class="img-responsive center-block" style="height:160px;"></a>
                    </div>
                </div>
            </div>
        </div><br/>
        <div class="col-md-pull-0  col-md-12  container-fluid wow fadeInUp">
            <div class="col-md-12 ">
                <div class="col-md-12   text-justify well well-lg" style="border:1px solid ; border-radius:0px;">
                    <h2 class="col-md-12 " style="top:-35px; left:-10px; ">New products</h2>
                    <div class="col-md-3 well" style="border:1px solid; top:-10px; border:1px solid ; margin-left:-1.6%;">
                        <a href="#"><img src="images/newproduct1.jpg" class="img-responsive center-block" style="height:160px;"></a>
                    </div>
                    <div class="col-md-3 well" style="border:1px solid; top:-10px; border:1px solid ; margin-left:0.5%;">
                        <a href="#"><img src="images/newproduct2.jpg" class="img-responsive center-block" style="height:160px;"></a>
                    </div>
                    <div class="col-md-3 well" style="border:1px solid; top:-10px; border:1px solid ; margin-left:0.4%; ">
                        <a href="#"><img src="images/newproduct3.jpg" class="img-responsive center-block" style="height:160px;"></a>
                    </div>
                    <div class="col-md-3 well" style="border:1px solid; top:-10px; border:1px solid ; margin-left:0.7%;">
                        <a href="#"><img src="images/newproduct4.jpg" class="img-responsive center-block" style="height:160px;"></a>
                    </div>
                </div>
            </div>
        </div>
			<script src="js/jquery.min.js" ></script>
            <script src="js/bootstrap.min.js"></script>
			<script src="js/modernizr.custom.js"></script>
			<script src="js/toucheffects.js"></script>
			<script src="js/script.js"></script>	
            <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
            <script>
              new WOW().init();
              </script>
 </body>
</html>
@stop