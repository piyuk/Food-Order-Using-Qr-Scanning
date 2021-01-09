@extends('Admin.master')
@section('content')
<div class="page-content">
  <div class="page-header no-margin-bottom">
    <div class="container-fluid">
      <h2 class="h5 no-margin-bottom">Admin-List</h2>
    </div>
  </div>
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="">Home</a></li>
      <li class="breadcrumb-item active">Admin List</li>
    </ul>
  </div>
  <section class="no-padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="block margin-bottom-sm">
            <div class="card-title">
              
              <a href="{{route('admin.create')}}" class="float-right">
                <button class="btn btn-sm btn-info">Add Admin</button>
              </a>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Admin Name</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=0; ?>
                @foreach($admins as $admin)
                <?php $i++; ?>
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$admin->name}}</td>
                  <td>{{$admin->email}}</td>
                  
                  
                  <td>
                    <div class="row">
                      <div class="col-md-3">
                        <form action="{{url('admin/')}}/{{$admin->id}}" method="post">
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