
@include('include.head')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
     
      </div>
   </div>
</nav>
@error('phone')
<div id="snackbar" style="background-color: #212529; border-radius: 39px;height: 60px;">
  <div class="toast-body">
     
  <font color="white"> <b>{{$message}}</b></font>
  </div>
</div>
   @enderror



                    

<div class="main">
   <div class="container" align="center">
      <center>    <img src="{{asset('img/pre.gif')}}" style="height: 200px; width: 221px;">
             
             </center>
       <form class="form-horizontal" action="{{route('num')}}" 
method="POST">
  @csrf
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1" ><font color="white"><i class="fa fa-phone" aria-hidden="true"></i></font></span>
  </div>
  <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number" maxlength="10" minlength="10">


</div>
  @if(Session::has('table'))
 <button type="button" class="btn btn-light" style="    border-radius: 82px;">
  Table Number :  <span class="badge badge-dark">{{Session::get('table')}}</span>
</button>
  @else
 <button type="button" class="btn btn-light" style="border-radius: 82px;">
  Table Number :  <span class="badge badge-dark">Table Number Not Found </span>
</button>
   @endif
<button type="submit" class="btn btn-danger  ">Send</button>

</div>

</div>
</form>
   <div class="fixed-bottom">
                    <div ><a class="btn btn-dark btn-block" style="height: 47px;"></a></div>
                  </div>
               
                </div>
<script type="text/javascript">
  $('.form-control').keypress(function(e) {
      var arr = [];
      var kk = e.which;
   
      for (i = 48; i < 58; i++)
          arr.push(i);
   
      if (!(arr.indexOf(kk)>=0))
          e.preventDefault();
  });

$(document).ready(function(){
 var x = document.getElementById("snackbar");

  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
});

</script>