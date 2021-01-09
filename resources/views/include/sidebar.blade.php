 <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
        
          <div class="title">
            <h1 class="h5"></h1>
            <p></p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
           <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-padnote"></i>Orders </a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li><a href="{{ url('/orderdata')}}"><i class="fa fa-check-circle" aria-hidden="true"></i>
Confirm Order</a></li>
              <li><a href="{{ url('/delivered')}}"><i class="fa fa-truck" aria-hidden="true"></i>
Delivered Order</a></li>
               <li><a href="{{ url('/cancelled')}}"> <i class="fa fa-window-close" aria-hidden="true"></i>
Cancelled Order</a></li>
            </ul>
          <li class=""><a href="{{ url('/item') }}"> <i class="icon-pie-chart"></i>Food Item </a></li>
          <li><a href="{{ url('/foodtype') }}"> <i class="icon-layers"></i>Category Food </a></li>
          <!-- <li><a href="{{ url('/customer') }}"> <i class="icon-user-outline"></i>Customer </a></li> -->
      <!--     <li><a href="{{ url('/orderdata')}}"> <i class="icon-padnote"></i>Orders </a></li> -->
     
          <li><a href="{{ url('/coupon') }}"> <i class="fa fa-percent"></i>Coupon </a></li>
         <li><a href="{{url('admin')}}"> <i class="icon-user-1"></i>Admin_details </a></li>
           <li><a href="{{url('scan')}}"> <i class="icon-user-1"></i>Tables </a></li>
          <li><a href="{{ url('/logout') }}"> <i class="icon-logout"></i>Logout </a></li>

        </ul>
      </nav>

