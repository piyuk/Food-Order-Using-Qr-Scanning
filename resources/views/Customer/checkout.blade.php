@include('include.head')
<style type="text/css">

.navbar {
overflow: hidden;
background-color: #333;
position: fixed;
top: 0;
width: 100%;
}
.navbar a {
float: left;
display: block;
color: #f2f2f2;
text-align: center;
padding: 14px 16px;
text-decoration: none;
font-size: 17px;
}
.navbar a:hover {
background: #ddd;
color: black;
}
.main {
padding: 16px;
margin-top: 100px;

}
::-webkit-scrollbar {
width: 1px;
}
::-webkit-scrollbar-track {
background: #fff;
}
::-webkit-scrollbar-thumb {
background: #fff;
}
::-webkit-scrollbar-thumb:hover {
background: #555;
}
#snackbar {
visibility: hidden; /* Hidden by default. Visible on click */
min-width: 250px; /* Set a default minimum width */
margin-left: -125px; /* Divide value of min-width by 2 */
background-color: #333; /* Black background color */
color: #fff; /* White text color */
text-align: center; /* Centered text */
border-radius: 2px; /* Rounded borders */
padding: 16px; /* Padding */
position: fixed; /* Sit on top of the screen */
z-index: 1; /* Add a z-index if needed */
left: 50%; /* Center the snackbar */
top: 100px; /* 30px from the bottom */
}
/* Show the snackbar when clicking on a button (class added with JavaScript) */
#snackbar {
visibility: hidden; /* Hidden by default. Visible on click */
min-width: 250px; /* Set a default minimum width */
margin-left: -125px; /* Divide value of min-width by 2 */
background-color: #333; /* Black background color */
color: #fff; /* White text color */
text-align: center; /* Centered text */
border-radius: 2px; /* Rounded borders */
padding: 16px; /* Padding */
position: fixed; /* Sit on top of the screen */
z-index: 1; /* Add a z-index if needed */
left: 50%; /* Center the snackbar */
bottom: 30px; /* 30px from the bottom */
}
/* Show the snackbar when clicking on a button (class added with JavaScript) */
#snackbar.show {
visibility: visible; /* Show the snackbar */
/* Add animation: Take 0.5 seconds to fade in and out the snackbar.
However, delay the fade out process for 2.5 seconds */
-webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
animation: fadein 0.5s, fadeout 0.5s 2.5s;
}
/* Animations to fade the snackbar in and out */
@-webkit-keyframes fadein {
from {bottom: 0; opacity: 0;}
to {bottom: 30px; opacity: 1;}
}
@keyframes fadein {
from {bottom: 0; opacity: 0;}
to {bottom: 30px; opacity: 1;}
}
@-webkit-keyframes fadeout {
from {bottom: 30px; opacity: 1;}
to {bottom: 0; opacity: 0;}
}
@keyframes fadeout {
from {bottom: 30px; opacity: 1;}
to {bottom: 0; opacity: 0;}
}
</style>
<nav class="navbar navbar-dark bg-dark">
  <div class="container">
    <h1> <span class="badge badge-dark">F<font color="#bb414d">ood</font></span></h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
      <form class="form-inline my-2 my-lg-0">
        <a  href="{{ url('/logout_user') }}">
          <i class="fa fa-sign-out " style="color: #ffffff;"></i><font color="#fffff"> Logout</font>
          
        </a>
      </form>
    </div>
  </div>
</nav> 
<div class="main">
  @if(Session::has('message_apply_sucess'))
  <div id="snackbar" style="background-color: #212529; border-radius: 39px;height: 76px;">
    
    <div class="toast-body">
      
      <font color="white"> <b> {{Session::get('message_apply_sucess')}}</font></b>
      
    </div>
  </div>
  @endif
  <div class="container">
    <div class="row">
      <div class="col-md-12" id="customer_data">

                @if(Session::has('message_coupon'))
                <div id="snackbar" style="background-color: #212529; border-radius: 39px;
                  height: 76px;">
                  
                  <div class="toast-body">
                    
                    <font color="white"> <b> {{Session::get('message_coupon')}}</font></b>
                    
                  </div>
                </div>
                @endif
                <div class="chose_area" style="padding: 20px;">
                  <form action="{{url('/apply-coupon')}}" method="post" role="form">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="Total_amountPrice" value="{{$total_price}}">
                    <div class="form-group">
                      <label for="coupon_code">Coupon Code</label>
                      <div class="controls {{$errors->has('coupon_code')?'has-error':''}}">
                        <input type="text" class="form-control" name="coupon_code" id="coupon_code" placeholder="Promotion By Coupon">
                        <span class="text-danger">{{$errors->first('coupon_code')}}</span>
                      </div>
                    </div>
                    <center><button type="submit" class="btn btn-danger">Apply</button></center>
                  </form>
                </div>
                
                <div class="total_area" align="center">
                  <font color="black">
                  @if(Session::has('discount_amount_price'))
                  <div class="heading">
                    <img src="{{asset('img/coupan.gif')}}" style="height: 159px; width: 221px;">
                  </div>
                
                 
                 <p><b>Sub Total </b><span>Rs. {{$total_price}}</span></p>
                    <p><b>Coupon Discount (Code : {{Session::get('coupon_code')}}) {{Session::get('amount')}}% : </b>
                      <span>Rs.{{Session::get('discount_amount_price')}}</span></p>
                  <p><b>Total </b><span>Rs. {{$total_price-Session::get('discount_amount_price')}}</span></p> 
                    @else
                  <p><b>Total </b><span>Rs. {{$total_price}}</span></p>
                 
                 
                  </font>
                  @endif
                
                  <div class="fixed-bottom">
                    <div ><a class="btn btn-danger btn-block" href="{{url('/code')}}">Check Out</a></div>
                  </div>
               
                </div>
           
      </div>
    </div>
  </div>
</div>
 
@include('include.script')
<script>
$(document).ready(function(){
var x = document.getElementById("snackbar");
x.className = "show";
setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
});

</script>