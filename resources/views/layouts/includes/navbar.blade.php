<div class="br-header">
    <div class="br-header-left">
        
    </div>
    <!-- br-header-left -->
    <div class="br-header-right">
        <nav class="nav">
            <!-- dropdown -->
            <div class="dropdown">
                <a href="#" class="nav-link nav-link-profile" data-toggle="dropdown">
                <span class="logged-name hidden-md-down">{{ Auth::user()->name }}</span>
                <img src="{{ asset('bracket-plus/img/profile.jpg') }}" class="wd-32 rounded-circle" alt="" />
                <span class="square-10 bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-250">
                    <div class="tx-center">
                        <a href="#"><img src="{{ asset('bracket-plus/img/profile.jpg') }}" class="wd-80 rounded-circle" alt="" /></a>
                        <h6 class="logged-fullname">{{ Auth::user()->name }}</h6>
                        <p>{{ Auth::user()->email }}</p>
                    </div>
                    <hr>
                    <ul class="list-unstyled user-profile-nav">
                        {{-- <li><a href="#"><i class="icon ion-ios-person"></i> Edit Profile</a></li> --}}
                        {{-- <li><a href="#"><i class="icon ion-ios-gear"></i> Settings</a></li> --}}
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon ion-power"></i> Salir</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- dropdown-menu -->
            </div>
            <!-- dropdown -->
        </nav>
    </div>
    <!-- br-header-right -->
</div>
<!-- br-header -->