@extends('Admin.master')
@section('content')
<style>
.invoice-ribbon {
width:85px;
height:88px;
overflow:hidden;
position:absolute;
top:-1px;
right:14px;
}
.ribbon-inner {
text-align:center;
-webkit-transform:rotate(45deg);
-moz-transform:rotate(45deg);
-ms-transform:rotate(45deg);
-o-transform:rotate(45deg);
position:relative;
padding:7px 0;
left:-5px;
top:11px;
width:120px;
background-color:#66c591;
font-size:15px;
color:#fff;
}
.ribbon-inner:before,.ribbon-inner:after {
content:"";
position:absolute;
}
.ribbon-inner:before {
left:0;
}
.ribbon-inner:after {
right:0;
}
</style>
<div class="page-content">
  <section class="no-padding-top">
    <div class="container-fluid">
      <div class="row">
        
        
        <div class="container bootstrap snippets bootdeys">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default invoice" id="invoice">
                <div class="panel-body">
                  <div class="invoice-ribbon"><div class="ribbon-inner">PAID</div></div>
                  <div class="row">
                    
                    <div class="col-sm-6 top-left">
                      
                    </div>
                    
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-xs-4 to">
                      @foreach($orderdatas as $dta)
                      <p class="lead marginbottom">Table No : {{$dta->table}}</p>
                            <p class="lead marginbottom">Phone Number : {{$dta->number}}</p>
                      <p>Order ID: {{$dta->id}}</p>
                      @endforeach
                    </div>
                  </div>
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
                        @foreach($data as $dta)
                        <th scope="row">{{$dta->product_name}}</th>
                        <td>{{$dta->product_price}}</td>
                        <td>{{$dta->qty}}</td>
                        <td>{{$dta->product_price * $dta->qty}}</td>
                        
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <br>
                <div class="card" style="width: 18rem; float: right">
                  
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Sub Total: {{$total_price}}
                    </li>
                    @foreach($orderdatas as $data)
                    @if($data->coupon_code == '')
                    <li class="list-group-item"style=""><b>Coupon Not Applied</b></li>
                    @else
                    <li class="list-group-item">Discount ({{$data->coupon_code}}) : {{$data->coupon_amount}}%
                    </li>
                    @endif
                    <li class="list-group-item">Total : Rs. {{$data->grand_total}}
                    </li>
                  </ul>
                </div>
                <div  style="width: 18rem; float: left">
                  <h1>Thank You !</h1><br>
                  <button class="btn btn-success" id="printpagebutton" onClick="printpage();"><i class="fa fa-print"></i> Print Invoice</button>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

<script type="text/javascript">
    function printpage() {
        var printButton = document.getElementById("printpagebutton");
        printButton.style.visibility = 'hidden';
        window.print()
        printButton.style.visibility = 'visible';
    }
</script>
@endsection