    <aside id="main-sidebar" class="dt-sidebar">
      <div class="dt-sidebar__container">

        <!-- Sidebar Notification -->
        <div class="dt-sidebar__notification  d-none d-lg-block">
            <a href="{{route('home')}}" class="">
              <img class="dt-avatar" src="{{asset('backend/assets/images/student.png') }}" alt="Domnic Harris">
              <span class="dt-avatar-info">
            <span class="dt-avatar-name" style="text-transform:capitalize;">{{ Auth::user()->name }}</span>
          </span> </a>
        </div>
        <!-- /sidebar notification -->

        <!-- Sidebar Navigation -->
        <ul class="dt-side-nav">

          <!-- Menu Header -->
          <li class="dt-side-nav__item dt-side-nav__header">
            <span class="dt-side-nav__text">main</span>
          </li>
          <!-- /menu header -->
          <!-- Menu Item -->
          <li class="dt-side-nav__item active">
            <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="মালিক পক্ষ">
              <i class="fas fa-user fa"></i>
              <span class="dt-side-nav__text">মালিক পক্ষ</span> </a>

            <!-- Sub-menu -->
            <ul class="dt-side-nav__sub-menu">
              <li class="dt-side-nav__item">
                <a href="{{route('owner.index')}}" class="dt-side-nav__link" title="মালিক যোগ করুন" >
                  <span class="dt-side-nav__text">মালিক যোগ করুন </span> </a>
              </li>

              <li class="dt-side-nav__item">
                <a href="{{route('owner.create')}}" class="dt-side-nav__link" title="মালিকের তালিকা দেখুন">
                  <span class="dt-side-nav__text" >মালিকের তালিকা দেখুন</span> </a>
              </li>
            </ul>
            <!-- /sub-menu -->
          </li>
          <!-- Menu Item -->
          <li class="dt-side-nav__item">
            <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="মালিকের অগ্রীম টাকা  হিসাব">
              <i class="fas fa-user fa"></i>
              <span class="dt-side-nav__text">মালিকের অগ্রীম টাকা  হিসাব</span> </a>

            <!-- Sub-menu -->
            <ul class="dt-side-nav__sub-menu">
              <li class="dt-side-nav__item">
                <a href="{{route('owneradvance.create')}}" class="dt-side-nav__link" title="মালিকের অগ্রীম  টাকা যোগ করুন " >
                  <span class="dt-side-nav__text">মালিকের অগ্রীম  টাকা যোগ করুন  </span> </a>
              </li>

              <li class="dt-side-nav__item">
                <a href="{{route('owneradvance.index')}}" class="dt-side-nav__link" title="মালিকের অগ্রীম টাকা তালিকা দেখুন">
                  <span class="dt-side-nav__text" >মালিকের অগ্রীম টাকা তালিকা দেখুন</span> </a>
              </li>
            </ul>
            <!-- /sub-menu -->
          </li>
           <li class="dt-side-nav__item">
            <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="মালিক পক্ষের গাড়ির তালিকা  সমূহ">
              <i class="fas fa-user fa"></i>
              <span class="dt-side-nav__text">মালিক পক্ষের গাড়ির তালিকা  সমূহ </span> </a>

            <!-- Sub-menu -->
            <ul class="dt-side-nav__sub-menu">
              <li class="dt-side-nav__item">
                <a href="{{route('ownerbus.create')}}" class="dt-side-nav__link" title="মালিকের গাড়ী যোগ  করুণ" >
                  <span class="dt-side-nav__text">মালিকের গাড়ী যোগ  করুণ </span> </a>
              </li>

              <li class="dt-side-nav__item">
                <a href="{{route('ownerbus.index')}}" class="dt-side-nav__link" title="মালিকের গাড়ীর তালিকা দেখুন">
                  <span class="dt-side-nav__text" >মালিকের গাড়ীর তালিকা দেখুন </span> </a>
              </li>
            </ul>
            <!-- /sub-menu -->
          </li>
          <li class="dt-side-nav__item">
            <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="গাড়ী সমূহ তালিকা">
              <i class="fas fa-bus fa"></i><span class="dt-side-nav__text">গাড়ী সমূহ তালিকা </span> </a>

            <!-- Sub-menu -->
            <ul class="dt-side-nav__sub-menu">
              <li class="dt-side-nav__item">
                <a href="{{route('bus.create')}}" class="dt-side-nav__link" title="নতুন গাড়ি যোগ করুন">
                  <span class="dt-side-nav__text">নতুন গাড়ি যোগ করুন </span> </a>
              </li>

              <li class="dt-side-nav__item">
                <a href="{{route('bus.index')}}" class="dt-side-nav__link" title="গাড়ীর  তালিকা দেখুন">
                  <span class="dt-side-nav__text">গাড়ীর  তালিকা দেখুন </span> </a>
              </li> 
            </ul>
            <!-- /sub-menu -->
          </li>
          <!-- /menu item -->
          <li class="dt-side-nav__item">
            <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="ড্রাইভার সমূহ তালিকা">
              <i class="fas fa-users fa-xl fa"></i> <span class="dt-side-nav__text">ড্রাইভার সমূহ তালিকা </span> </a>

            <!-- Sub-menu -->
            <ul class="dt-side-nav__sub-menu">
              <li class="dt-side-nav__item">
                <a href="{{route('driver.index')}}" class="dt-side-nav__link" title="নতুন ড্রাইভার যোগ করুন">
                  <span class="dt-side-nav__text">নতুন ড্রাইভার যোগ করুন </span> </a>
              </li>

              <li class="dt-side-nav__item">
                <a href="{{route('driver.create')}}" class="dt-side-nav__link" title="ড্রাইভার এর   তালিকা দেখুন ">
                  <span class="dt-side-nav__text">ড্রাইভার এর   তালিকা দেখুন </span> </a>
              </li>
            </ul>
            <!-- /sub-menu -->
          </li>
          <!-- /menu item -->
           <!-- /menu item -->
          <li class="dt-side-nav__item">
            <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="হেল্পার সমূহ তালিকা">
              <i class="fas fa-users fa-xl fa"></i><span class="dt-side-nav__text">হেল্পার সমূহ তালিকা </span> </a>

            <!-- Sub-menu -->
            <ul class="dt-side-nav__sub-menu">
              <li class="dt-side-nav__item">
                <a href="{{route('helper.index')}}" class="dt-side-nav__link" title="নতুন হেল্পার যোগ করুন">
                  <span class="dt-side-nav__text">নতুন হেল্পার যোগ করুন </span> </a>
              </li>

              <li class="dt-side-nav__item">
                <a href="{{route('helper.create')}}" class="dt-side-nav__link" title="হেল্পার এর   তালিকা দেখুন">
                  <span class="dt-side-nav__text">হেল্পার এর   তালিকা দেখুন </span> </a>
              </li>
            </ul>
            <!-- /sub-menu -->
          </li>
          <!-- /menu item -->
          <!-- /menu item -->
          <li class="dt-side-nav__item">
            <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="চেকার সমূহ তালিকা">
              <i class="fas fa-users fa-xl fa"></i><span class="dt-side-nav__text">চেকার সমূহ তালিকা </span> </a>

            <!-- Sub-menu -->
            <ul class="dt-side-nav__sub-menu">
              <li class="dt-side-nav__item">
                <a href="{{route('checker.index')}}" class="dt-side-nav__link" title="নতুন চেকার যোগ করুন">
                  <span class="dt-side-nav__text">নতুন চেকার যোগ করুন </span> </a>
              </li>

              <li class="dt-side-nav__item">
                <a href="{{route('checker.create')}}" class="dt-side-nav__link" title="চেকার এর   তালিকা দেখুন">
                  <span class="dt-side-nav__text">চেকার এর   তালিকা দেখুন </span> </a>
              </li>
            </ul>
            <!-- /sub-menu -->
          </li>
          <!-- /menu item -->
          <!-- /menu item -->
          <li class="dt-side-nav__item">
            <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="চেক পোস্ট সমূহ তালিকা ">
              <i class="fas fa-user-check"></i><span class="dt-side-nav__text">চেক পোস্ট সমূহ তালিকা </span> </a>

            <!-- Sub-menu -->
            <ul class="dt-side-nav__sub-menu">
              <li class="dt-side-nav__item">
                <a href="{{route('checkpost.create')}}" class="dt-side-nav__link" title="নতুন চেক পোস্ট যোগ করুন">
                  <span class="dt-side-nav__text">নতুন চেক পোস্ট যোগ করুন </span> </a>
              </li>

              <li class="dt-side-nav__item">
                <a href="{{route('checkpost.index')}}" class="dt-side-nav__link" title="চেক পোস্ট এর   তালিকা দেখুন">
                  <span class="dt-side-nav__text">চেক পোস্ট এর   তালিকা দেখুন </span> </a>
              </li>
            </ul>
            <!-- /sub-menu -->
          </li>
          <!-- /menu item -->
           <!-- /menu item -->
          <li class="dt-side-nav__item">
            <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="কাউন্টার ম্যান  সমূহ তালিকা ">
              <i class="fas fa-user-check"></i><span class="dt-side-nav__text">কাউন্টার ম্যান  সমূহ তালিকা </span> </a>

            <!-- Sub-menu -->
            <ul class="dt-side-nav__sub-menu">
              <li class="dt-side-nav__item">
                <a href="{{route('counterman.index')}}" class="dt-side-nav__link" title="কাউন্টার ম্যান যোগ করুন">
                  <span class="dt-side-nav__text">কাউন্টার ম্যান যোগ করুন </span> </a>
              </li>

              <li class="dt-side-nav__item">
                <a href="{{route('counterman.create')}}" class="dt-side-nav__link" title="কাউন্টার ম্যান এর   তালিকা দেখুন">
                  <span class="dt-side-nav__text">কাউন্টার ম্যান এর তালিকা দেখুন </span> </a>
              </li>
            </ul>
            <!-- /sub-menu -->
          </li>
          <!-- /menu item -->
          <!-- /menu item -->
          <li class="dt-side-nav__item">
            <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="কাউন্টার সমূহ তালিকা ">
             <i class="fas fa-home fa"></i></i><span class="dt-side-nav__text"> কাউন্টার সমূহ তালিকা </span> </a>

            <!-- Sub-menu -->
            <ul class="dt-side-nav__sub-menu">
              <li class="dt-side-nav__item">
                <a href="{{route('counter.create')}}" class="dt-side-nav__link" title="নতুন কাউন্টার  পোস্ট যোগ করুন">
                  <span class="dt-side-nav__text">নতুন কাউন্টার  পোস্ট যোগ করুন </span> </a>
              </li>

              <li class="dt-side-nav__item">
                <a href="{{route('counter.index')}}" class="dt-side-nav__link" title="কাউন্টার  সমূহ   তালিকা দেখুন ">
                  <span class="dt-side-nav__text">কাউন্টার  সমূহ   তালিকা দেখুন </span> </a>
                </a>
              </li>

            </ul>
            <!-- /sub-menu -->
          </li>
          <!-- /menu item -->
          <!-- /menu item -->
          <li class="dt-side-nav__item">
            <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="আজকের  গাড়ির ড্রাইভার এবং  হেল্পার ">
             <i class="fas fa-home fa"></i></i><span class="dt-side-nav__text">আজকের গাড়ির ড্রাইভার এবং  হেল্পার </span> </a>

            <!-- Sub-menu -->
            <ul class="dt-side-nav__sub-menu">
              <li class="dt-side-nav__item">
                <a href="{{route('driverhelper.index')}}" class="dt-side-nav__link" title="আজকের  গাড়ির ড্রাইভার এবং  হেল্পার যোগ করুন">
                  <span class="dt-side-nav__text"> আজকের  গাড়ির ড্রাইভার এবং  হেল্পার যোগ করুন </span> </a>
              </li>

              <li class="dt-side-nav__item">
                <a href="{{route('driverhelper.create')}}" class="dt-side-nav__link" title="আজকের  গাড়ির ড্রাইভার এবং  হেল্পার  তালিকা দেখুন">
                  <span class="dt-side-nav__text"> আজকের  গাড়ির ড্রাইভার এবং  হেল্পার  তালিকা দেখুন </span> </a>
              </li>
              <li class="dt-side-nav__item">
                <a href="{{route('all-driverhelper')}}" class="dt-side-nav__link" title="আজকের  গাড়ির ড্রাইভার এবং  হেল্পার  তালিকা দেখুন">
                  <span class="dt-side-nav__text"> সর্বমোট  গাড়ির ড্রাইভার এবং  হেল্পার  তালিকা দেখুন </span> </a>
              </li>
            </ul>
            <!-- /sub-menu -->
          </li>
          <!-- /menu item -->
                    <!-- /menu item -->
          <li class="dt-side-nav__item">
            <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="আজকের গাড়ির চেকার  সমূহ তালিকা">
              <i class="fas fa-user-check"></i><span class="dt-side-nav__text">আজকের গাড়ির চেকার  সমূহ তালিকা </span> </a>

            <!-- Sub-menu -->
            <ul class="dt-side-nav__sub-menu">
              <li class="dt-side-nav__item">
                <a href="{{route('todaycheck.index')}}" class="dt-side-nav__link" title="আজকের গাড়ির চেকার  যোগ করুন">
                  <span class="dt-side-nav__text">আজকের গাড়ির চেকার  যোগ করুন </span> </a>
              </li>

              <li class="dt-side-nav__item">
                <a href="{{route('todaycheck.create')}}" class="dt-side-nav__link" title="আজকের গাড়ির চেকার এর   তালিকা দেখুন">
                  <span class="dt-side-nav__text">আজকের গাড়ির চেকার এর   তালিকা দেখুন </span> </a>
              </li>
              <li class="dt-side-nav__item">
                <a href="{{route('all-info')}}" class="dt-side-nav__link" title="সর্বমোট  গাড়ির চেকার এর   তালিকা দেখুন">
                  <span class="dt-side-nav__text">সর্বমোট  গাড়ির চেকার এর   তালিকা দেখুন </span> </a>
              </li>
            </ul>
            <!-- /sub-menu -->
          </li>
          <!-- /menu item -->
          <!-- /menu item -->

  <!-- @@@@@ Trip list sidebar @@@@@ -->
          <!-- /menu item -->
                    <!-- /menu item -->
          <li class="dt-side-nav__item">
            <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="ট্রিপ লিস্টের তালিকা ">
              <i class="fas fa-user-check"></i><span class="dt-side-nav__text">ট্রিপ লিস্টের তালিকা  </span> </a>

            <!-- Sub-menu -->
            <ul class="dt-side-nav__sub-menu">
              <li class="dt-side-nav__item">
                <a href="{{route('cartrip.index')}}" class="dt-side-nav__link" title="গাডির ট্রিপ লিস্টের তালিকা যুক্ত করুন ">
                  <span class="dt-side-nav__text">গাডির ট্রিপ লিস্টের তালিকা যুক্ত করুন </span> </a>
              </li>

              <li class="dt-side-nav__item">
                <a href="{{route('cartrip.create')}}" class="dt-side-nav__link" title="আজকের গাডির ট্রিপ লিস্টের তালিকা দেখুন">
                  <span class="dt-side-nav__text">আজকের গাডির ট্রিপ লিস্টের তালিকা দেখুন </span> </a>
              </li>
              <li class="dt-side-nav__item">
                <a href="{{route('cartripall')}}" class="dt-side-nav__link" title="সর্বমোট গাডির ট্রিপ লিস্টের তালিকা দেখুন">
                  <span class="dt-side-nav__text">সর্বমোট গাডির ট্রিপ লিস্টের তালিকা দেখুন </span> </a>
              </li>
            </ul>
            <!-- /sub-menu -->
          </li>
          <!-- /menu item -->
          <!-- /menu item -->

