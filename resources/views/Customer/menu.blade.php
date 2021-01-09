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
   <div class="container">
      <div class="row">

         <div class="col-md-12" id="customer_data">
      @if(Session::has('message')) 
             <div id="snackbar" style="background-color: #212529; border-radius: 39px;
    height: 76px;">
  
  <div class="toast-body">
    
  <font color="white"> <b> {{Session::get('message')}}</font></b>
    
  </div>
</div>
       @endif
         @foreach($items as $item)
           <div class="card shadow p-3 mb-5 bg-white rounded" style="border-color: #ffff; ">
               <div class="card-body">
                  <div class="row">
                    @if($item->veg_nonveg === "Veg")
                     <img src="{{asset('img/Veg.png')}}" style="height: 30px; width: 30px;">
                     @else($item->veg_nonveg === "Non Veg")
                      <img src="{{asset('img/Non Veg.png')}}" style="height: 30px; width: 30px;">
                      @endif
                     <div class="col">
                        <span style="float: left;">
                           <h5><font color="black" size="4px">{{$item->f_name}}</font></h5>
                        </span>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <span style="float: left;"><font size="4px" color="black">Rs.{{$item->price}}</font></span> 
                     </div>
                     <form action="{{route('addToCart')}}" method="post" role="form">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" id="f_id" name="f_id" value="{{$item->id}}">
                    <input type="hidden" id="f_name" name="f_name" value="{{$item->f_name}}">
                    <input type="hidden" id="price" name="price" value="{{$item->price}}">
                     <input type="hidden" id="quantity" name="quantity" value="1" />
                     <input type="hidden" id="table" name="table" value="{{Session::get('table')}}" />
                     <input type="hidden" id="number" name="number" value="{{Session::get('number')}}" />
                    <input type="hidden" id="veg_nonveg" name="veg_nonveg" value="{{$item->veg_nonveg}}">
                     <div class="col">
                        <button id="buttonAddToCart" class="btn btn-outline" style="float: right; background: rgb(131 15 30 / 95%);"><font color="white"><b>Add</b></font></button>
                     </div>
                   </form>
                  </div>
                  <div class="row">
                     <div class="col">
                        <span style="float: left;"></span>
                     </div>
                  </div>
               </div>
            </div>
        

      @endforeach

      </div> 


      <div class="fixed-bottom">
         <center><button style="border-radius: 20px;"  type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter">
            Menu  <i class="fa fa-cutlery"></i>
            </button>
         </center>
         <center><button style="margin-top: 10px; background: rgb(131 15 30 / 95%);" type="button" class="btn  btn-block" data-toggle="modal" data-target="#modalDiscount">
           <font color="white"> Checkout  <i class="fa fa-check-circle-o"></i></font>
            </button>
         </center>
      </div>

      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header"style="background: rgb(131 15 30 / 95%)">
                  <h5 class="modal-title" id="exampleModalLongTitle" style=""><font color="white">RECOMMENDED</font></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="col-md-12 col-sm-3">
        <?php
          $foodtypes=DB::table('foodtype')->where([['status',1]])->get();
        ?>
  
                     <div class="card bg-dark mb-3">
                        <ul class="list-group category_block" style="width: 100%; height: 250px; overflow: auto" > 
                        @foreach($foodtypes as $foodtype)
                           <li class="list-group-item" style="text-align: center;"><a href="{{route('cats',$foodtype->id)}}" id="filter_food"><font color="white">{{$foodtype->name}}</font></a></li>
                        @endforeach
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="modal fade right" id="modalDiscount" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true" data-backdrop="true">
   <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-danger" role="document">
      <!--Content-->
      <div class="modal-content">
         <!--Header-->
         <div class="modal-header"  style="background: rgb(131 15 30 / 95%)">
            <p class="heading">
               <strong> <font color="white">Your Food Summary</font></strong>
            </p>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">&times;</span>
            </button>
         </div>
         <!--Body-->
         <div class="modal-body" style="background-color: #ffffff;">
            <div class="col-md-12">
               <ul class="list-group category_block" style="width: 100%; height: 450px; overflow: auto" >

                @if(count($cart_datas) == 0)
              <li class="list-group-item" style="position: relative;display: block;background-color: #fff; border: 0px;height: 180px;padding: 0.75rem 0.25rem;">
             <center style="margin-top: 100px;">    <img src="{{asset('img/ec.gif')}}" style="height: 116px; width: 221px;">
              <P><b>Your cart is empty!</b></P>
             </center>
             </li>
                @else 
                @foreach($cart_datas as $cart_data)

                <li class="list-group-item" style="position: relative;display: block;background-color: #fff; border: 0px;height: 180px;padding: 0.75rem 0.25rem;">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="border-color: #ffff;">
                  <div class="card-body">
                     <div class="row">
                       @if($cart_data->veg_nonveg === "Veg")
                     <img src="{{asset('img/Veg.png')}}" style="height: 30px; width: 30px;">
                     @else($cart_data->veg_nonveg === "Non Veg")
                      <img src="{{asset('img/Non Veg.png')}}" style="height: 30px; width: 30px;">
                      @endif
                        <div class="col">
                           <span style="float: left;">
                              <h5><font color="black">{{$cart_data->f_name}}</font></h5>
                           </span>
                            <span style="float: right;">
                              <h5><font style="float: right;">Rs.{{$cart_data->price}}</font></h5>
                           </span>
                        </div>
                       
                     </div>
                        <div style="float: right;">
                       <a href="{{url('/cart/deleteItem',$cart_data->id)}}"> <i class="fa fa-trash" style=" color:#830F1EF2; float: right; font-size: 25px;"></i></a>
                      </div>
                      @if($cart_data->quantity>1)
                           <span style="float: left;">
                                            <a class="cart_quantity_down"  href="{{url('/cart/update-quantity/'.$cart_data->id.'/-1')}}"><i class="fa fa-minus-circle" aria-hidden="true" ></i></a>
                                        @endif
                                         <input class type="text" name="quantity" value="{{$cart_data->quantity}}" autocomplete="off" size="2" readonly />
                                        <a class="cart_quantity_up" href="{{url('/cart/update-quantity/'.$cart_data->id.'/1')}}"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                                      </span>
                                    
                        
                  </div>
               </div>
          </li>
        
         @endforeach
           @endif
          </ul>
            </div> 
            <div class="row">
               <div class="col-12">
                 
              @if(count($cart_datas) == 0)
                 <a  class="btn  btn-block" style="float: left;background: rgb(131 15 30 / 95%); height: 40px;"><b><font style=" color: #ffffff;"></b></font><span ><font style="float: right; color: #ffffff;"></font></span></a></b></a>
                @else()

                  <a href="{{ url('checkout') }}" class="btn  btn-block" style="float: left;background: rgb(131 15 30 / 95%)"><b><font style="float: left; color: #ffffff;">Checkout</b></font><span ><font style="float: right; color: #ffffff;">Total: {{$total_price}}</font></span></a></b></a>
               </div>
            
              
                  @endif
                  
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