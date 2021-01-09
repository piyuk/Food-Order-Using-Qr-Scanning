@extends('Admin.master')

@section('content')
<div class="page-content">
  <div class="page-header no-margin-bottom">
    <div class="container-fluid">
      <h2 class="h5 no-margin-bottom">Table List</h2>
    </div>
  </div>
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="">Home</a></li>
      <li class="breadcrumb-item active">Table List        </li>
    </ul>
  </div>
  <section class="no-padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="block margin-bottom-sm">
            <div class="card-title">
              
              <a href="{{route('scan.create')}}" class="float-right">
                <button class="btn btn-sm btn-info">Add New Table</button>
              </a>
            </div>
            
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Table Number</th>
                  
                  <th>Action</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php $i=0; ?>
                @foreach($scans as $scan)
                <?php $i++; ?>
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$scan->table}}</td>
                  
                  <td>
                     <div class="row">
                        <div class="col-md-2">
                        <form action="{{url('scan/')}}/{{$scan->id}}" method="post">
                          @csrf
                          @method("DELETE")
                          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                       </form>
                     </div>
                        <div class="col-md-4" style="margin-top: -10px;">
                          <a href="{{url('scan/')}}/{{$scan->id}}"><font color="white">
                         <img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl='{{$scan->table}}'" height="50" width="50"></a>
                          </div>
                        </div>
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