<!-- ********** Employee salary cost sidebar start  ********** -->

          <!-- Menu Header -->
          <li class="dt-side-nav__item dt-side-nav__header">
            <span class="dt-side-nav__text" title="কর্মচারি বেতন বাবদ খরচ">কর্মচারি বেতন বাবদ খরচ</span>
          </li>
          <!-- /menu header -->
          <!-- /menu item -->
          <li class="dt-side-nav__item">
            <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="কাউন্টারম্যানের বেতন বাবদ ">
            <i class="fas fa-home fa"></i></i><span class="dt-side-nav__text">কাউন্টারম্যানের বেতন বাবদ </span> </a>
            <!-- Sub-menu -->
            <ul class="dt-side-nav__sub-menu">
              <li class="dt-side-nav__item">
                <a href="{{route('countermansalary.create')}}" class="dt-side-nav__link" title="কাউন্টারম্যানের বেতনের তালিকা যোগ করুন">
                  <span class="dt-side-nav__text"> কাউন্টারম্যানের বেতনের তালিকা যোগ করুন </span> </a>
              </li>

              <li class="dt-side-nav__item">
                <a href="{{route('countermansalary.index')}}" class="dt-side-nav__link" title="কাউন্টারম্যানের বেতনের তালিকা দেখুন">
                  <span class="dt-side-nav__text"> কাউন্টারম্যানের বেতনের তালিকা দেখুন </span> </a>
              </li>
              <li class="dt-side-nav__item">
                <a href="{{route('csall-info')}}" class="dt-side-nav__link" title="সর্বমোট কাউন্টারম্যানের বেতনের তালিকা দেখুন">
                  <span class="dt-side-nav__text">সর্বমোট কাউন্টারম্যানের বেতনের তালিকা দেখুন </span> </a>
              </li>
            </ul>
          </li>  
            <!-- /sub-menu -->
          <li class="dt-side-nav__item">
            <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="গাড়ির ড্রাইভারের বেতন বাবদ">
            <i class="fas fa-home fa"></i></i><span class="dt-side-nav__text">গাড়ির ড্রাইভারের বেতন বাবদ </span> </a>
            <!-- Sub-menu -->
            <ul class="dt-side-nav__sub-menu">
              <li class="dt-side-nav__item">
                <a href="{{route('driversalary.create')}}" class="dt-side-nav__link" title="ড্রাইভারের বেতনের তালিকা যোগ করুন">
                  <span class="dt-side-nav__text"> ড্রাইভারের বেতনের তালিকা যোগ করুন </span> </a>
              </li>

              <li class="dt-side-nav__item">
                <a href="{{route('driversalary.index')}}" class="dt-side-nav__link" title="ড্রাইভারের বেতনের তালিকা দেখুন">
                  <span class="dt-side-nav__text"> ড্রাইভারের বেতনের তালিকা দেখুন </span> </a>
              </li>
              <li class="dt-side-nav__item">
                <a href="{{route('all-info')}}" class="dt-side-nav__link" title="সর্বমোট ড্রাইভারের বেতনের তালিকা দেখুন">
                  <span class="dt-side-nav__text">সর্বমোট ড্রাইভারের বেতনের তালিকা দেখুন </span> </a>
              </li>
            </ul>
          </li>
            <!-- /sub-menu -->
          <li class="dt-side-nav__item">
            <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="গাড়ির হেল্পারের বেতন বাবদ">
            <i class="fas fa-home fa"></i></i><span class="dt-side-nav__text">গাড়ির হেল্পারের বেতন   বাবদ </span> </a>
            <!-- Sub-menu -->
            <ul class="dt-side-nav__sub-menu">
              <li class="dt-side-nav__item">
                <a href="{{route('helpersalary.create')}}" class="dt-side-nav__link" title="হেল্পারের বেতনের তালিকা যোগ করুন">
                  <span class="dt-side-nav__text"> হেল্পারের বেতনের তালিকা যোগ করুন </span> </a>
              </li>

              <li class="dt-side-nav__item">
                <a href="{{route('helpersalary.index')}}" class="dt-side-nav__link" title=" হেল্পারের বেতনের তালিকা দেখুন">
                  <span class="dt-side-nav__text">  হেল্পারের বেতনের তালিকা দেখুন </span> </a>
              </li>
              <li class="dt-side-nav__item">
                <a href="{{route('hsall-info')}}" class="dt-side-nav__link" title="সর্বমোট হেল্পারের বেতনের তালিকা দেখুন">
                  <span class="dt-side-nav__text">সর্বমোট হেল্পারের বেতনের তালিকা দেখুন </span> </a>
              </li>
            </ul>
          </li>
            <!-- /sub-menu -->
          <li class="dt-side-nav__item">
            <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="চেকারের   বেতন বাবদ">
            <i class="fas fa-home fa"></i></i><span class="dt-side-nav__text">চেকারের   বেতন বাবদ </span> </a>
            <!-- Sub-menu -->
            <ul class="dt-side-nav__sub-menu">
              <li class="dt-side-nav__item">
                <a href="{{route('linemansalary.create')}}" class="dt-side-nav__link" title="চেকারের  বেতনের তালিকা যোগ করুন">
                  <span class="dt-side-nav__text"> চেকারের  বেতনের তালিকা যোগ করুন </span> </a>
              </li>

              <li class="dt-side-nav__item">
                <a href="{{route('linemansalary.index')}}" class="dt-side-nav__link" title="চেকারের  বেতনের তালিকা দেখুন">
                  <span class="dt-side-nav__text"> চেকারের  বেতনের তালিকা দেখুন </span> </a>
              </li>
              <li class="dt-side-nav__item">
                <a href="{{route('lsall-info')}}" class="dt-side-nav__link" title="সর্বমোট চেকারের  বেতনের তালিকা দেখুন">
                  <span class="dt-side-nav__text">সর্বমোট চেকারের  বেতনের তালিকা দেখুন </span> </a>
              </li>
            </ul>
          </li>
            <!-- /sub-menu -->
          </li>   

