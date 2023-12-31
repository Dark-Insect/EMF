
<!--wrapper-->
<div class="wrapper">
    <!--sidebar wrapper -->
    <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <!-- <div>
                <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
            </div> -->
            <div>
                <h4 class="logo-text">VRS</h4>
            </div>
            <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
            </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">

            <li>
                <a href="dashboard" class="">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
                {{-- <ul>
                    <li> <a href="dashboard"><i class="bx bx-right-arrow-alt"></i>Home</a>
                    </li>
                    {{-- <li> <a href="{{ route('users.index') }}"><i class="bx bx-right-arrow-alt"></i>Users</a> --}}
                    </li>
                {{-- </ul>  --}}
            </li>

            <li class="menu-label">VOTERS REGISTRATION SYSTEM</li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class=""><i class=''></i>
                    </div>
                    <div class="menu-title">Lists</div>
                </a>
                <ul>
                    <li> 
                        <a href="{{ route('products.index') }}">
                            <div class=""><i class=''></i></div>
                            Lists
                        </a>
                    </li>
                    <li> 
                    <a href="addproduct"><i class="bx bx-right-arrow-alt"></i>
                        Register New Voters
                    </a>
                   
                </ul>
            </li>
            
           
          
            {{-- <li>
                <a href="{{ route('transactions.index') }}">
                    <div class="parent-icon"><i class='bx bx-money'></i>
                    </div>
                    <div class="menu-title">Transactions</div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="parent-icon"><i class='bx bx-file'></i>
                    </div>
                    <div class="menu-title">Reports</div>
                </a>
            </li>

            <li>
                <a href="#">
                    <div class="parent-icon"><i class='bx bx-chart'></i>
                    </div>
                    <div class="menu-title">Suppliers</div>
                </a>
            </li>

            <li>
                <a href="#">
                    <div class="parent-icon"><i class='bx bx-user-check'></i>
                    </div>
                    <div class="menu-title">Customers</div>
                </a>
            </li>
            
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"> <i class="bx bx-donate-blood"></i>
                    </div>
                    <div class="menu-title">Icons</div>
                </a>
                <ul>
                    <li> <a href="icons-line-icons.html"><i class="bx bx-right-arrow-alt"></i>Line Icons</a>
                    </li>
                    <li> <a href="icons-boxicons.html"><i class="bx bx-right-arrow-alt"></i>Boxicons</a>
                    </li>
                    <li> <a href="icons-feather-icons.html"><i class="bx bx-right-arrow-alt"></i>Feather Icons</a>
                    </li>
                </ul>
            </li> --}}
            <li class="menu-label">USERS</li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-user   '></i>
                    </div>
                    <div class="menu-title">User Accounts</div>
                </a>
            <ul>
                <li> 
                    <a href="{{ route('users.index') }}">
                        <div class="parent-icon"><i class="bx bx-user-circle"></i>
                        </div>
                        Add User
                    </a>
                </li>
                <li>
                    <a href="showuser">
                        <div class="parent-icon"><i class="bx bx-user-circle"></i></div>
                        Manage User
                    </a>
                </li>
            </ul>
           
        </ul>
        <!--end navigation-->
    </div>
    <!--end sidebar wrapper -->
    <!--start header -->
    <header>
        <div class="topbar d-flex align-items-center">
            <nav class="navbar navbar-expand">
                <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                </div>
                <div class="search-bar flex-grow-1">
                    <div class="position-relative search-bar-box">
                        
                    </div>
                </div>
          
               
                @guest
                <div class="user-box dropdown">
                    @if (Route::has('login'))
                    
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                   
                @endif

                @if (Route::has('register'))
                   
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    
                @endif
            @else
                    <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{asset('/storage/users/' .Auth::user()->user_img)}}" class="user-img" alt="user">
                        <div class="user-info ps-3">
                            <p class="user-name mb-0">{{ Auth::user()->name }}</p>
                            <p class="designattion mb-0"> 
                                
                                @if (Auth::user()->is_admin == 1) Admin
                                @elseif (Auth::user()->is_admin == 2) Cashier
                                @else Manager
                                @endif
                            </p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
       
                        <li>
                            <div class="dropdown-divider mb-0"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" 
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class='bx bx-log-out-circle'></i><span>{{ __('Logout') }}</span></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                                
                            </form>
                        </li>
                    </ul>
                </div>
                @endguest
            </nav>
        </div>
    </header>
    <!--end header -->
<!--start switcher-->
<div class="switcher-wrapper">
    <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
    </div>
    <div class="switcher-body">
        <div class="d-flex align-items-center">
            <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
            <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
        </div>
        <hr/>
        <h6 class="mb-0">Theme Styles</h6>
        <hr/>
        <div class="d-flex align-items-center justify-content-between">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
                <label class="form-check-label" for="lightmode">Light</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
                <label class="form-check-label" for="darkmode">Dark</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
                <label class="form-check-label" for="semidark">Semi Dark</label>
            </div>
        </div>
        <hr/>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
            <label class="form-check-label" for="minimaltheme">Minimal Theme</label>
        </div>
        <hr/>
        <h6 class="mb-0">Header Colors</h6>
        <hr/>
        <div class="header-colors-indigators">
            <div class="row row-cols-auto g-3">
                <div class="col">
                    <div class="indigator headercolor1" id="headercolor1"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor2" id="headercolor2"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor3" id="headercolor3"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor4" id="headercolor4"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor5" id="headercolor5"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor6" id="headercolor6"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor7" id="headercolor7"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor8" id="headercolor8"></div>
                </div>
            </div>
        </div>
        <hr/>
        <h6 class="mb-0">Sidebar Colors</h6>
        <hr/>
        <div class="header-colors-indigators">
            <div class="row row-cols-auto g-3">
                <div class="col">
                    <div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
                </div>
                <div class="col">
                    <div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
                </div>
                <div class="col">
                    <div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
                </div>
                <div class="col">
                    <div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
                </div>
                <div class="col">
                    <div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
                </div>
                <div class="col">
                    <div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
                </div>
                <div class="col">
                    <div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
                </div>
                <div class="col">
                    <div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="page-footer">
    <p class="mb-0">Copyright © {{date('Y')}}. All right reserved.</p>
</footer>
<!--end switcher-->