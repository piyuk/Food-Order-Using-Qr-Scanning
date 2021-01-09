@extends('Admin.master')

@section('content')
<div class="page-content">
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Table</h2>
          </div>
        </div>
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active">Table        </li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block">
                <a href="{{route('scan.index')}}" class="float-right">
                  <button class="btn btn-sm btn-light"><font color="#00000"><b>Back</b></font></button>
                </a>
                  <div class="title"><strong class="d-block">Add Table</strong><span class="d-block"></span></div>
                  <div class="block-body">
                   <form class="form-horizontal" action="{{route('scan.store')}}" 
method="POST">
  @csrf
                      <div class="form-group">
                        <label class="form-control-label">Table Number</label>
                        <input type="number"  name="table" id="table" placeholder="Enter Table Number" class="form-control">
                         @error('name')
                         <div class="alrt alrt-danger">{{$message}}</div>
                         @enderror
                      </div>
                      
                      <div class="form-group">       
                        <input type="submit" value="Add" class="btn btn-sm btn-danger">
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