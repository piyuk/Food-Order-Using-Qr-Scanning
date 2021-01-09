@extends('Admin.master')

@section('content')
   
<div class="page-content">
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Category</h2>
          </div>
        </div>
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item ">Category      </li>
             <li class="breadcrumb-item active">Edit-category      </li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong class="d-block">Edit Category</strong><span class="d-block"></span>
                   <a href="{{route('foodtype.index')}}" class="float-right">
                  <button class="btn btn-sm btn-light"><font color="#00000"><b>Back</b></font></button>
                </a></div>
                  <div class="block-body">
                  
 <form class="form-horizontal" action="{{route('foodtype.update',$foodtype->id)}}" method="post">
  @csrf
  @method("PUT")


                      <div class="form-group">
                        <label class="form-control-label">category Name</label>
                        <input type="text"  name="name" id="name" placeholder="Enter category Name" class="form-control" value="{{$foodtype->name}}">
                      </div>
                      <div class="form-group">       
                        <input type="submit" value="Save Changes" class="btn btn-sm btn-danger">
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