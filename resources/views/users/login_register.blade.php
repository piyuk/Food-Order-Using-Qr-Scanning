<!DOCTYPE html>
<html>
  @include('include.head')
  <body>
    <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
               @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                {{Session::get('message')}}
            </div>
                @endif
              <div class="info d-flex align-items-center" style="background: #212529;
}">
                 <h1> <span class="badge badge-dark">F<font color="#bb414d">ood</font></span></h1>
                <div class="content">
                  <div class="logo">
                    <h1></h1>
                  </div>
                  <p></p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6">
              <div class="form d-flex align-items-center" style="background:#ffffff;">
                <div class="content">
                  <form action="{{url('/user_login')}}" method="post" class="form-horizontal">
                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                      <input type="email" name="email" required data-msg="Please enter your email" class="input-material">
                      <label for="login-username" class="label-material">Email</label>
                    </div>
                    <div class="form-group">
                      <input  type="password" name="password" required data-msg="Please enter your password" class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                    </div>
                    <button type="submit" class="btn" style="background: rgb(131 15 30 / 95%);"><font color="white">Login</font></button>
                  </form><a href="#" class="forgot-pass"></a><br><small>Do not have an account? </small><button type="button"  style="background: rgb(131 15 30 / 95%);" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 <font color="white">SignUp</font>
</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#ffffff;">
        <h5 class="modal-title" id="exampleModalLabel">SignUp</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background:#ffffff;">
      <form action="{{url('/register_user')}}" method="post" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group-material">
                      <input id="name" type="text" name="name" required data-msg="Please enter your username" class="input-material" value="{{old('name')}}">
                      <label for="register-username" class="label-material">Username</label>
                    </div>
                    <div class="form-group-material">
                      <input id="email" type="email" name="email" required data-msg="Please enter a valid email address" class="input-material" value="{{old('email')}}">
                      <label for="register-email" class="label-material">Email Address      </label>
                    </div>
                    <div class="form-group-material">
                      <input id="password" type="password" name="password" required data-msg="Please enter your password" class="input-material"  value="{{old('password')}}">
                      <label for="register-password" class="label-material">Password        </label>
                    </div>
                    <div class="form-group-material">
                      <input id="password_confirmation" type="password" name="password_confirmation" required data-msg="Please enter Confirm Password" class="input-material"  value="{{old('password_confirmation')}}">
                      <label for="register-password" class="label-material">Confirm Password</label>
                    </div>
                    <div class="form-group terms-conditions text-center">
                      <input id="register-agree" name="registerAgree" type="checkbox" required value="1" data-msg="Your agreement is required" class="checkbox-template">
                      <label for="register-agree">I agree with the terms and policy</label>
                    </div>
                    <div class="form-group text-center">
                   
                    </div>
                  
      </div>
      <div class="modal-footer"style="background:#ffffff;">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
          <input id="register" type="submit" style="background: rgb(131 15 30 / 95%);" value="Register" class="btn btn-primary">
          </form>
      </div>
    </div>
  </div>
</div>
    <!-- JavaScript files-->
  @include('include.script')
  </body>
</html>