<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            
            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="{{asset('/img/picture.jpg')}}" {{-- src="{{ Gravatar::src(Auth::user()->email) }}" --}} alt="Avatar of {{ $getuser->first_name }}">
                        {{ $getuser->first_name }} 
                        <span class=" fa fa-angle-down" style="margin-left: 1px;"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="javascript:;"><center>{{ $time }}</center></a></li>
                        
                        <li role="presentation">
                            <a href="{{ url('/logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out pull-right"></i>Log Out
                            </a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                                {{ csrf_field() }}
                            </form> 
                        </li>
                    </ul>
                </li>
                
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation