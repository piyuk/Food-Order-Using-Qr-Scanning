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
      
    </ul>
  </div>
  <section class="no-padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="block margin-bottom-sm">
            <a href="{{route('item.create')}}" class="float-right">
              <button class="btn btn-sm btn-info">Add New Food</button>
            </a>
            <div class="title"><strong>Food List</strong></div>
            
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Food</th>
                  <th>Price</th>
                  <th>FoodType</th>
                  <th>Veg Non-Veg</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=0; ?>
                @foreach($items as $item)
                <?php $i++; ?>
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$item->f_name}}</td>
                  <td>{{$item->price}}</td>
                  <td>{{$item->foodtype_id}}
                    <td>{{$item->veg_nonveg}}</td>
                    <td>{{$item->status}}</td>
                    <td>
                      <div class="row">
                        <div class="col-md-3">
                          <button class="btn btn-success btn-sm" ><a href="{{url('item/')}}/{{$item->id}}/edit"><font color="white">Edit</font></a> </button>
                        </div>
                        <div class="col-md-1">
                          <form action="{{url('item/')}}/{{$item->id}}" method="post">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                          </div>
                        </div>
                      </form>
                    </td>
                    @endforeach
                  </tbody>
                </table>
                {!! $items->links() !!}
              </div>
            </div>
          </div>
          
          
        </div>
      </section>
    </div>
    
    @endsection