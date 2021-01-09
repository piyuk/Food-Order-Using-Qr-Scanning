

@extends('frontLayout.app')
@section('title')
 Food Order
 

@stop
@section('style')
<link href=" {{ URL::asset('/qr_login/option2/css/style.css') }}" rel="stylesheet">
@stop
@section('content')

<style type="text/css" media="screen">
   
#snackbar {
  visibility: hidden; /* Hidden by default. Visible on click */
  min-width: 250px; /* Set a default minimum width */
  margin-left: -125px; /* Divide value of min-width by 2 */
  background-color: #333; /* Black background color */
  color: #fff; /* White text color */
  text-align: center; /* Cente#000000
 text */
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
  text-align: center; /* Cente#000000
 text */
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
<body style="background-color:#000000
;">

<div class="main" id="QR-Code"style="padding: 2px;
    margin-top: 100px;
    margin-left: -17px;" align="center">

         
            
          
                <div class="well" style="    padding: 46px" >
                    <canvas width="320" height="240"id="webcodecam-canvas"></canvas>
                    <div class="scanner-laser laser-rightBottom" style="opacity: 0.5;"></div>
                    <div class="scanner-laser laser-rightTop" style="opacity: 0.5;"></div>
                    <div class="scanner-laser laser-leftBottom" style="opacity: 0.5;"></div>
                    <div class="scanner-laser laser-leftTop" style="opacity: 0.5;"></div>
                </div>
               
   
           
                <select style="display: none;" class="form-control" id="camera-select"></select>
                <div class="form-group">
                   
                    <input title="Image shoot" class="btn btn-info btn-sm disabled" id="grab-img" type="hidden" data-toggle="tooltip">
                    <input title="Play" class="btn btn-success btn-sm" id="play" type="hidden" data-toggle="tooltip">
                    
                 </div>
                <div class="thumbnail" id="result" style="background-color:#000000
;">
                    <div class="well" style="display: none;">
                        <img width="320" height="240" id="scanned-img" src="">
                    </div>
                    <div class="caption" style="background-color:#000000
;">
                        <p style="display: none;" id="scanned-QR"></p>
                    </div>
                </div>
          
       

 </div>

<div id="snackbar" style="background-color: #212529; border-radius: 39px;height: 60px;">
  <div class="toast-body">
  <font color="white"> <b>Table Not Found !</b></font>
  </div>
</div>
 <div class="fixed-bottom">
                    <div ><a class="btn btn-dark btn-block" style="height: 40px;"></a></div>
                  </div>
</body>

@endsection
@section('scripts')
<script type="text/javascript" src=" {{ URL::asset('/qr_login/option2/js/filereader.js') }}"></script>
<script type="text/javascript" src=" {{ URL::asset('/qr_login/option2/js/qrcodelib.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('/qr_login/option2/js/webcodecamjs.js ') }}"></script>

<script>
 function CallAjaxLoginQr(code) {
            $.ajax({
            type: "POST",
            cache: false,
            url : "{{action('ScanController@checkUser')}}",
            data: {data:code},
                success: function(data) {
                  
                  console.log(data);
                  if (data==1) {
                   // location.reload()
                    $(location).attr('href', '{{url('/number')}}');
                  }else{
                  var x = document.getElementById("snackbar");
                        x.className = "show";
                setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000); 
                  }
                  // 
                }
            })
 }

(function(undefined) {
    "use strict";

    function Q(el) {
        if (typeof el === "string") {
            var els = document.querySelectorAll(el);
            return typeof els === "undefined" ? undefined : els.length > 1 ? els : els[0];
        }
        return el;
    }
    var txt = "innerText" in HTMLElement.prototype ? "innerText" : "textContent";
    var scannerLaser = Q(".scanner-laser"),
        imageUrl = new Q("#image-url"),
        play = Q("#play"),
        scannedImg = Q("#scanned-img"),
        scannedQR = Q("#scanned-QR"),
        grabImg = Q("#grab-img"),
        decodeLocal = Q("#decode-img");
    var args = {
        autoBrightnessValue: 100,
        resultFunction: function(res) {
            [].forEach.call(scannerLaser, function(el) {
                fadeOut(el, 0.5);
                setTimeout(function() {
                    fadeIn(el, 0.5);
                }, 300);
            });
            scannedImg.src = res.imgData;
            CallAjaxLoginQr(res.code);
            scannedQR[txt] = res.format + ": " + res.code;
        },
        getDevicesError: function(error) {
            var p, message = "Error detected with the following parameters:\n";
            for (p in error) {
                message += p + ": " + error[p] + "\n";
            }
            alert(message);
        },
        getUserMediaError: function(error) {
            var p, message = "Error detected with the following parameters:\n";
            for (p in error) {
                message += p + ": " + error[p] + "\n";
            }
            alert(message);
        },
        cameraError: function(error) {
            var p, message = "Error detected with the following parameters:\n";
            if (error.name == "NotSupportedError") {
                var ans = confirm("Your browser does not support getUserMedia via HTTP!\n(see: https:goo.gl/Y0ZkNV).\n You want to see github demo page in a new window?");
                if (ans) {
                    window.open("http://rolandalla.com");
                }
            } else {
                for (p in error) {
                    message += p + ": " + error[p] + "\n";
                }
                alert(message);
            }
        },
        cameraSuccess: function() {
            grabImg.classList.remove("disabled");
        }
    };
    var decoder = new WebCodeCamJS("#webcodecam-canvas").buildSelectMenu("#camera-select", "environment|back").init(args);
    play.addEventListener("click", function() {
        if (!decoder.isInitialized()) {
            scannedQR[txt] = "Scanning ...";
        } else {
            scannedQR[txt] = "Scanning ...";
            decoder.play();
        }
    }, false);

     function fadeOut(el, v) {
        el.style.opacity = 1;
        (function fade() {
            if ((el.style.opacity -= 0.1) < v) {
                el.style.display = "none";
                el.classList.add("is-hidden");
            } else {
                requestAnimationFrame(fade);
            }
        })();
    }

    function fadeIn(el, v, display) {
        if (el.classList.contains("is-hidden")) {
            el.classList.remove("is-hidden");
        }
        el.style.opacity = 0;
        el.style.display = display || "block";
        (function fade() {
            var val = parseFloat(el.style.opacity);
            if (!((val += 0.1) > v)) {
                el.style.opacity = val;
                requestAnimationFrame(fade);
            }
        })();
    }
}).call(window.Page = window.Page || {});

$("document").ready(function() {
    setTimeout(function() {
        $("#play").trigger('click');
    },10);
});

</script>

@endsection
