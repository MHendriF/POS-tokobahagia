{{-- <div class="col-md-3 left_col menu_fixed"> --}}
<div class="col-md-3 left_col">  
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ url('/') }}" class="site_title"><i class="fa fa-paw"></i> <span>Toko Bahagia</span></a>
        </div>
        
        <div class="clearfix"></div>
        
        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{asset('/img/picture.jpg')}}" alt="Avatar of {{ Sentinel::getUser()->first_name }}" class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Sentinel::getUser()->first_name }}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->
        
        <br />
        
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            @if(Sentinel::getUser()->roles()->first()->slug == 'admin')
                @include('includes.sidebar_admin')
            @else
                @include('includes.sidebar_employee')
            @endif
            
        
        </div>
        <!-- /sidebar menu -->
        
        <!-- /menu footer buttons -->
       {{--  <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ url('/logout') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div> --}}
        <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a class="tooltip-top" title="" data-tooltip="Setting">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a dclass="tooltip-top" title="" data-tooltip="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a class="tooltip-top" title="" data-tooltip="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a dclass="tooltip-top" title="" data-tooltip="Logout" href="{{ url('/logout') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>

    </div>
</div>