<!-- ********** Employee salary cost sidebar end  ********** -->

          <!-- Menu Header -->
          <li class="dt-side-nav__item dt-side-nav__header">
            <span class="dt-side-nav__text">খরচ সমূহের তালিকা </span>
          </li>
          <!-- /menu header -->
                        <!-- /menu item -->
          <li class="dt-side-nav__item">
            <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="খরচ সমূহের তালিকা">
            <i class="fas fa-home fa"></i></i><span class="dt-side-nav__text">খরচ সমূহের তালিকা </span></a>
            <!-- Sub-menu -->
            <ul class="dt-side-nav__sub-menu">
              <li class="dt-side-nav__item">
                <a href="{{route('costlist.create')}}" class="dt-side-nav__link" title="গাডির  খরচের তালিকা দেখুন">
                  <span class="dt-side-nav__text">গাডির খরচের তালিকা যোগ করুন</span> </a>
              </li>
              <li class="dt-side-nav__item">
                <a href="{{route('costlist.index')}}" class="dt-side-nav__link" title="গাডির  খরচের তালিকা দেখুন">
                  <span class="dt-side-nav__text">গাডির  খরচের তালিকা দেখুন </span> </a>
              </li>
               <li class="dt-side-nav__item">
                <a href="{{route('countercostlist.create')}}" class="dt-side-nav__link" title="কাউন্টার খরচের তালিকা যোগ করুন">
                  <span class="dt-side-nav__text">কাউন্টার খরচের তালিকা যোগ করুন </span> </a>
              </li>
               <li class="dt-side-nav__item">
                <a href="{{route('countercostlist.index')}}" class="dt-side-nav__link" title="কাউন্টার  খরচের তালিকা দেখুন">
                  <span class="dt-side-nav__text"> কাউন্টার  খরচের তালিকা দেখুন </span> </a>
              </li>
            </ul>
            <!-- /sub-menu -->
          </li>
          <!-- /menu item -->
          <!-- /menu item -->
          <li class="dt-side-nav__item">
            <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="খরচ এর তালিকা">
             <i class="fas fa-home fa"></i></i><span class="dt-side-nav__text">খরচ এর তালিকা</span> </a>
            <!-- Sub-menu -->
            <ul class="dt-side-nav__sub-menu">
              <li>
                <a href="{{route('costadd.create')}}" class="dt-side-nav__link" title="আজকের  গাড়ির ড্রাইভার এবং  হেল্পার যোগ করুন">
                  <span class="dt-side-nav__text">আজকে গাড়ির খরচ সমূহ যোগ করুন </span> </a>
              </li>
              <li class="dt-side-nav__item">
                <a href="{{route('costadd.index')}}" class="dt-side-nav__link" title="আজকের  গাড়ির ড্রাইভার এবং  হেল্পার  তালিকা দেখুন">
                  <span class="dt-side-nav__text">আজকে গাড়ির  খরচ সমূহের তালিকা  দেখুন </span> </a>
              </li>
              <li class="dt-side-nav__item">
                <a href="{{route('costadd-all-info')}}" class="dt-side-nav__link" title="আজকের  গাড়ির ড্রাইভার এবং  হেল্পার  তালিকা দেখুন">
                  <span class="dt-side-nav__text">সর্বমোট গাড়ির  খরচ সমূহের তালিকা  দেখুন </span> </a>
              </li>
              <li class="dt-side-nav__item">
                <a href="{{route('countercostadd.create')}}" class="dt-side-nav__link" title="আজকের  গাড়ির ড্রাইভার এবং  হেল্পার যোগ করুন">
                  <span class="dt-side-nav__text">কাউন্টার খরচ সমূহ যোগ করুন </span> </a>
              </li>
              <li class="dt-side-nav__item">
                <a href="{{route('countercostadd.index')}}" class="dt-side-nav__link" title="আজকের  গাড়ির ড্রাইভার এবং  হেল্পার  তালিকা দেখুন">
                  <span class="dt-side-nav__text">আজকে কাউন্টার  খরচ সমূহের তালিকা  দেখুন </span> </a>
              </li>
              <li class="dt-side-nav__item">
                <a href="{{route('countercostadd-all')}}" class="dt-side-nav__link" title="আজকের  গাড়ির ড্রাইভার এবং  হেল্পার  তালিকা দেখুন">
                  <span class="dt-side-nav__text">সর্বমোট কাউন্টার  খরচ সমূহের তালিকা  দেখুন </span> </a>
              </li>
            </ul>
            <!-- /sub-menu -->
          </li>
          
          <!-- **** Gp cost menu start **** -->
            <li class="dt-side-nav__item">
                <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="জিপি খরচ সমূহের তালিকা">
                <i class="fas fa-home fa"></i></i><span class="dt-side-nav__text">জিপি খরচ সমূহের তালিকা </span> </a>
                <ul class="dt-side-nav__sub-menu">
                  <li class="dt-side-nav__item">
                    <a href="{{route('gpcost.create')}}" class="dt-side-nav__link" title="জিপি খরচ যোগ করুন">
                      <span class="dt-side-nav__text">জিপি খরচ যোগ করুন </span> </a>
                  </li>
                  <li class="dt-side-nav__item">
                    <a href="{{route('gpcost.index')}}" class="dt-side-nav__link" title="আজকের জিপি খরচ সমূহের তালিকা  দেখুন">
                      <span class="dt-side-nav__text">আজকের জিপি খরচ সমূহের তালিকা  দেখুন </span> </a>
                  </li>
                  <li class="dt-side-nav__item">
                    <a href="{{route('gpcost-all')}}" class="dt-side-nav__link" title="সর্বমোট জিপি খরচ সমূহের তালিকা  দেখুন">
                      <span class="dt-side-nav__text">সর্বমোট জিপি খরচ সমূহের তালিকা  দেখুন </span> </a>
                  </li>
                </ul>
            </li>  
            <!-- ***** Gp cost menu end ***** -->

          <!-- /menu item -->
          <!-- Menu Header -->
          <li class="dt-side-nav__item dt-side-nav__header">
            <span class="dt-side-nav__text">আয় সমূহের তালিকা </span>
          </li>
          <!-- /menu header -->
          <!-- /menu item -->
          <li class="dt-side-nav__item">
            <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="টিকেট  থেকে আয়">
             <i class="fas fa-money-bill-wave fa"></i><span class="dt-side-nav__text">টিকেট  থেকে আয়</span> </a>

            <!-- Sub-menu -->
            <ul class="dt-side-nav__sub-menu">
              <li class="dt-side-nav__item">
                <a href="{{route('ticketearn.create')}}" class="dt-side-nav__link" title="টিকেট  থেকে আয় যোগ করুণ">
                  <span class="dt-side-nav__text">টিকেট  থেকে আয় যোগ করুণ </span> </a>
              </li>

              <li class="dt-side-nav__item">
                <a href="{{route('ticketearn.index')}}" class="dt-side-nav__link" title="আজকে টিকেট  থেকে আয় তালিকা দেখুন">
                  <span class="dt-side-nav__text">আজকে টিকেট  থেকে আয় তালিকা দেখুন </span> </a>
              </li>
              <li class="dt-side-nav__item">
                <a href="{{route('all-ticket-list')}}" class="dt-side-nav__link" title="সর্বমোট টিকেট  থেকে আয় তালিকা দেখুন">
                  <span class="dt-side-nav__text">সর্বমোট টিকেট  থেকে আয় তালিকা দেখুন</span> </a>
              </li>
            </ul>
            <!-- /sub-menu -->
          </li>
          <!-- /menu item -->
          <!-- /menu item -->
          <li class="dt-side-nav__item">
            <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="মালামাল   থেকে আয়">
             <i class="fas fa-money-bill-wave fa"></i><span class="dt-side-nav__text">মালামাল   থেকে আয়</span> </a>

            <!-- Sub-menu -->
            <ul class="dt-side-nav__sub-menu">
              <li class="dt-side-nav__item">
                <a href="{{route('accessories.create')}}" class="dt-side-nav__link" title="মালামাল   থেকে আয় যোগ করুণ">
                  <span class="dt-side-nav__text">মালামাল   থেকে আয় যোগ করুণ </span> </a>
              </li>

              <li class="dt-side-nav__item">
                <a href="{{route('accessories.index')}}" class="dt-side-nav__link" title="আজকে মালামাল   থেকে আয় তালিকা দেখুন">
                  <span class="dt-side-nav__text">আজকে মালামাল   থেকে আয় তালিকা দেখুন </span> </a>
              </li>
              <li class="dt-side-nav__item">
                <a href="{{route('accessories-list')}}" class="dt-side-nav__link" title="সর্বমোট মালামাল   থেকে আয় তালিকা দেখুন">
                  <span class="dt-side-nav__text">সর্বমোট মালামাল   থেকে আয় তালিকা দেখুন</span> </a>
              </li>
            </ul>
            <!-- /sub-menu -->
          </li>
          <!-- /menu item -->

          <!-- Menu Header -->
          <li class="dt-side-nav__item dt-side-nav__header">
            <span class="dt-side-nav__text">আয় সমূহ </span>
          </li>
          <!-- /menu header -->
          <!-- /menu item -->
          <li class="dt-side-nav__item">
            <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="আয়ের  হিসাব">
             <i class="fas fa-money-bill-wave fa"></i><span class="dt-side-nav__text">আয়ের  হিসাব  </span> </a>

            <!-- Sub-menu -->
            <ul class="dt-side-nav__sub-menu">
              <li class="dt-side-nav__item">
                <a href="{{route('today')}}" class="dt-side-nav__link" title="আজকের মোট আয়"> <i class="fas fa-money-bill-wave fa"></i>
                <span class="dt-side-nav__text">আজকের মোট আয়</span> </a>
              </li>

              <li class="dt-side-nav__item">
                <a href="{{route('week')}}" class="dt-side-nav__link" title="এ সপ্তায়ে মোট আয়"><i class="fas fa-money-bill-wave fa"></i>
                <span class="dt-side-nav__text">এ সপ্তায়ে মোট আয়</span> </a>
              </li>
              <li class="dt-side-nav__item">
                <a href="{{route('month')}}" class="dt-side-nav__link" title="এ মাসের মোট আয়"><i class="fas fa-money-bill-wave fa"></i>
                <span class="dt-side-nav__text">এ মাসের মোট আয়</span> </a>
              </li>
              <li class="dt-side-nav__item">
                <a href="{{route('year')}}" class="dt-side-nav__link" title="এ বছরের মোট আয়"><i class="fas fa-money-bill-wave fa"></i>
                <span class="dt-side-nav__text">এ বছরের মোট আয়</span> </a>
              </li>
              <li class="dt-side-nav__item">
                <a href="{{route('total')}}" class="dt-side-nav__link" title="সর্বমোট মোট আয়"><i class="fas fa-money-bill-wave fa"></i>
                <span class="dt-side-nav__text">সর্বমোট মোট আয়</span> </a>
              </li>
            </ul>
            <!-- /sub-menu -->
          </li>
          <!-- /menu item -->
          <!-- Menu Header -->
          <li class="dt-side-nav__item dt-side-nav__header">
            <span class="dt-side-nav__text">খরচ সমূহ </span>
          </li>
          <!-- /menu header -->
                           <!-- /menu item -->
          <li class="dt-side-nav__item">
            <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="খরচের   হিসাব ">
             <i class="fas fa-money-bill-wave fa"></i><span class="dt-side-nav__text">খরচের   হিসাব  </span> </a>
            <!-- Sub-menu -->
            <ul class="dt-side-nav__sub-menu">
              <li class="dt-side-nav__item">
                <a href="{{route('today1')}}" class="dt-side-nav__link" title="আজকের মোট খরচ"> <i class="fas fa-money-bill-wave fa"></i>
                <span class="dt-side-nav__text">আজকের মোট খরচ</span> </a>
              </li>

              <li class="dt-side-nav__item">
                <a href="{{route('week1')}}" class="dt-side-nav__link" title="এ সপ্তায়ে মোট খরচ"><i class="fas fa-money-bill-wave fa"></i>
                <span class="dt-side-nav__text">এ সপ্তায়ে মোট খরচ</span> </a>
              </li>
              <li class="dt-side-nav__item">
                <a href="{{route('month1')}}" class="dt-side-nav__link" title="এ মাসের মোট খরচ"><i class="fas fa-money-bill-wave fa"></i>
                <span class="dt-side-nav__text">এ মাসের মোট খরচ</span> </a>
              </li>
              <li class="dt-side-nav__item">
                <a href="{{route('year1')}}" class="dt-side-nav__link" title="এ বছরের মোট খরচ"><i class="fas fa-money-bill-wave fa"></i>
                <span class="dt-side-nav__text">এ বছরের মোট খরচ</span> </a>
              </li>
              <li class="dt-side-nav__item">
                <a href="{{route('total1')}}" class="dt-side-nav__link" title="সর্বমোট মোট খরচ"><i class="fas fa-money-bill-wave fa"></i>
                <span class="dt-side-nav__text">সর্বমোট  খরচ</span> </a>
              </li>
              <li class="dt-side-nav__item">
                <a href="{{route('today-all')}}" class="dt-side-nav__link" title="আজকের মোট খরচ তালিকা"> <i class="fas fa-money-bill-wave fa"></i>
                <span class="dt-side-nav__text">আজকের মোট খরচ তালিকা</span> </a>
              </li>
              <li class="dt-side-nav__item">
                <a href="{{route('week-all')}}" class="dt-side-nav__link" title="এ সপ্তায়ে মোট খরচের  তালিকা"><i class="fas fa-money-bill-wave fa"></i>
                <span class="dt-side-nav__text">এ সপ্তায়ে মোট খরচের  তালিকা</span> </a>
              </li>
              <li class="dt-side-nav__item">
                <a href="{{route('month-all')}}" class="dt-side-nav__link" title="এ মাসের মোট খরচের  তালিকা"><i class="fas fa-money-bill-wave fa"></i>
                <span class="dt-side-nav__text">এ মাসের মোট খরচের  তালিকা</span> </a>
              </li>
              <li class="dt-side-nav__item">
                <a href="{{route('year-all')}}" class="dt-side-nav__link" title="এ বছরের মোট খরচের  তালিকা"><i class="fas fa-money-bill-wave fa"></i>
                <span class="dt-side-nav__text">এ বছরের মোট খরচের  তালিকা</span> </a>
              </li>
              <li class="dt-side-nav__item">
                <a href="{{route('total-all')}}" class="dt-side-nav__link" title="সর্বমোট খরচের  তালিকা"><i class="fas fa-money-bill-wave fa"></i>
                <span class="dt-side-nav__text">সর্বমোট খরচের  তালিকা</span> </a>
              </li>
            </ul>
            <!-- /sub-menu -->
          </li>
          <!-- Menu item -->

  <!-- ******** Profit side menu Start ******** -->
          <!-- Menu Header -->
          <li class="dt-side-nav__item dt-side-nav__header">
            <span class="dt-side-nav__text">লাভ সমূহ </span>
          </li>
          <!-- /menu header -->
          <!-- /menu item -->
          <li class="dt-side-nav__item">
            <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="লাভের  হিসাব ">
             <i class="fas fa-money-bill-wave fa"></i><span class="dt-side-nav__text">লাভের  হিসাব </span> </a>
            <!-- Sub-menu -->
            <ul class="dt-side-nav__sub-menu">
              <li class="dt-side-nav__item">
                <a href="{{route('todayprofit')}}" class="dt-side-nav__link" title="আজকের মোট লাভ"> <i class="fas fa-money-bill-wave fa"></i>
                <span class="dt-side-nav__text"> মোট লাভ তালিকা</span> </a>
              </li>
            </ul>
            <!-- /sub-menu -->
          </li>
          <!-- Menu item -->
  <!-- ******** Profit side menu end ******** -->

          <!-- <li class="dt-side-nav__item">
            <a href="{{route('counter-details.create')}}" class="dt-side-nav__link" title="কাউন্টার ইনফরমেশন"><i class="fas fa-home"></i>&nbsp;কাউন্টার ইনফরমেশন</a>
          </li> -->
          <li class="dt-side-nav__item">
            <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="কাউন্টার ইনফরমেশন">
             <i class="fas fa-home"></i><span class="dt-side-nav__text">কাউন্টার ইনফরমেশন  </span> </a>
             <ul class="dt-side-nav__sub-menu">
                <li class="dt-side-nav__item">
                  <a href="{{route('today2')}}" class="dt-side-nav__link" title="আজকের কাউন্টার ইনফরমেশন"> <i class="fas fa-money-bill-wave fa"></i>
                  <span class="dt-side-nav__text">আজকের কাউন্টার ইনফরমেশন</span> </a>
                </li>
                <li class="dt-side-nav__item">
                  <a href="{{route('week2')}}" class="dt-side-nav__link" title="এ সপ্তায়ে কাউন্টার ইনফরমেশন"><i class="fas fa-money-bill-wave fa"></i>
                  <span class="dt-side-nav__text">এ সপ্তায়ে কাউন্টার ইনফরমেশন</span> </a>
                </li>
                <li class="dt-side-nav__item">
                  <a href="{{route('month2')}}" class="dt-side-nav__link" title="এ মাসের কাউন্টার ইনফরমেশন"><i class="fas fa-money-bill-wave fa"></i>
                  <span class="dt-side-nav__text">এ মাসের কাউন্টার ইনফরমেশন</span> </a>
                </li>
                <li class="dt-side-nav__item">
                  <a href="{{route('year2')}}" class="dt-side-nav__link" title="এই বছরের কাউন্টার ইনফরমেশন"><i class="fas fa-money-bill-wave fa"></i>
                  <span class="dt-side-nav__text">এই বছরের কাউন্টার ইনফরমেশন</span> </a>
                </li>
                 <li class="dt-side-nav__item">
                  <a href="{{route('total2')}}" class="dt-side-nav__link" title="সর্বমোট  কাউন্টার ইনফরমেশন"><i class="fas fa-money-bill-wave fa"></i>
                  <span class="dt-side-nav__text">সর্বমোট  কাউন্টার ইনফরমেশন</span> </a>
                </li>
             </ul>
          </li>   

      <!-- allbus income sidebar start-->
          <li class="dt-side-nav__item">
            <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="প্রতিটি গাডির আয় হিসাব">
             <i class="fas fa-bus"></i><span class="dt-side-nav__text">প্রতিটি গাডির আয় হিসাব </span> </a>
             <ul class="dt-side-nav__sub-menu">
                <li class="dt-side-nav__item">
                  <a href="{{route('eachbusincome.index')}}" class="dt-side-nav__link" title="প্রতিটি গাডির আয় যোগ করুন"> <i class="fas fa-money-bill-wave fa"></i>
                  <span class="dt-side-nav__text">প্রতিটি গাডির আয় যোগ করুন </span> </a>
                </li>
                <li class="dt-side-nav__item">
                  <a href="{{route('eachbusincome.create')}}" class="dt-side-nav__link" title="আজকের প্রতিটি গাডির আয়"> <i class="fas fa-money-bill-wave fa"></i>
                  <span class="dt-side-nav__text">আজকের প্রতিটি গাডির আয়</span> </a>
                </li>
                <li class="dt-side-nav__item">
                  <a href="{{route('weekeach')}}" class="dt-side-nav__link" title="এ সপ্তায়ে প্রতিটি গাডির আয়"><i class="fas fa-money-bill-wave fa"></i>
                  <span class="dt-side-nav__text">এ সপ্তায়ে প্রতিটি গাডির আয়</span> </a>
                </li>
                <li class="dt-side-nav__item">
                  <a href="{{route('montheach')}}" class="dt-side-nav__link" title="এ মাসের প্রতিটি গাডির আয়"><i class="fas fa-money-bill-wave fa"></i>
                  <span class="dt-side-nav__text">এ মাসের প্রতিটি গাডির আয়</span> </a>
                </li>
                <li class="dt-side-nav__item">
                  <a href="{{route('yeareach')}}" class="dt-side-nav__link" title="এ বছরের প্রতিটি গাডির আয়"><i class="fas fa-money-bill-wave fa"></i>
                  <span class="dt-side-nav__text">এ বছরের প্রতিটি গাডির আয়</span> </a>
                </li>
                <li class="dt-side-nav__item">
                  <a href="{{route('totaleach')}}" class="dt-side-nav__link" title="সর্বমোট প্রতিটি গাডির আয়"><i class="fas fa-money-bill-wave fa"></i>
                  <span class="dt-side-nav__text">সর্বমোট প্রতিটি গাডির আয়</span> </a>
                </li>
             </ul>
          </li>
      <!-- allbus income sidebar end -->

      <!-- owner message send start -->
        <li class="dt-side-nav__item">
            <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title=" মালিক এর কাছে  তার দৈনিক  হিসাব পাঠান ">
             <i class="fas fa-user"></i><span class="dt-side-nav__text"> মালিক এর কাছে  তার দৈনিক  হিসাব পাঠান  </span> </a>
             <ul class="dt-side-nav__sub-menu">
                <li class="dt-side-nav__item">
                  <a href="{{route('sms.sendsms')}}" class="dt-side-nav__link" title="এস.এম.এস এর জন্য মালিক এর ইনফরমেশন দিন"> <i class="fas fa-envelope-open"></i></i>
                  <span class="dt-side-nav__text">এস.এম.এস এর জন্য মালিক এর ইনফরমেশন দিন </span> </a>
                </li>
             </ul>
          </li>
      <!-- owner message send end -->
      <!--  message send start -->
        <li class="dt-side-nav__item">
          <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title=" বার্তা বা মেসেজ পাঠান ">
            <i class="fas fa-envelope-open"></i><span class="dt-side-nav__text"> বার্তা বা মেসেজ পাঠান  </span> </a>
           <ul class="dt-side-nav__sub-menu">
              <li class="dt-side-nav__item">
              <a href="{{ route('ownermsg') }}" class="dt-side-nav__link" title="মালিকের কাছে মেসেজ পাঠান"> <i class="fas fa-paper-plane"></i></i>
                <span class="dt-side-nav__text">মালিকের কাছে মেসেজ পাঠান</span> </a>
              </li>
              <li class="dt-side-nav__item">
                <a href="{{route('drivermsg')}}" class="dt-side-nav__link" title="ড্রাইভারের কাছে মেসেজ পাঠান"> <i class="fas fa-paper-plane"></i></i>
                <span class="dt-side-nav__text">ড্রাইভারের কাছে মেসেজ পাঠান</span> </a>
              </li>
              <li class="dt-side-nav__item">
              <a href="{{ route('helpermsg') }}" class="dt-side-nav__link" title="হেল্পারের  কাছে  মেসেজ পাঠান"> <i class="fas fa-paper-plane"></i></i>
                <span class="dt-side-nav__text">হেল্পারের  কাছে  মেসেজ পাঠান</span> </a>
              </li>
              <li class="dt-side-nav__item">
                <a href="{{ route('countermanmsg') }}" class="dt-side-nav__link" title="কাউন্টার ম্যানের কাছে"> <i class="fas fa-paper-plane"></i></i>
                <span class="dt-side-nav__text">কাউন্টার ম্যানের কাছে  </span> </a>
              </li>
              
           </ul>
        </li>
    <!--  message send end -->
    <!-- report -->
   <!-- Menu Header -->
   <li class="dt-side-nav__item dt-side-nav__header">
    <span class="dt-side-nav__text">রিপোর্ট সমূহ </span>
  </li>
  <!-- /menu header -->
  <!-- /menu item -->
  <li class="dt-side-nav__item">
    <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="ড্রাইভারের  বেতন">
     <i class="fas fa-money-bill-wave fa"></i><span class="dt-side-nav__text">ড্রাইভারের  বেতন </span> </a>
    <!-- Sub-menu -->
    <ul class="dt-side-nav__sub-menu">
      <li class="dt-side-nav__item">
        <a href="{{ route('daydriver') }}" class="dt-side-nav__link" title="আজকের  ড্রাইভারের  বেতন" target="_blanck"> <i class="fas fa-money-bill-wave fa"></i>
        <span class="dt-side-nav__text"> আজকের  ড্রাইভারের  বেতন  </span> </a>
      </li>
      <li class="dt-side-nav__item">
        <a href="{{ route('weekdriver') }}" class="dt-side-nav__link" title="এই সাপ্তাহের  ড্রাইভারের বেতন" target="_blanck"> <i class="fas fa-money-bill-wave fa"></i>
        <span class="dt-side-nav__text"> এই সাপ্তাহের  ড্রাইভারের বেতন  </span> </a>
      </li>
      <li class="dt-side-nav__item">
        <a href="{{ route('monthdriverreport') }}" class="dt-side-nav__link" title="এই মাসের  ড্রাইভারের বেতন" target="_blanck"> <i class="fas fa-money-bill-wave fa"></i>
        <span class="dt-side-nav__text"> এই মাসের  ড্রাইভারের বেতন  </span> </a>
      </li>
    </ul>
    <!-- /sub-menu -->
  </li>
  <li class="dt-side-nav__item">
      <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="হেল্পার   বেতন">
       <i class="fas fa-money-bill-wave fa"></i><span class="dt-side-nav__text">হেল্পার   বেতন </span> </a>
      <!-- Sub-menu -->
      <ul class="dt-side-nav__sub-menu">
        <li class="dt-side-nav__item">
          <a href="{{ route('dayhelper') }}" class="dt-side-nav__link" title="আজকের  হেল্পার   বেতন" target="_blanck"> <i class="fas fa-money-bill-wave fa"></i>
          <span class="dt-side-nav__text"> আজকের  হেল্পার   বেতন  </span> </a>
        </li>
        <li class="dt-side-nav__item">
          <a href="{{ route('weekhelper') }}" class="dt-side-nav__link" title="এই সাপ্তাহের  হেল্পার  বেতন" target="_blanck"> <i class="fas fa-money-bill-wave fa"></i>
          <span class="dt-side-nav__text"> এই সাপ্তাহের  হেল্পার  বেতন  </span> </a>
        </li>
        <li class="dt-side-nav__item">
          <a href="{{ route('monthhelper') }}" class="dt-side-nav__link" title="এই মাসের  হেল্পার  বেতন" target="_blanck"> <i class="fas fa-money-bill-wave fa"></i>
          <span class="dt-side-nav__text"> এই মাসের  হেল্পার  বেতন  </span> </a>
        </li>
      </ul>
      <!-- /sub-menu -->
    </li>
    <li class="dt-side-nav__item">
        <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="লাইনম্যান    বেতন">
         <i class="fas fa-money-bill-wave fa"></i><span class="dt-side-nav__text">লাইনম্যান    বেতন </span> </a>
        <!-- Sub-menu -->
        <ul class="dt-side-nav__sub-menu">
          <li class="dt-side-nav__item">
            <a href="{{ route('daylineman') }}" class="dt-side-nav__link" title="আজকের  লাইনম্যান    বেতন" target="_blanck"> <i class="fas fa-money-bill-wave fa"></i>
            <span class="dt-side-nav__text"> আজকের  লাইনম্যান    বেতন  </span> </a>
          </li>
          <li class="dt-side-nav__item">
            <a href="{{ route('weeklineman') }}" class="dt-side-nav__link" title="এই সাপ্তাহের  লাইনম্যান   বেতন" target="_blanck"> <i class="fas fa-money-bill-wave fa"></i>
            <span class="dt-side-nav__text"> এই সাপ্তাহের  লাইনম্যান   বেতন  </span> </a>
          </li>
          <li class="dt-side-nav__item">
            <a href="{{ route('monthlineman') }}" class="dt-side-nav__link" title="এই মাসের  লাইনম্যান   বেতন" target="_blanck"> <i class="fas fa-money-bill-wave fa"></i>
            <span class="dt-side-nav__text"> এই মাসের  লাইনম্যান   বেতন  </span> </a>
          </li>
        </ul>
        <!-- /sub-menu -->
      </li>   
      <li class="dt-side-nav__item">
          <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="কউন্টার  ম্যান    বেতন">
           <i class="fas fa-money-bill-wave fa"></i><span class="dt-side-nav__text">কউন্টার ম্যান    বেতন </span> </a>
          <!-- Sub-menu -->
          <ul class="dt-side-nav__sub-menu">
            <li class="dt-side-nav__item">
              <a href="{{ route('daycounterman') }}" class="dt-side-nav__link" title="আজকের  লাইনম্যান    বেতন" target="_blanck"> <i class="fas fa-money-bill-wave fa"></i>
              <span class="dt-side-nav__text"> আজকের  কউন্টারম্যান    বেতন  </span> </a>
            </li>
            <li class="dt-side-nav__item">
              <a href="{{ route('weekcounterman') }}" class="dt-side-nav__link" title="এই সাপ্তাহের  লাইনম্যান   বেতন" target="_blanck"> <i class="fas fa-money-bill-wave fa"></i>
              <span class="dt-side-nav__text"> এই সাপ্তাহের  কউন্টারম্যান   বেতন  </span> </a>
            </li>
            <li class="dt-side-nav__item">
              <a href="{{ route('monthcounterman') }}" class="dt-side-nav__link" title="এই মাসের  লাইনম্যান   বেতন" target="_blanck"> <i class="fas fa-money-bill-wave fa"></i>
              <span class="dt-side-nav__text"> এই মাসের কউন্টারম্যান   বেতন  </span> </a>
            </li>
          </ul>
          <!-- /sub-menu -->
        </li>
        <li class="dt-side-nav__item">
          <a href="{{ route('monthincomereport') }}" class="dt-side-nav__link" title="এই মাসের আয়ের রিপোর্ট " target="_blanck"> <i class="fas fa-money-bill-wave fa"></i>
          <span class="dt-side-nav__text">এই মাসের আয়ের রিপোর্ট</span> </a>
        </li>  
        <li class="dt-side-nav__item">
          <a href="{{ route('monthkhorochreport') }}" class="dt-side-nav__link" title="এই মাসের ব্যয়ের রিপোর্ট" target="_blanck"> <i class="fas fa-money-bill-wave fa"></i>
          <span class="dt-side-nav__text">এই মাসের ব্যয়ের রিপোর্ট</span> </a>
        </li>  
    <!-- report -->
          <!-- /menu item -->
          <li class="dt-side-nav__item" title="নতুন একাউন্ট  খুলুন">
             <a class="dt-side-nav__link" href="{{route('register')}}"><span class="dt-side-nav__text"><i class="fas fa-user-plus"></i>নতুন একাউন্ট  খুলুন</span></a>
          </li>
        <!-- /sidebar navigation -->
      </div>
    </aside>
