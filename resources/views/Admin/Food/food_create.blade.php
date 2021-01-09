@extends('Admin.master')

@section('content')

   
<div class="page-content">
   <div class="page-header no-margin-bottom">
      <div class="container-fluid">
         <h2 class="h5 no-margin-bottom">Item</h2>
      </div>
   </div>
   <div class="container-fluid">
      <ul class="breadcrumb">
         <li class="breadcrumb-item">Home</li>
         <li class="breadcrumb-item active">Item</li>
      </ul>
   </div>
   <section class="no-padding-top">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="block">
                  <a href="{{route('item.index')}}" class="float-right">
                  <button class="btn btn-sm " style="background-color: #7E587E;"><font color="#ffffff"><b>Back</b></font></button>
                  </a>
                      <form action="{{route('item.store')}}" enctype="multipart/form-data" method="POST">
                @csrf
                  <div class="title"><strong class="d-block">Add Item</strong><span class="d-block"></span></div>
                  <div class="block-body">
                   
                        <div class="form-group">
                           <label class="form-control-label">Item Name</label>
                           <input type="text"  name="f_name" id="f_name" placeholder="Enter Item Name" class="form-control" required>
                          
                        </div>
                        <div class="form-group">
                           <label class="form-control-label">Item Price</label>
                           <input type="number"  name="price" id="price" placeholder="Enter price " class="form-control"required>
                        </div>
                        <div class="form-group">
                           
                        <label class=" form-control-label">Select Item Type</label>
                   
                          <select  id="foodtype_id" name="foodtype_id" class="form-control" required>
                           @foreach($foodtypes as $foodtype)
                            <option value="{{$foodtype->name}}">{{$foodtype->name}}</option>
                           @endforeach
                        </select>
                        </div>
                          <div class="form-group">
                                    <lable><input type="radio" name="status" value="Active"><b>Active</b></lable><br>
                                    <lable><input type="radio" name="status" value="Deactive"><b>Deactive</b></lable>
                                </div>

                                <div class="form-group">
                                    <lable><input type="radio" name="veg_nonveg" value="Veg"><b>Veg</b></lable><br>
                                    <lable><input type="radio" name="veg_nonveg" value="Non Veg"><b>Non Veg</b></lable>
                                </div>
                        <div class="form-group">       
                           <input type="submit" value="Add" class="btn btn-md btn-danger">
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