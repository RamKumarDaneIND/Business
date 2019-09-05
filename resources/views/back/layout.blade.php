<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('back/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('back/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('back/css/templatemo-style.css') }}" rel="stylesheet">
  </head>
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1>Admin</h1>
        </header>
        <div class="profile-photo-container">
          <img src="{{ asset('back/images/profile-photo.jpg') }}" alt="Profile Photo" class="img-responsive">  
          <div class="profile-photo-overlay"></div>
        </div>      
        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">           
          </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="{{ url('/dashboard') }}" ><i class="fa fa-home fa-fw"></i>Business</a></li>
            <li><a href="data-visualization.html"><i class="fa fa-bar-chart fa-fw"></i>Business Category</a></li>
            <li><a href="data-visualization.html"><i class="fa fa-database fa-fw"></i>View Site</a></li>
            <li><a class="dropdown-item Logout" ><i class="fa fa-map-marker fa-fw"></i>{{ __('Logout') }}</a></li>
          </ul>  
        </nav>
      </div>

      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="{{ url('/dashboard') }}" >Business</a></li>
                <li><a href="{{ url('/business-category') }}">Business Category</a></li>
                <li><a href="{{ url('/') }}">View Site</a></li>
                <li><a class="dropdown-item Logout" >{{ __('Logout') }}</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
              </ul>  
            </nav> 
          </div>
        </div>

        @yield('content')

      </div>
    </div>
    
    <!-- JS -->
    <script src="{{ asset('back/js/jquery-1.11.2.min.js') }}"></script>      <!-- jQuery -->
    <script src="{{ asset('back/js/main.js') }}"></script>      <!-- jQuery -->
    <script src="{{ asset('back/js/jquery-migrate-1.2.1.min.js') }}"></script> <!--  jQuery Migrate Plugin -->
    <script src="https://www.google.com/jsapi"></script> <!-- Google Chart -->
    <script type="text/javascript" src="{{ asset('back/js/templatemo-script.js') }}"></script>      <!-- Templatemo Script -->

  </body>
</html>