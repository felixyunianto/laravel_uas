<!-- begin::navigation -->
<div class="navigation">
    <div class="navigation-menu-tab">
        <div class="flex-grow-1">
            <ul>
                <li>
                    <a href="#" data-toggle="tooltip" data-placement="right" title="Dashboards" data-nav-target="#dashboards">
                        <i data-feather="bar-chart-2"></i>
                    </a>
                </li>
                <li>
                    <a class="@if(!Request::is('/category')) active @elseif(!Request::is('/product')) active @endif" href="#" data-toggle="tooltip" data-placement="right" title="Managements Products" data-nav-target="#apps">
                        <i data-feather="command"></i>
                    </a>
                </li>
                <li>
                    <a class="@if(!Request::is('/role')) active @elseif(!Request::is('/user')) active @endif" href="#" data-toggle="tooltip" data-placement="right" title="Management Users"
                        data-nav-target="#elements">
                        <i data-feather="layers"></i>
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="tooltip" data-placement="right" title="Pages" data-nav-target="#pages">
                        <i data-feather="copy"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div>
            <ul>
                <li>
                    <a href="pages-login.html" data-toggle="tooltip" data-placement="right" title="Logout"
                        target="_blank">
                        <i data-feather="log-out"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="navigation-menu-body">
        <div class="navigation-menu-group">

            <div id="dashboards">
                <ul>
                    <li class="navigation-divider">Dashboards</li>
                </ul>
            </div>
            <div id="apps">
                <ul>
                    <li class="navigation-divider">Management Product</li>
                    <li>
                        <a href="{{ route('category.index') }}"><span>Category</span></a>
                    </li>
                    <li>
                        <a href="{{ route('product.index') }}">
                            <span>Product</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="open" id="elements">
                <ul>
                    <li class="navigation-divider">Management User</li>
                    <li><a href="{{route('role.index')}}">Role</a></li>
                    <li><a href="{{route('user.index')}}">Users</a></li>
                </ul>
            </div>
            <div id="pages">
                <ul>
                    <li class="navigation-divider">Report</li>
                    <li><a href="pages-login.html" target="_blank">Report Order</a></li>
                    <li><a href="pages-register.html" target="_blank">Report Purchase</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end::navigation -->
