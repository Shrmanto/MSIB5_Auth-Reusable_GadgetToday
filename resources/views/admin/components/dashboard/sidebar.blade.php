<!-- Sidebar Start -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-xl-center justify-content-md-between">
            <a href="#" class="mt-3 text-xl-center logo-img">
                <img src="{{asset('assets/img/logo.png')}}" width="180" alt="">
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="fa-solid fa-xmark fa-2xl"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="./index.html" aria-expanded="false">
                        <span>
                            <i class="fa-solid fa-house-chimney"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">User</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('writer') }}" aria-expanded="false">
                        <span>
                            {{-- <i class="fa-solid fa-user"></i> --}}
                            <i class="fa-solid fa-pen"></i>
                        </span>
                        <span class="hide-menu">Writers</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Menu</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="javascript:void(0);" data-toggle="collapse" data-target="#ui-dropdown" aria-expanded="false">
                        <span>
                            <i class="fa-solid fa-newspaper"></i>
                        </span>
                        <span class="hide-menu">News</span>
                    </a>
                    <ul id="ui-dropdown" class="sidebar-submenu collapse">
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('categories.admin') }}">
                                <span>Categories</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('article.admin') }}">
                                <span>Article</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!--  Sidebar End -->
