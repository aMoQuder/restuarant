 <!-- ======== Preloader =========== -->
 <div id="preloader">
     <div class="spinner"></div>
 </div>
 <!-- ======== Preloader =========== -->

 <!-- ======== sidebar-nav start =========== -->
 <aside class="sidebar-nav-wrapper">
     <div class="navbar-logo">
         <a href="{{ route('home') }}">
             <img src="assets/images/logo/logo.svg" alt="logo" />
         </a>
     </div>
     <nav class="sidebar-nav">
         <ul>
             <li class="nav-item nav-item-has-children">
                 <a href="#0" data-bs-toggle="collapse" data-bs-target="#ddmenu_1" aria-controls="ddmenu_1"
                     aria-expanded="false" aria-label="Toggle navigation">
                     <span class="icon">
                         <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                             <path
                                 d="M8.74999 18.3333C12.2376 18.3333 15.1364 15.8128 15.7244 12.4941C15.8448 11.8143 15.2737 11.25 14.5833 11.25H9.99999C9.30966 11.25 8.74999 10.6903 8.74999 10V5.41666C8.74999 4.7263 8.18563 4.15512 7.50586 4.27556C4.18711 4.86357 1.66666 7.76243 1.66666 11.25C1.66666 15.162 4.83797 18.3333 8.74999 18.3333Z" />
                             <path
                                 d="M17.0833 10C17.7737 10 18.3432 9.43708 18.2408 8.75433C17.7005 5.14918 14.8508 2.29947 11.2457 1.75912C10.5629 1.6568 10 2.2263 10 2.91665V9.16666C10 9.62691 10.3731 10 10.8333 10H17.0833Z" />
                         </svg>
                     </span>
                     <span class="text">Dashboard</span>
                 </a>
                 <ul id="ddmenu_1" class="collapse show dropdown-nav">
                     <li>
                         <a href="{{ route('home') }}" class="active"> Restaurant </a>
                     </li>
                 </ul>
             </li>
             <li class="nav-item nav-item-has-children">
                <a
                  href="#0"
                  class="collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#ddmenu_55"
                  aria-controls="ddmenu_55"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="icon">
                      <i class="lni lni-dinner"></i>
                  </span>
                  <span class="text">Food</span>
                </a>
                <ul id="ddmenu_55" class="collapse dropdown-nav">
                  <li>
                    <a href="{{route('createfood')}}"> Add Food </a>
                  </li>
                  <li>
                    <a href="{{route('allfood')}}"> All Food </a>
                  </li>
                  <li>
                    <a href="{{route('createtypefood')}}"> Add Type Food </a>
                  </li>
                </ul>
              </li>

             <li class="nav-item">
                 <a href="{{ route('allbook') }}">
                     <span class="icon">
                         <i class="mdi mdi-table-picnic"></i>

                     </span>
                     <span class="text">Book table</span>
                 </a>
             </li>
             <li class="nav-item nav-item-has-children">
                 <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_3"
                     aria-controls="ddmenu_3" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="icon">
                         <i class="lni lni-user"></i>
                     </span>
                     <span class="text">User</span>
                 </a>
                 <ul id="ddmenu_3" class="collapse dropdown-nav">
                     <li>
                         <a href="{{ route('createUser') }}"> Add User </a>
                     </li>
                     <li>
                         <a href="{{ route('allUser') }}"> All User </a>
                     </li>
                 </ul>
             </li>
             <span class="divider">
                 <hr />
             </span>
             <li class="nav-item nav-item-has-children">
                 <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_4"
                     aria-controls="ddmenu_4" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="icon">
                         <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                             <path
                                 d="M3.33334 3.35442C3.33334 2.4223 4.07954 1.66666 5.00001 1.66666H15C15.9205 1.66666 16.6667 2.4223 16.6667 3.35442V16.8565C16.6667 17.5519 15.8827 17.9489 15.3333 17.5317L13.8333 16.3924C13.537 16.1673 13.1297 16.1673 12.8333 16.3924L10.5 18.1646C10.2037 18.3896 9.79634 18.3896 9.50001 18.1646L7.16668 16.3924C6.87038 16.1673 6.46298 16.1673 6.16668 16.3924L4.66668 17.5317C4.11731 17.9489 3.33334 17.5519 3.33334 16.8565V3.35442ZM4.79168 5.04218C4.79168 5.39173 5.0715 5.6751 5.41668 5.6751H10C10.3452 5.6751 10.625 5.39173 10.625 5.04218C10.625 4.69264 10.3452 4.40927 10 4.40927H5.41668C5.0715 4.40927 4.79168 4.69264 4.79168 5.04218ZM5.41668 7.7848C5.0715 7.7848 4.79168 8.06817 4.79168 8.41774C4.79168 8.76724 5.0715 9.05066 5.41668 9.05066H10C10.3452 9.05066 10.625 8.76724 10.625 8.41774C10.625 8.06817 10.3452 7.7848 10 7.7848H5.41668ZM4.79168 11.7932C4.79168 12.1428 5.0715 12.4262 5.41668 12.4262H10C10.3452 12.4262 10.625 12.1428 10.625 11.7932C10.625 11.4437 10.3452 11.1603 10 11.1603H5.41668C5.0715 11.1603 4.79168 11.4437 4.79168 11.7932ZM13.3333 4.40927C12.9882 4.40927 12.7083 4.69264 12.7083 5.04218C12.7083 5.39173 12.9882 5.6751 13.3333 5.6751H14.5833C14.9285 5.6751 15.2083 5.39173 15.2083 5.04218C15.2083 4.69264 14.9285 4.40927 14.5833 4.40927H13.3333ZM12.7083 8.41774C12.7083 8.76724 12.9882 9.05066 13.3333 9.05066H14.5833C14.9285 9.05066 15.2083 8.76724 15.2083 8.41774C15.2083 8.06817 14.9285 7.7848 14.5833 7.7848H13.3333C12.9882 7.7848 12.7083 8.06817 12.7083 8.41774ZM13.3333 11.1603C12.9882 11.1603 12.7083 11.4437 12.7083 11.7932C12.7083 12.1428 12.9882 12.4262 13.3333 12.4262H14.5833C14.9285 12.4262 15.2083 12.1428 15.2083 11.7932C15.2083 11.4437 14.9285 11.1603 14.5833 11.1603H13.3333Z" />
                         </svg>
                     </span>
                     <span class="text">Events </span>
                 </a>
                 <ul id="ddmenu_4" class="collapse dropdown-nav">
                     <li>
                         <a href="{{ route('Eventall') }}"> All Event </a>
                     </li>
                     <li>
                         <a href="{{ route('events.create') }}"> Add Event </a>
                     </li>

                 </ul>
             </li>

             <li class="nav-item nav-item-has-children">
                 <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_5"
                     aria-controls="ddmenu_5" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="icon">
                         <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                             <path
                                 d="M4.16666 3.33335C4.16666 2.41288 4.91285 1.66669 5.83332 1.66669H14.1667C15.0872 1.66669 15.8333 2.41288 15.8333 3.33335V16.6667C15.8333 17.5872 15.0872 18.3334 14.1667 18.3334H5.83332C4.91285 18.3334 4.16666 17.5872 4.16666 16.6667V3.33335ZM6.04166 5.00002C6.04166 5.3452 6.32148 5.62502 6.66666 5.62502H13.3333C13.6785 5.62502 13.9583 5.3452 13.9583 5.00002C13.9583 4.65485 13.6785 4.37502 13.3333 4.37502H6.66666C6.32148 4.37502 6.04166 4.65485 6.04166 5.00002ZM6.66666 6.87502C6.32148 6.87502 6.04166 7.15485 6.04166 7.50002C6.04166 7.8452 6.32148 8.12502 6.66666 8.12502H13.3333C13.6785 8.12502 13.9583 7.8452 13.9583 7.50002C13.9583 7.15485 13.6785 6.87502 13.3333 6.87502H6.66666ZM6.04166 10C6.04166 10.3452 6.32148 10.625 6.66666 10.625H9.99999C10.3452 10.625 10.625 10.3452 10.625 10C10.625 9.65485 10.3452 9.37502 9.99999 9.37502H6.66666C6.32148 9.37502 6.04166 9.65485 6.04166 10ZM9.99999 16.6667C10.9205 16.6667 11.6667 15.9205 11.6667 15C11.6667 14.0795 10.9205 13.3334 9.99999 13.3334C9.07949 13.3334 8.33332 14.0795 8.33332 15C8.33332 15.9205 9.07949 16.6667 9.99999 16.6667Z" />
                         </svg>
                     </span>
                     <span class="text"> Blogs </span>
                 </a>
                 <ul id="ddmenu_5" class="collapse dropdown-nav">
                     <li>
                         <a href="{{ route('allblog') }}"> All blog </a>
                     </li>
                     <li>
                         <a href="{{ route('createblog') }}"> Add blog </a>
                     </li>
                 </ul>
             </li>
             <li class="nav-item nav-item-has-children">
                 <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_7"
                     aria-controls="ddmenu_7" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="icon">
                         <i class="lni lni-envelope"></i>
                     </span>
                     <span class="text"> Contact </span>
                 </a>
                 <ul id="ddmenu_7" class="collapse dropdown-nav">
                     <li>
                         <a href="{{ route('allcontact') }}"> All Conatct </a>
                     </li>

                 </ul>
             </li>

             <span class="divider">
                 <hr />
             </span>
             <li class="nav-item nav-item-has-children">
                 <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_8"
                     aria-controls="ddmenu_8" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="icon">
                         <i class="lni lni-home"></i>
                     </span>
                     <span class="text"> Home </span>
                 </a>
                 <ul id="ddmenu_8" class="collapse dropdown-nav">
                     <li>
                         <a href="{{ route('welcome') }}"> welcome </a>
                     </li>

                 </ul>
             </li>
         </ul>
     </nav>
     <div class="promo-box">
         <div class="promo-icon">
             <img class="mx-auto" src="./assets/images/logo/logo-icon-big.svg" alt="Logo">
         </div>
         <h3>Upgrade to PRO</h3>
         <p>Improve your development process and start doing more with PlainAdmin PRO!</p>
         <a href="https://plainadmin.com/pro" target="_blank" rel="nofollow" class="main-btn primary-btn btn-hover">
             Upgrade to PRO
         </a>
     </div>
 </aside>
 <div class="overlay"></div>
 <!-- ======== sidebar-nav end =========== -->
 <!-- ======== main-wrapper start =========== -->
 <main class="main-wrapper">
     <!-- ========== header start ========== -->
     <header class="header">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-lg-5 col-md-5 col-6">
                     <div class="header-left d-flex align-items-center">
                         <div class="menu-toggle-btn mr-15">
                             <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                                 <i class="lni lni-chevron-left me-2"></i> Menu
                             </button>
                         </div>
                         <div class="header-search d-none d-md-flex">
                             <form action="#">
                                 <input type="text" placeholder="Search..." />
                                 <button><i class="lni lni-search-alt"></i></button>
                             </form>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-7 col-md-7 col-6">
                     <div class="header-right">
                         <!-- notification start -->
                         <div class="notification-box ml-15 d-none d-md-flex">
                             <button class="dropdown-toggle" type="button" id="notification"
                                 data-bs-toggle="dropdown" aria-expanded="false">
                                 <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                     <path
                                         d="M11 20.1667C9.88317 20.1667 8.88718 19.63 8.23901 18.7917H13.761C13.113 19.63 12.1169 20.1667 11 20.1667Z"
                                         fill="" />
                                     <path
                                         d="M10.1157 2.74999C10.1157 2.24374 10.5117 1.83333 11 1.83333C11.4883 1.83333 11.8842 2.24374 11.8842 2.74999V2.82604C14.3932 3.26245 16.3051 5.52474 16.3051 8.24999V14.287C16.3051 14.5301 16.3982 14.7633 16.564 14.9352L18.2029 16.6342C18.4814 16.9229 18.2842 17.4167 17.8903 17.4167H4.10961C3.71574 17.4167 3.5185 16.9229 3.797 16.6342L5.43589 14.9352C5.6017 14.7633 5.69485 14.5301 5.69485 14.287V8.24999C5.69485 5.52474 7.60672 3.26245 10.1157 2.82604V2.74999Z"
                                         fill="" />
                                 </svg>
                                 <span></span>
                             </button>
                             <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notification">
                                 <li>
                                     <a href="#0">
                                         <div class="image">
                                             <img src="assets/images/lead/lead-6.png" alt="" />
                                         </div>
                                         <div class="content">
                                             <h6>
                                                 John Doe
                                                 <span class="text-regular">
                                                     comment on a product.
                                                 </span>
                                             </h6>
                                             <p>
                                                 Lorem ipsum dolor sit amet, consect etur adipiscing
                                                 elit Vivamus tortor.
                                             </p>
                                             <span>10 mins ago</span>
                                         </div>
                                     </a>
                                 </li>
                                 <li>
                                     <a href="#0">
                                         <div class="image">
                                             <img src="assets/images/lead/lead-1.png" alt="" />
                                         </div>
                                         <div class="content">
                                             <h6>
                                                 Jonathon
                                                 <span class="text-regular">
                                                     like on a product.
                                                 </span>
                                             </h6>
                                             <p>
                                                 Lorem ipsum dolor sit amet, consect etur adipiscing
                                                 elit Vivamus tortor.
                                             </p>
                                             <span>10 mins ago</span>
                                         </div>
                                     </a>
                                 </li>
                             </ul>
                         </div>
                         <!-- notification end -->
                         <!-- message start -->
                         <div class="header-message-box ml-15 d-none d-md-flex">
                             <button class="dropdown-toggle" type="button" id="message" data-bs-toggle="dropdown"
                                 aria-expanded="false">
                                 <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                     <path
                                         d="M7.74866 5.97421C7.91444 5.96367 8.08162 5.95833 8.25005 5.95833C12.5532 5.95833 16.0417 9.4468 16.0417 13.75C16.0417 13.9184 16.0364 14.0856 16.0259 14.2514C16.3246 14.138 16.6127 14.003 16.8883 13.8482L19.2306 14.629C19.7858 14.8141 20.3141 14.2858 20.129 13.7306L19.3482 11.3882C19.8694 10.4604 20.1667 9.38996 20.1667 8.25C20.1667 4.70617 17.2939 1.83333 13.75 1.83333C11.0077 1.83333 8.66702 3.55376 7.74866 5.97421Z"
                                         fill="" />
                                     <path
                                         d="M14.6667 13.75C14.6667 17.2938 11.7939 20.1667 8.25004 20.1667C7.11011 20.1667 6.03962 19.8694 5.11182 19.3482L2.76946 20.129C2.21421 20.3141 1.68597 19.7858 1.87105 19.2306L2.65184 16.8882C2.13062 15.9604 1.83338 14.89 1.83338 13.75C1.83338 10.2062 4.70622 7.33333 8.25004 7.33333C11.7939 7.33333 14.6667 10.2062 14.6667 13.75ZM5.95838 13.75C5.95838 13.2437 5.54797 12.8333 5.04171 12.8333C4.53545 12.8333 4.12504 13.2437 4.12504 13.75C4.12504 14.2563 4.53545 14.6667 5.04171 14.6667C5.54797 14.6667 5.95838 14.2563 5.95838 13.75ZM9.16671 13.75C9.16671 13.2437 8.7563 12.8333 8.25004 12.8333C7.74379 12.8333 7.33338 13.2437 7.33338 13.75C7.33338 14.2563 7.74379 14.6667 8.25004 14.6667C8.7563 14.6667 9.16671 14.2563 9.16671 13.75ZM11.4584 14.6667C11.9647 14.6667 12.375 14.2563 12.375 13.75C12.375 13.2437 11.9647 12.8333 11.4584 12.8333C10.9521 12.8333 10.5417 13.2437 10.5417 13.75C10.5417 14.2563 10.9521 14.6667 11.4584 14.6667Z"
                                         fill="" />
                                 </svg>
                                 <span></span>
                             </button>
                             <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="message">
                                 <li>
                                     <a href="#0">
                                         <div class="image">
                                             <img src="assets/images/lead/lead-5.png" alt="" />
                                         </div>
                                         <div class="content">
                                             <h6>Jacob Jones</h6>
                                             <p>Hey!I can across your profile and ...</p>
                                             <span>10 mins ago</span>
                                         </div>
                                     </a>
                                 </li>
                                 <li>
                                     <a href="#0">
                                         <div class="image">
                                             <img src="assets/images/lead/lead-3.png" alt="" />
                                         </div>
                                         <div class="content">
                                             <h6>John Doe</h6>
                                             <p>Would you mind please checking out</p>
                                             <span>12 mins ago</span>
                                         </div>
                                     </a>
                                 </li>
                                 <li>
                                     <a href="#0">
                                         <div class="image">
                                             <img src="assets/images/lead/lead-2.png" alt="" />
                                         </div>
                                         <div class="content">
                                             <h6>Anee Lee</h6>
                                             <p>Hey! are you available for freelance?</p>
                                             <span>1h ago</span>
                                         </div>
                                     </a>
                                 </li>
                             </ul>
                         </div>
                         <!-- message end -->
                         <!-- profile start -->
                         <div class="profile-box ml-15">
                             <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile"
                                 data-bs-toggle="dropdown" aria-expanded="false">
                                 <div class="profile-info">
                                     <div class="info">
                                         <div class="image">
                                             <img src="assets/images/profile/profile-image.png" alt="" />
                                         </div>
                                         <div>
                                             <h6 class="fw-500">Adam Joe</h6>
                                             <p>Admin</p>
                                         </div>
                                     </div>
                                 </div>
                             </button>
                             <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                                 <li>
                                     <div class="author-info flex items-center !p-1">
                                         <div class="image">
                                             <img src="assets/images/profile/profile-image.png" alt="image">
                                         </div>
                                         <div class="content">
                                             <h4 class="text-sm">Adam Joe</h4>
                                             <a class="text-black/40 dark:text-white/40 hover:text-black dark:hover:text-white text-xs"
                                                 href="#">Email@gmail.com</a>
                                         </div>
                                     </div>
                                 </li>
                                 <li class="divider"></li>
                                 <li>
                                     <a href="#0">
                                         <i class="lni lni-user"></i> View Profile
                                     </a>
                                 </li>
                                 <li>
                                     <a href="#0">
                                         <i class="lni lni-alarm"></i> Notifications
                                     </a>
                                 </li>
                                 <li>
                                     <a href="#0"> <i class="lni lni-inbox"></i> Messages </a>
                                 </li>
                                 <li>
                                     <a href="#0"> <i class="lni lni-cog"></i> Settings </a>
                                 </li>
                                 <li class="divider"></li>
                                 <li>
                                     <a href="#0"> <i class="lni lni-exit"></i> Sign Out </a>
                                 </li>
                             </ul>
                         </div>
                         <!-- profile end -->
                     </div>
                 </div>
             </div>
         </div>
     </header>
     <!-- ========== header end ========== -->
