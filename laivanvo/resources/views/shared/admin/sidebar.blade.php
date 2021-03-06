<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="{{url('/dashboard')}}" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="{{asset('images/logo.png')}}" srcset="{{asset('images/logo2x.png 2x')}}" alt="logo">
                <img class="logo-dark logo-img" src="{{asset('images/logo-dark.png')}}" srcset="{{asset('images/logo-dark2x.png 2x')}}" alt="logo-dark">
                <img class="logo-small logo-img logo-img-small" src="{{asset('images/logo-small.png')}}" srcset="{{asset('images/logo-small2x.png 2x')}}" alt="logo-small">
            </a>
        </div>
        <div class="nk-menu-trigger mr-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="{{url('/dashboard')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-grid-alt-fill"></em></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item {{ session('module_active') == 'order' ? 'active current-page' : '' }}">
                        <a href="{{route('order.index')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-bag-fill"></em></span>
                            <span class="nk-menu-text">H??a ????n</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item {{ session('module_active') == 'category' ? 'active current-page' : '' }}">
                        <a href="{{route('category.index')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-package-fill"></em></em></span>
                            <span class="nk-menu-text">Danh m???c</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item {{ session('module_active') == 'room' ? 'active current-page' : '' }}">
                        <a href="{{route('room.index')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-home-fill"></em></em></span>
                            <span class="nk-menu-text">Ph??ng</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item {{ session('module_active') == 'customer' ? 'active current-page' : '' }}">
                        <a href="{{route('customer.index')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                            <span class="nk-menu-text">Ng?????i d??ng</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>