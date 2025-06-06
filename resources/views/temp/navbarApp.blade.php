 <!-- Header -->
 <header>
     <!-- Header desktop -->
     <div class="wrap-menu-header gradient1 trans-0-4">
         <div class="container h-full">
             <div class="wrap_header trans-0-3">
                 <!-- Logo -->
                 <div class="logo" >

                     <a href="{{ route('welcome') }}">
                         <img src="images/icons/logo.png" alt="IMG-LOGO" data-logofixed="images/icons/logo2.png">
                     </a>
                 </div>

                 <!-- Menu -->
                 <div class="wrap_menu p-l-45 p-l-0-xl">
                     <nav class="menu">
                         <ul class="main_menu">
                             <li>
                                 <a href="{{ route('welcome') }}">Home</a>
                             </li>

                             <li>
                                 <a href="{{ route('menue') }}">Menu</a>
                             </li>

                             <li>
                                 <a href="{{ route('reservation') }}">Reservation</a>
                             </li>

                             <li>
                                 <a href="{{ route('about') }}">About</a>
                             </li>

                             <li>
                                 <a href="{{ route('blog') }}">Blog</a>
                             </li>

                             <li>
                                 <a href="{{ route('contact') }}">Contact</a>
                             </li>
                             


                         </ul>
                     </nav>
                 </div>

                 <!-- Social -->
                 <div class="social flex-w flex-l-m p-r-20">
                     <a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                     <a href="#"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
                     <a href="#"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a>


                     <button class="btn-show-sidebar m-l-33 trans-0-4 "></button>
                     <div class="demo-nav">

                         @guest
                             <button class="dropdown-toggle demo-btn" data-toggle="dropdown" style="    color: red;
                             margin-left: 19px;"><i class="fa fa-user"></i> Sign
                                 in</button>

                             <div class="dropdown-menu dropdown-menu-right ">
                                 <a class="dropdown-item " style="color: #000;" href="{{ route('login') }}">Sign in</a>
                                 @if (Route::has('register'))
                                     <a class="dropdown-item" style="color: #000;" href="{{ route('register') }}">Sign
                                         up</a>
                                 @endif
                             </div>
                         @else
                             <button class=" dropdown-toggle demo-btn" data-toggle="dropdown" style="    color: red;
                             margin-left: 19px;">
                                 {{ Auth::user()->name }}</button>


                             <div class="dropdown-menu dropdown-menu-right">

                                 <a class="dropdown-item" style="color: #000;" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                 </a>
                                 @if (Auth::user()->role == 'admin')
                                     <a class="dropdown-item" style="color: #000;" href="{{ route('home') }}">dashboard</a>
                                 @endif
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                     @csrf
                                 </form>
                             </div>
                         @endguest
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>

 <!-- Sidebar -->
 <aside class="sidebar trans-0-4">
     <!-- Button Hide sidebar -->
     <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

     <!-- - -->
     <ul class="menu-sidebar p-t-95 p-b-20">
         <li class="t-center m-b-13">
             <a href="{{ route('welcome') }}" class="txt19">Home</a>
         </li>

         <li class="t-center m-b-13">
             <a href="{{ route('menue') }}" class="txt19">Menu</a>
         </li>



         <li class="t-center m-b-13">
             <a href="{{ route('about') }}" class="txt19">About</a>
         </li>

         <li class="t-center m-b-13">
             <a href="{{ route('blog') }}" class="txt19">Blog</a>
         </li>

         <li class="t-center m-b-33">
             <a href="{{ route('contact') }}" class="txt19">Contact</a>
         </li>

         <li class="t-center">
             <!-- Button3 -->
             <a href="{{ route('reservation') }}" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
                 Reservation
             </a>
         </li>


     </ul>

     <div class="demo-nav-md"  style="margin: auto; text-align: center;     margin-bottom: 100px;
    " >

        @guest
            <button  class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto dropdown-toggle " style="background-color:rgb(255, 13, 0);" data-toggle="dropdown"><i class="fa fa-user" style="margin-right: 5px;"></i> Sign
                in</button>

            <div class="dropdown-menu dropdown-menu-right ">
                <a class="dropdown-item " style="color: #000;" href="{{ route('login') }}">Sign in</a>
                @if (Route::has('register'))
                    <a class="dropdown-item" style="color: #000;" href="{{ route('register') }}">Sign
                        up</a>
                @endif
            </div>
        @else
            <button class=" dropdown-toggle " style="color:rgb(255, 13, 0); " data-toggle="dropdown">
                {{ Auth::user()->name }}</button>


            <div class="dropdown-menu dropdown-menu-right">

                <a class="dropdown-item" style="color: #000;" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                @if (Auth::user()->role == 'admin')
                    <a class="dropdown-item" style="color: #000;" href="{{ route('home') }}">dashboard</a>
                @endif
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        @endguest
    </div>

     <!-- - -->
     <div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40">
         <!-- - -->
         <h4 class="txt20 m-b-33">
             Gallery
         </h4>

         <!-- Gallery -->
         <div class="wrap-gallery-sidebar flex-w">
             <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-01.jpg"
                 data-lightbox="gallery-footer">
                 <img src="images/photo-gallery-thumb-01.jpg" alt="GALLERY">
             </a>

             <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-02.jpg"
                 data-lightbox="gallery-footer">
                 <img src="images/photo-gallery-thumb-02.jpg" alt="GALLERY">
             </a>

             <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-03.jpg"
                 data-lightbox="gallery-footer">
                 <img src="images/photo-gallery-thumb-03.jpg" alt="GALLERY">
             </a>

             <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-05.jpg"
                 data-lightbox="gallery-footer">
                 <img src="images/photo-gallery-thumb-05.jpg" alt="GALLERY">
             </a>

             <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-06.jpg"
                 data-lightbox="gallery-footer">
                 <img src="images/photo-gallery-thumb-06.jpg" alt="GALLERY">
             </a>

             <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-07.jpg"
                 data-lightbox="gallery-footer">
                 <img src="images/photo-gallery-thumb-07.jpg" alt="GALLERY">
             </a>

             <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-09.jpg"
                 data-lightbox="gallery-footer">
                 <img src="images/photo-gallery-thumb-09.jpg" alt="GALLERY">
             </a>

             <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-10.jpg"
                 data-lightbox="gallery-footer">
                 <img src="images/photo-gallery-thumb-10.jpg" alt="GALLERY">
             </a>

             <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-11.jpg"
                 data-lightbox="gallery-footer">
                 <img src="images/photo-gallery-thumb-11.jpg" alt="GALLERY">
             </a>
         </div>
     </div>
 </aside>





 <div id="google_translate_element"></div>

 <!-- End .header -->
