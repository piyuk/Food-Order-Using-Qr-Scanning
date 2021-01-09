@extends('Admin.master')

@section('content')
<div class="page-content">
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Coupon</h2>
          </div>
        </div>
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active">Coupon</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
             
              <div class="col-lg-12">

                <div class="block">

                <a href="{{route('coupon.index')}}" class="float-right">
                  <button class="btn btn-sm btn-light"><font color="#00000"><b>Back</b></font></button>
                </a>
                 

                  <div class="block-body">
<form action="{{route('coupon.update',$edit_coupons->id)}}" method="post" class="form-horizontal">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    {{method_field("PUT")}}
                     <div class="title"><strong class="d-block">Edit Coupon</strong><span class="d-block"></span></div>
                  <div class="block-body">
                   
                  <div class="form-group ">
                        <label for="coupon_code" class="form-control-label">Coupon Code</label>
                        <div class="controls{{$errors->has('coupon_code')?' has-error':''}}">
                            <input type="text" name="coupon_code" id="coupon_code" class="form-control" value="{{$edit_coupons->coupon_code}}"
                                   title="" required="required" minlength="5" maxlength="15">
                            <span class="text-danger">{{$errors->first('coupon_code')}}</span>
                        </div>
                    </div>
                      <div class="form-group">
                        <label for="amount"class="form-control-label">Amount</label>
                        <div class="controls{{$errors->has('amount')?' has-error':''}}">
                            <input type="number" min="0" name="amount" id="amount" class="form-control" value="{{$edit_coupons->amount}}" title="" required="required">
                            <span class="text-danger">{{$errors->first('amount')}}</span>
                        </div>
                    </div>

                      <div class="form-group">
                        <label for="amount_type" class="form-control-label">Amount Type</label>
                        <div class="controls{{$errors->has('amount_type')?' has-error':''}}">
                            <select name="amount_type" id="amount_type" class="form-control">
                                <option value="Percentage">Percentage</option>
                            </select>
                            <span class="text-danger">{{$errors->first('amount_type')}}</span>
                        </div>
                    </div>

                     <div class="form-group">
                        <label for="expiry_date"class="form-control-label">Expiry Date</label>
                        <div class="controls{{$errors->has('expiry_date')?' has-error':''}}">
                            <div class="input-prepend">
                                <div  data-date="12-02-2012" class="input-append date datepicker">
                                    <input type="date" name="expiry_date" id="expiry_date" value="{{$edit_coupons->expiry_date}}"  data-date-format="yyyy-mm-dd" class="span11"  placeholder="yyyy-mm-dd">
                                    <span class="add-on"><i class="icon-th"></i></span>
                                </div>
                            </div>
                            <span class="text-danger">{{$errors->first('expiry_date')}}</span>
                        </div>
                    </div>

                     <div class="form-group"{{$errors->has('status')?' has-error':''}}">
                        <label class="form-control-label">Enable :</label>
                        <div class="controls">
                            <input type="checkbox" name="status" id="status" value="1" {{$edit_coupons->status==1?'checked':''}}>
                            <span class="text-danger">{{$errors->first('status')}}</span>
                        </div>
                    </div>
                      <div class="form-group">
                        <label for=""class="form-control-label"></label>
                        <div class="controls">
                            <button type="submit" class="btn btn-success">Update Coupon</button>
                    </div>
                     </form>
                  </div>
                </div>
              </div>
              <!-- Horizontal Form-->
              
            </div>
          </div>
        </section>
        
      </div>

@endsection