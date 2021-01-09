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
        
         
              <div class="col-md-12">
           @foreach($data as $scan)

            <center> <img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl='{{$scan->table}}'" height="500" width="500" ></center>
             </div>
             @endforeach

<div class="row">
            <div class="col-md-12">
              <button class="btn btn-success" id="printpagebutton" onClick="printpage();"><i class="fa fa-print"></i>Download</button>
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

