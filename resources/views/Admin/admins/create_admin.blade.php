@extends('Admin.master')

@section('content')

   
<div class="page-content">
   <!-- Page Header-->
   <div class="page-header no-margin-bottom">
      <div class="container-fluid">
         <h2 class="h5 no-margin-bottom">Admin</h2>
      </div>
   </div>
   <div class="container-fluid">
      <ul class="breadcrumb">
         <li class="breadcrumb-item">Home</li>
         <li class="breadcrumb-item active">Admin</li>
      </ul>
   </div>
   <section class="no-padding-top">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="block">
                  <a href="{{route('admin.index')}}" class="float-right">
                  <button class="btn btn-sm " style="background-color: #7E587E;"><font color="#ffffff"><b>Back</b></font></button>
                  </a>
                       <form action="{{url('/register_user')}}" method="post" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                  <div class="title"><strong class="d-block">Add Admin</strong><span class="d-block"></span></div>
                  <div class="block-body">
                   
                        <div class="form-group">
                           <label class="form-control-label">Admin Name</label>
                           <input type="text"  name="name" id="name" placeholder="Enter Admin Name" class="form-control">
                        </div>
                        <div class="form-group">
                           <label class="form-control-label">Email</label>
                           <input type="text"  name="email" id="email" placeholder="Enter email " class="form-control">
                        </div>
                        <div class="form-group">
                           <label class="form-control-label">Password</label>
                            <input id="password" type="password" name="password" required data-msg="Please enter your password" class="form-control" value="{{old('password')}}">
                      </div>

                       <div class="form-group">
                             <label class="form-control-label">Confirm Password</label>
                              <input id="password_confirmation" type="password" name="password_confirmation" required data-msg="Please enter Confirm Password" class="form-control"  value="{{old('password_confirmation')}}">
                      </div>
                      <div class="control-group{{$errors->has('isAdmin')?' has-error':''}}">
                            <label class="control-label">Enable :</label>
                            <div class="controls">
                                <input type="checkbox" name="isAdmin" id="isAdmin" value="1">
                                <span class="text-danger">{{$errors->first('isAdmin')}}</span>
                            </div>
                        </div>

                        <div class="form-group">       
                           <input type="submit" value="Add Admin" class="btn btn-md btn-danger">
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>

@endsection


