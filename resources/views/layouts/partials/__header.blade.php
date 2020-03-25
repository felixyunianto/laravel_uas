<!-- begin::header -->
<div class="header">
    <div class="header-left">
        <div class="navigation-toggler">
            <a href="#" data-action="navigation-toggler">
                <i data-feather="menu"></i>
            </a>
        </div>
        <div class="header-logo">
            <a href=index.html>
                <img class="logo" src="{{asset('assets/assets/media/image/logo.png')}}" alt="logo">
                <img class="logo-light" src="{{asset('assets/assets/media/image/logo-light.png')}}" alt="light logo">
            </a>
        </div>
    </div>

    <div class="header-body">
        <div class="header-body-left">
            <div class="page-title">
                <h4>Datatable</h4>
            </div>
        </div>
        <div class="header-body-right">
            <ul class="navbar-nav">
                <!-- begin::user menu -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" title="User menu" data-toggle="dropdown" aria-expanded="false">
                        <span class="mr-2 d-sm-inline d-none">{{ Auth::user()->name }}</span>
                        <figure class="avatar avatar-sm">
                            <img src="{{asset('assets/assets/media/image/user/women_avatar1.jpg')}}" class="rounded-circle"
                                alt="avatar">
                        </figure>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item text-danger" onclick="signOut()">Sign Out!</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                <!-- end::user menu -->

            </ul>

            <!-- begin::mobile header toggler -->
            <ul class="navbar-nav d-flex align-items-center">
                <li class="nav-item header-toggler">
                    <a href="#" class="nav-link">
                        <i data-feather="arrow-down"></i>
                    </a>
                </li>
            </ul>
            <!-- end::mobile header toggler -->
        </div>
    </div>

</div>
<!-- end::header -->
