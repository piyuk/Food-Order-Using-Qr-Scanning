@extends('Admin.master')

@section('content')
<div class="page-content">
  <div class="page-header no-margin-bottom">
    <div class="container-fluid">
      <h2 class="h5 no-margin-bottom">Category List</h2>
    </div>
  </div>
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="">Home</a></li>
      <li class="breadcrumb-item active">category List        </li>
    </ul>
  </div>
  <section class="no-padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="block margin-bottom-sm">
            <div class="card-title">
              
              <a href="{{route('foodtype.create')}}" class="float-right">
                <button class="btn btn-sm btn-info"><b>Add New Category</b></button>
              </a>
            </div>
            
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Category Name</th>
                  
                  <th>Action</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php $i=0; ?>
                @foreach($foodtypes as $foodtype)
                <?php $i++; ?>
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$foodtype->name}}</td>
                  
                  <td>
                    <div class="row">
                      <div class="col-md-1">
                        <button class="btn btn-success btn-sm"><a href="{{url('foodtype/')}}/{{$foodtype->id}}/edit"><font color="white">Edit</a></font></button>
                      </div>
                      <div class="col-md-2">
                        <form action="{{url('foodtype/')}}/{{$foodtype->id}}" method="post">
                          @csrf
                          @method("DELETE")
                          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </div>
                      </div>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</div>
@endsection