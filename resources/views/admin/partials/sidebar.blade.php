<div class="app-sidebar sidebar-shadow bg-midnight-bloom sidebar-text-light">
    <div class="app-header__logo">
        <div class="logo-src" style="background:url({{ asset('images/logo-inverse.png') }})"> Salut </div>
        <div class="header__pane ml-auto">
            <div>
                <button
                        type="button"
                        class="hamburger close-sidebar-btn hamburger--elastic"
                        data-class="closed-sidebar"
                >
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button
                    type="button"
                    class="hamburger hamburger--elastic mobile-toggle-nav"
            >
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
            <span>
              <button
                      type="button"
                      class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav"
              >
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
                    <a href="{{ route('admin.dashboard.index') }}" class="mm-active">
                        <i class="metismenu-icon pe-7s-home"></i>
                        Dashboard
                    </a>
                </li>
                <li class="app-sidebar__heading">Entities</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-help2"></i>
                        Restaurants
                        <i
                                class="metismenu-state-icon pe-7s-angle-down caret-left"
                        ></i>
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon"> </i>All Restaurants
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon"> </i>Applications
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon fa fa-blind"></i>
                        Charity
                        <i
                                class="metismenu-state-icon pe-7s-angle-down caret-left"
                        ></i>
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon"> </i>All Restaurants
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon"> </i>Applications
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="app-sidebar__heading">People</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-user"></i>
                        Admins
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon"> </i>Restaurant
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon"> </i>Charity
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon"> </i>Website
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-users"></i>
                        Clients
                    </a>
                </li>
                <li class="app-sidebar__heading">Miscellaneous</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-news-paper"> </i>
                        Orders
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-gift"></i>
                        Gifts
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-settings"> </i>
                        Settings
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>