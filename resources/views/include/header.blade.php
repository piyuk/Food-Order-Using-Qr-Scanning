<header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a  class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Food</strong><strong>Order</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">F</strong><strong>O</strong></div></a>
            <!-- Sidebar Toggle Btn-->


            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
           <div class="list-inline-item logout">
            <div class="list-inline-item dropdown">
              <a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle">
              <i class="fa fa-user-circle-o" aria-hidden="true"style="color:#DB6574;font-size: 27px;"></i>
                <span class="d-none d-sm-inline-block">Profile</span></a>
              <div aria-labelledby="languages" class="dropdown-menu">
                <a rel="nofollow" href="#" class="dropdown-item"> 
                 <i class="fa fa-envelope" aria-hidden="true"style="color:#DB6574;font-size: 27px;" ></i>
                  <span> {{ Auth::user()->email }}</span></a><a rel="nofollow" href="{{ url('/logout') }}" class="dropdown-item">
                    <i class="icon-logout" style="color:#DB6574; font-size: 27px;"></i><span>Logout 
                    </span></a>
                  </div>
            </div>
</div>
          </div>
      </nav>
    </header>