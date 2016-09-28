@extends('Wireframes.layout')
@include('Wireframes.partials.header')
@section('content')
<br/>

<div class="col-md-12   col-md-push-0 container-fluid text-justify wow fadeInUp">
      <div calss="col-md-12">
        <div class="col-md-3    well  container-fluid" style="border:1px solid ; border-radius:0px; height:630px;width:29%;">
          <h3 style=" margin-top:-10px;">Search Filter</h3>
          <p class="col-md-12 well" style=" margin-top:10px; font-size:18">Search filters will be specific to category type These are nothing but
            attribute set in the backend while creating categories and adding their
            attributes</p>
        </div> 
        <div class="col-md-8 col-md-push-0 container-fluid wow fadeInUp">
          <div class="col-md-12 ">
            <div class="col-md-12  well" style="border:1px solid ; border-radius:0px;">
              <h3 class="col-md-12 " style="top:-35px; left:-10px; ">Search Results</h3>
              <div class="col-md-12  col-md-pull-1" style=" top:-40px;">
                <h3 class="col-md-1   col-md-push-5" style=" margin-top:3.5%; font-size:21px;">Sort</h3>
                <select style="margin-top:3.8%; margin-left:1%; ">
                  <option>Price: Low to High</option>
                  <option>Price: High to Low</option>
                  <option>Newest First</option>
                  <option>Oldest First</option>
                </select>
                <ul class="pagination col-md-5 col-md-push-8">
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
              <div class="col-md-4 well" style="border:1px solid; top:-30px;  border:1px solid ; border-radius:0px; margin-left:-1.6%">
                <a href="prodetails"><img src="images/topselling1.jpg" class="img-responsive center-block" style="height:160px;"></a>
              </div>
              <div class="col-md-4 well" style="border:1px solid; top:-30px;  border:1px solid ; border-radius:0px; margin-left:0.5%;">
                <a href="prodetails"><img src="images/search1.jpg" class="img-responsive center-block" style="height:160px;"></a>
              </div>
              <div class="col-md-4 well" style="border:1px solid; top:-30px;  border:1px solid ; border-radius:0px; margin-left:0.4%; ">
                <a href="prodetails"><img src="images/search2.jpg" class="img-responsive center-block" style="height:160px;"></a>
              </div>
              <div class="col-md-12">
                <br>
              </div>
              <div class="col-md-4 well" style="border:1px solid; top:-10px; border:1px solid ; border-radius:0px; margin-left:-1.6%;">
                <a href="#"><img src="images/topselling3.jpg" class="img-responsive center-block" style="height:160px;"></a>
              </div>
              <div class="col-md-4 well" style="border:1px solid; top:-10px; border:1px solid ; border-radius:0px; margin-left:0.5%;">
                <a href="#"><img src="images/topselling2.jpg" class="img-responsive center-block" style="height:160px;"></a>
              </div>
              <div class="col-md-4 well" style="border:1px solid; top:-10px; border:1px solid ; border-radius:0px; margin-left:0.4%;">
                <a href="#"><img src="images/topselling1.jpg" class="img-responsive center-block" style="height:160px;"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12  col-md-pull-0 container wow fadeInUp" style="width:94%;">
        <div class="col-md-12 text-justify well well-lg" style="border:1px solid ; border-radius:0px;">
          <h3 class="col-md-12 " style="top:-35px; left:-10px; ">Top selling products</h3>
          <div class="col-md-3 well " style="border:1px solid; top:-10px; border:1px solid ; margin-left:-1.6%;">
            <a href="#"><img src="images/topselling3.jpg" class="img-responsive center-block" style="height:160px;"></a>
          </div>
          <div class="col-md-3 well" style="border:1px solid; top:-10px; border:1px solid ; margin-left:0.5%;">
            <a href="#"><img src="images/topselling1.jpg" class="img-responsive center-block" style="height:160px;"></a>
          </div>
          <div class="col-md-3 well" style="border:1px solid; top:-10px; border:1px solid ; margin-left:0.4%;">
            <a href="#"><img src="images/topselling2.jpg" class="img-responsive center-block" style="height:160px;"></a>
          </div>
          <div class="col-md-3 well" style="border:1px solid; top:-10px; border:1px solid ; margin-left:0.7%; ">
            <a href="#"><img src="images/topselling4.jpg" class="img-responsive center-block" style="height:160px;"></a>
          </div>
        </div>
      </div>
    </div>
            <script src="js/jquery.min.js" ></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
            <script>
              new WOW().init();
              </script>
</body>
</html>
@stop