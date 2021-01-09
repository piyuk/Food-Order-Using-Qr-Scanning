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
</style>


<nav class="navbar navbar-dark bg-dark">
   <div class="container">
      <h1> <span class="badge badge-dark">F<font color="#bb414d">ood</font></span></h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
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
  <div class="row">
    <div class="col-md-12">

<table class="table" border="2px">
  <thead class="thead-light" >
    <tr>
      <th scope="row">Food</th>
      <th scope="col">Price</th>
      <th scope="col">Qty</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        @foreach($cart_datas as $cart_data)
      <th scope="row">{{$cart_data->f_name}}</th>
      <td>{{$cart_data->price}}</td>
      <td>{{$cart_data->quantity}}</td>
      <td>{{$cart_data->price * $cart_data->quantity}}</td>
    </tr>
   @endforeach
  </tbody>
</table>


    </div>   
  </div>
</div>
<div class="col-12">
  
 
<div class="fixed-bottom">
                    <center>
                          @if(Session::has('discount_amount_price'))
                          <p style="color: #000; font-size:16px"><b>Sub Total : </b><span>Rs. {{$total_price}}</span></p>
                                 <p style="color: #000; font-size:16px"><b>Coupon Discount (Code : {{Session::get('coupon_code')}}) {{Session::get('amount')}}% :  </b><span>Rs.{{Session::get('discount_amount_price')}}</span></p>
                            <a href="{{ url('order') }}" class="btn btn-danger btn-block" style="float: left;"><b><font style="float: left;">Checkout</b></font><span ><font style="float: right;">Total: {{Session::get('discount_amount_price')}}</font></span></a></b></a>
                            @else
                                <p><b><font color="black"><b>Total <span>Rs.</b></font></b> {{$total_price}}</span></p>
                                 <a href="{{ url('order') }}" class="btn btn-danger btn-block" style="float: left; background: rgb(131 15 30 / 95%)"><b><font style="float: left; ">Checkout</b></font><span ><font style="float: right;"><b>Total :</b> {{$total_price}}</font></span></a></b></a>
                            @endif
                     </center>
 </div>

                
               </div>

@include('include.script')
