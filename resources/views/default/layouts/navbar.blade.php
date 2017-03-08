<ul class="nav navbar-nav">

   {{-- Aca van los li para las notificaciones --}}

    <!-- User Account: style can be found in dropdown.less -->
    <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{ asset('admin/images/admin-icon.png') }}" class="user-image" alt="User Image">
            @if (Auth::check())
            	<span class="hidden-xs"> @if (!Auth::user()->username)
                   {{ Auth::user()->name }}
                   @else
                   {{ Auth::user()->username }}
                @endif </span>
            @endif
            
        </a>
        <ul class="dropdown-menu">
            <!-- User image -->
            {{-- <li class="user-header">
                <img src="{{ asset('davemoustache.jpg') }}" class="img-circle" alt="User Image">
                <p>
                    <small>Member since Nov. 2012</small>
                </p>
            </li> --}}
            <!-- Menu Body -->
            {{-- <li class="user-body">
                <div class="row">
                    <div class="col-xs-4 text-center">
                        <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                        <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                        <a href="#">Friends</a>
                    </div>
                </div>
                <!-- /.row -->
            </li> --}}
            <!-- Menu Footer-->
            <li class="user-footer">
                <div class="pull-left">
                    <a href="#" class="ui basic button"> Change password </a>
                </div>

                <div class="pull-right">
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                            {{ csrf_field() }}
                             <button  class="ui basic button">Sign out</button>
                        </form>
                   
                </div>
            </li>
        </ul>
    </li>
</ul>