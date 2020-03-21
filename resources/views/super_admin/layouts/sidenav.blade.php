<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src">
            <a href=" {{ url('/')}}" class="">HOME</a>
        </div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button"
                class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboards</li>
                <li>
                    <a href="{{route('home')}}" class="{{ (Request::is('home') || Request::is('home/*') ? 'mm-active' : '') }} ">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Dashboard
                    </a>
                    <a href="{{url('/editorial')}}" class="{{ (Request::is('editorial') || Request::is('editorial/*') ? 'mm-active' : '') }} ">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Blog
                    </a>
                </li>
                <li class="app-sidebar__heading">Others</li>
                <li>
                    <a href="{{route('profile.show', Auth::id())}}" class="{{ (Request::is('profile') || Request::is('profile/*') ? 'mm-active' : '') }} ">
                        <i class="metismenu-icon pe-7s-display2"></i>
                       Profile
                    </a>
                </li>
                <li>
                    <a href="{{url('/settings')}}" class="{{ (Request::is('settings') || Request::is('settings/*') ? 'mm-active' : '') }} ">
                        <i class="metismenu-icon pe-7s-display2"></i>
                       Settings
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
