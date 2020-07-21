
<header class="dt-header">

    <!-- Header container -->
    <div class="dt-header__container">

      <!-- Brand -->
      <div class="dt-brand">

        <!-- Brand tool -->
        <div class="dt-brand__tool" data-toggle="main-sidebar">
          <i class="icon icon-xl icon-menu-fold d-none d-lg-inline-block"></i>
          <i class="icon icon-xl icon-menu d-lg-none"></i>
        </div>
        <!-- /brand tool -->

        <!-- Brand logo -->
        <span class="dt-brand__logo">
        <a class="dt-brand__logo-link" href="{{route('home')}}">
          <img class="dt-brand__logo-img d-none d-lg-inline-block" src="{{asset('backend/assets/images/student.png') }}" alt="Wieldy">
          <img class="dt-brand__logo-symbol d-lg-none" src="{{asset('backend/assets/images/student.png') }}" alt="Wieldy">
        </a>
      </span>
        <!-- /brand logo -->

      </div>
      <!-- /brand -->

      <!-- Header toolbar-->
      <div class="dt-header__toolbar">

        {{-- <!-- Search box -->
        <form class="search-box d-none d-lg-block">
          <input class="form-control border-0" placeholder="Search in app..." value="" type="search">
          <span class="search-icon text-light-gray"><i class="icon icon-search icon-lg"></i></span>
        </form>
        <!-- /search box --> --}}

        <!-- Header Menu Wrapper -->
        <div class="dt-nav-wrapper">
          <!-- Header Menu -->
          <ul class="dt-nav d-lg-none">
            <li class="dt-nav__item dt-notification-search dropdown">

              <!-- Dropdown Link -->
              <a href="#" class="dt-nav__link dropdown-toggle no-arrow" data-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false"> <i class="icon icon-search-new icon-fw icon-lg"></i> </a>
              <!-- /dropdown link -->

              <!-- Dropdown Option -->
              <div class="dropdown-menu">

                <!-- Search Box -->
                <form class="search-box right-side-icon">
                  <input class="form-control form-control-lg" type="search" placeholder="Search in app...">
                  <button type="submit" class="search-icon"><i class="icon icon-search icon-lg"></i></button>
                </form>
                <!-- /search box -->

              </div>
              <!-- /dropdown option -->

            </li>
          </ul>
          <!-- /header menu -->


          <!-- /header menu -->

          <!-- Header Menu -->
          <ul class="dt-nav">
            <li class="dt-nav__item">

              <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dt-nav__link btn btn-outline-success  lgt-btn">
                Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            </li>
          </ul>
          <!-- /header menu -->

        </div>
        <!-- Header Menu Wrapper -->

      </div>
      <!-- /header toolbar -->

    </div>
    <!-- /header container -->

  </header>