<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index-2.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('dashboard/assets/images/logo-sm.png') }}" alt="" height="22">
            </span>

        </a>
        <!-- Light Logo-->
        <a href="index-2.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('dashboard/assets/images/logo-sm.png') }}" alt="" height="22">
            </span>

        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('admin.home') ? 'active' : '' }}" href="{{ route('admin.home') }}">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-widgets">Dashboard</span>
                    </a>
                </li>

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">E-Book</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('book.category.index') ? 'active' : '' }}" href="{{ route('book.category.index') }}">
                        <i class="ri-book-mark-line"></i> <span data-key="t-widgets">Category</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('admin.books.index') ? 'active' : '' }}" href="{{ route('admin.books.index') }}">
                        <i class="ri-book-fill"></i> <span data-key="t-widgets">Books</span>
                    </a>
                </li>

                @if ( auth()->user()->is_admin == 1 || auth()->user()->is_admin == 2 )
                    <li class="nav-item">
                        <a class="nav-link menu-link {{ request()->routeIs('admin.users.index') ? 'active' : '' }}" href="{{ route('admin.users.index') }}">
                            <i class="ri-book-fill"></i> <span data-key="t-widgets">Users</span>
                        </a>
                    </li>
                @endif

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('admin.subscription.index') ? 'active' : '' }}" href="{{ route('admin.subscription.index') }}">
                        <i class="ri-book-fill"></i> <span data-key="t-widgets">Subsctiption</span>
                    </a>
                </li>


                {{-- <li class="nav-item">
                    <a class="nav-link menu-link active" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-apps-2-line"></i> <span data-key="t-apps">E-Book</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item {{ request()->routeIs('book.category.index') ? 'active' : '' }}">
                                <a href="{{ route('book.category.index') }}" class="nav-link {{ request()->routeIs('book.category.index') ? 'active' : '' }}" data-key="t-calendar"> Category </a>
                            </li>

                        </ul>
                    </div>
                </li> --}}
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
