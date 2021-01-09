<!DOCTYPE html>
<html>
  <head>
    @include('include.head')
  </head>
  <style type="text/css" media="screen">
  li a:hover {
  color: #fff; !important
  text-decoration: underline;
  }
  </style>
  <body>
    @include('include.header')
    <div class="d-flex align-items-stretch">
      @include('include.sidebar')
      
      
      
      @yield('content')
      
      
      
      @include('include.footer')
    </div>
    @include('include.script')
  </body>
</html>