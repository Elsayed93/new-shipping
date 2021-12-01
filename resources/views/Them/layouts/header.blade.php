<div id="header-top-wrap" class="is-clearfix">
    <div id="header-top" class="site-header-top">
        <div id="header-top-inner" class="site-header-top-inner container">
            <div class="level">
                <div class="level-left">
                    <ul class="topbar-info ">
                        <li>
                            <a href="#">
                                <span class="icon">
                                    <i class="icon-clock"></i>
                                </span> Mon - Fri : 09:00 - 17:00 </a>
                        </li>
                        <li>
                            <a href="mailto:info@company.com">
                                <span class="icon">
                                    <i class="icon-envelope"></i>
                                </span> {{ $settings->email }} </a>
                        </li>
                        <li>
                            <a href="tel:+66396847263">
                                <span class="icon">
                                    <i class="icon-phone"></i>
                                </span> {{ $settings->phone }} </a>
                        </li>
                    </ul>
                </div>
                <!-- .level-left -->
                <div class="level-right">
                    <ul class="header-menu-icons social">
                        <li>
                            <a href="{{ $settings->facebook_link }}" target="_blank">
                                <span class="icon">
                                    <i class="fab fa-facebook-f"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $settings->twitter_link }}" target="_blank">
                                <span class="icon">
                                    <i class="fab fa-twitter"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $settings->linkedin_link }}" target="_blank">
                                <span class="icon">
                                    <i class="fab fa-linkedin-in"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <!-- .header-menu-icons -->
                    <ul class="nav-menu-dropdown style-2 global-style on-click">
                        <li>
                            <a href="javascript:void(0);">
                                <span class="icon">
                                    <i class="icon-globe"></i>
                                </span>global</a>
                            <ul>
                                <li>
                                    <a href="javascript:void(0);">Africa</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">europe</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">America</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- .header-menu-icons -->
                    <ul class="nav-menu-dropdown style-2 on-click">
                        <li>
                            <a href="javascript:void(0);">
                                <span class="flag-icon flag-icon-gb"></span>En</a>
                            <ul>
                                <li>
                                    <a href="javascript:void(0);">
                                        <span class="flag-icon flag-icon-es"></span>Es</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <span class="flag-icon flag-icon-tr"></span>tr</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <span class="flag-icon flag-icon-eg"></span>ع</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- .header-menu-icons -->
                </div>
                <!-- .level-right -->
            </div>
            <!-- .level -->
        </div>
        <!-- #header-top-inner -->
    </div>
    <!-- #header-top -->
</div>
<!-- #header-top-wrap -->
<div id="header-wrap" class="is-clearfix">
    <header id="header" class="site-header">
        <div id="header-inner" class="site-header-inner container">
            <div class="level">
                <div class="level-left">
                    <div id="header-logo" class="site-logo ">
                        <div id="logo-inner" class="site-logo-inner">
                            <a href="./index.html">
                                <img alt="Joo - Niche Multi-Purpose HTML Template"
                                    src="{{ asset('assets/images/logo/logo2.png') }}">
                                <span
                                    class="logo-text">{{ App::getLocale() == 'ar' ? $settings->web_name_ar : $settings->web_name_en }}</span>
                            </a>
                        </div>
                        <!-- #logo-inner -->
                    </div>
                    <!-- #header-logo -->
                </div>
                <!-- .level-left -->
                <div class="level-right">
                    <div class="nav-wrap">
                        <nav class="main-navigation right">
                            <ul class="menu">
                                @foreach ($navSections as $navSection)
                                    <li
                                        class="mega-menu niche-templates {{ request()->segment(3) == $navSection->nav_section_link ? 'active' : '' }}">
                                        <a href="/{{ App::getLocale() }}/them/{{ $navSection->nav_section_link }}">
                                            {{ App::getLocale() == 'ar' ? $navSection->nav_section_name_ar : $navSection->nav_section_name_en }}
                                        </a>
                                    </li>
                                @endforeach
                        </nav>
                        <!-- #site-navigation -->
                    </div>
                    <!-- #nav-wrap -->
                    <ul class="header-menu-icons default ">
                        <li class="dropdown-search-form search-style-2">
                            <a href="javascript:void(0);">
                                <span class="icon">
                                    <i class="icon-magnifier"></i>
                                </span>
                            </a>
                            <ul>
                                <li class="header widget-form">
                                    <form>
                                        <div class="field">
                                            <div class="control is-expanded">
                                                <input class="input" type="text" placeholder="Search...">
                                                <button type="submit" class="button">
                                                    <span class="icon">
                                                        <i class="icon-magnifier"></i>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- .header-menu-icons -->
                    <a href="#quote" class="button is-white">get a quote</a>
                    <div class="modal search-form-overlay">
                        <div class="modal-background"></div>
                        <div class="modal-content">
                            <form class="widget-form">
                                <div class="field">
                                    <div class="control is-expanded">
                                        <input class="input" type="text" placeholder="Search...">
                                        <button type="submit" class="button">
                                            <span class="icon">
                                                <i class="icon-magnifier"></i>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <button class="modal-close is-large" aria-label="close"></button>
                    </div>
                    <!-- .modal.search-form-overlay -->
                </div>
                <!-- .level-right -->
            </div>
            <!-- .level -->
        </div>
        <!-- #header-inner -->
    </header>
    <!-- #header -->
</div>
<!-- #header-wrap -->
<div id="header-bottom-wrap" class="is-clearfix">
    <div id="header-bottom" class="site-header-bottom">
        <div id="header-bottom-inner" class="site-header-bottom-inner ">
            <section class="hero slider is-clearfix ">
                <h2 class="display-none">slider</h2>
                <div class="rev_slider_wrapper fullscreen-container ">
                    <div id="rev_slider_1" class="rev_slider tp-overflow-hidden fullscreenbanner" data-version="5.4.7"
                        style="display:none">
                        <a href="#welcome" class="slider-scroll-down">scroll down</a>
                        <ul>
                            <li data-transition="fade" data-thumb="{{ asset('assets/images/icons/1.png') }}"
                                data-title="warehousing" data-param1="Lorem ipsum dolor sit ultrices eleifend gravi."
                                data-param2="{{ asset('assets/images/icons/1.png') }}">
                                <img alt="Joo - Niche Multi-Purpose HTML Template" class="rev-slidebg"
                                    src="{{ asset('assets/images/slider/4.png') }}" data-bgposition="center center"
                                    data-bgfit="cover" data-bgrepeat="no-repeat" data-kenburns="off"
                                    data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100"
                                    data-scaleend="115" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0"
                                    data-offsetend="0 0" data-bgparallax="15">
                                <div class="tp-caption tp-resizeme small_text top" data-x="left"
                                    data-hoffset="['-105','-105','0','0']" data-y="center"
                                    data-voffset="['-152','-152','-152','-152']" data-width="none" data-height="none"
                                    data-whitespace="nowrap" data-type="text" data-responsive-offset="on"
                                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1600,"to":"o:1;","delay":800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"> logistics cargo </div>
                                <div class="tp-caption tp-resizeme large_text" data-x="left"
                                    data-hoffset="['-105','-105','0','0']" data-y="center"
                                    data-voffset="['-56','-56','-56','-56']" data-width="none" data-height="none"
                                    data-whitespace="nowrap" data-type="text" data-responsive-offset="on"
                                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1600,"to":"o:1;","delay":1200,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"> local pickup and delivery
                                    <br> services of any cargo.
                                </div>
                                <a class="tp-caption tp-resizeme button is-primary" href="#"
                                    data-frames='[{"delay":1600,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":800,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                    data-x="left" data-hoffset="['-102','-102','0','0']" data-y="center"
                                    data-voffset="['82','82','0','0']" data-type="button">
                                    <span>learn More</span>
                                    <span class="icon is-small">
                                        <i class="ion-ios-arrow-round-forward"></i>
                                    </span>
                                </a>
                            </li>
                            <!-- slide -->
                            <li data-transition="fade" data-thumb="{{ asset('assets/images/icons/2.png') }}"
                                data-title="air freight" data-param1="Lorem ipsum dolor sit ultrices eleifend gravi."
                                data-param2="{{ asset('assets/images/icons/2.png') }}">
                                <img alt="Joo - Niche Multi-Purpose HTML Template" class="rev-slidebg"
                                    src="{{ asset('assets/images/slider/3.png') }}" data-bgposition="center center"
                                    data-bgfit="cover" data-bgrepeat="no-repeat" data-kenburns="off"
                                    data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100"
                                    data-scaleend="115" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0"
                                    data-offsetend="0 0" data-bgparallax="15">
                                <div class="tp-caption tp-resizeme small_text top" data-x="left"
                                    data-hoffset="['-105','-105','0','0']" data-y="center"
                                    data-voffset="['-152','-152','-152','-152']" data-width="none" data-height="none"
                                    data-whitespace="nowrap" data-type="text" data-responsive-offset="on"
                                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1600,"to":"o:1;","delay":800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"> logistics cargo </div>
                                <div class="tp-caption tp-resizeme large_text" data-x="left"
                                    data-hoffset="['-105','-105','0','0']" data-y="center"
                                    data-voffset="['-56','-56','-56','-56']" data-width="none" data-height="none"
                                    data-whitespace="nowrap" data-type="text" data-responsive-offset="on"
                                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1600,"to":"o:1;","delay":1200,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"> local pickup and delivery
                                    <br> services of any cargo.
                                </div>
                                <a class="tp-caption tp-resizeme button is-primary" href="#"
                                    data-frames='[{"delay":1600,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":800,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                    data-x="left" data-hoffset="['-102','-102','0','0']" data-y="center"
                                    data-voffset="['82','82','0','0']" data-type="button">
                                    <span>learn More</span>
                                    <span class="icon is-small">
                                        <i class="ion-ios-arrow-round-forward"></i>
                                    </span>
                                </a>
                            </li>
                            <!-- slide -->
                            <li data-transition="fade" data-thumb="{{ asset('assets/images/icons/3.png') }}"
                                data-title="ocean freight" data-param1="Lorem ipsum dolor sit ultrices eleifend gravi."
                                data-param2="{{ asset('assets/images/icons/3.png') }}">
                                <img alt="Joo - Niche Multi-Purpose HTML Template" class="rev-slidebg"
                                    src="{{ asset('assets/images/slider/2.png') }}" data-bgposition="center center"
                                    data-bgfit="cover" data-bgrepeat="no-repeat" data-kenburns="off"
                                    data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100"
                                    data-scaleend="115" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0"
                                    data-offsetend="0 0" data-bgparallax="15">
                                <div class="tp-caption tp-resizeme small_text top" data-x="left"
                                    data-hoffset="['-105','-105','0','0']" data-y="center"
                                    data-voffset="['-152','-152','-152','-152']" data-width="none" data-height="none"
                                    data-whitespace="nowrap" data-type="text" data-responsive-offset="on"
                                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1600,"to":"o:1;","delay":800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"> logistics cargo </div>
                                <div class="tp-caption tp-resizeme large_text" data-x="left"
                                    data-hoffset="['-105','-105','0','0']" data-y="center"
                                    data-voffset="['-56','-56','-56','-56']" data-width="none" data-height="none"
                                    data-whitespace="nowrap" data-type="text" data-responsive-offset="on"
                                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1600,"to":"o:1;","delay":1200,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"> local pickup and delivery
                                    <br> services of any cargo.
                                </div>
                                <a class="tp-caption tp-resizeme button is-primary" href="#"
                                    data-frames='[{"delay":1600,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":800,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                    data-x="left" data-hoffset="['-102','-102','0','0']" data-y="center"
                                    data-voffset="['82','82','0','0']" data-type="button">
                                    <span>learn More</span>
                                    <span class="icon is-small">
                                        <i class="ion-ios-arrow-round-forward"></i>
                                    </span>
                                </a>
                            </li>
                            <!-- slide -->
                            <li data-transition="fade" data-thumb="{{ asset('assets/images/icons/4.png') }}"
                                data-title="land transport" data-param1="Lorem ipsum dolor sit ultrices eleifend gravi."
                                data-param2="{{ asset('assets/images/icons/4.png') }}">
                                <img alt="Joo - Niche Multi-Purpose HTML Template" class="rev-slidebg"
                                    src="{{ asset('assets/images/slider/1.png') }}" data-bgposition="center center"
                                    data-bgfit="cover" data-bgrepeat="no-repeat" data-kenburns="off"
                                    data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100"
                                    data-scaleend="115" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0"
                                    data-offsetend="0 0" data-bgparallax="15">
                                <div class="tp-caption tp-resizeme small_text top" data-x="left"
                                    data-hoffset="['-105','-105','0','0']" data-y="center"
                                    data-voffset="['-152','-152','-152','-152']" data-width="none" data-height="none"
                                    data-whitespace="nowrap" data-type="text" data-responsive-offset="on"
                                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1600,"to":"o:1;","delay":800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"> logistics cargo </div>
                                <div class="tp-caption tp-resizeme large_text" data-x="left"
                                    data-hoffset="['-105','-105','0','0']" data-y="center"
                                    data-voffset="['-56','-56','-56','-56']" data-width="none" data-height="none"
                                    data-whitespace="nowrap" data-type="text" data-responsive-offset="on"
                                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1600,"to":"o:1;","delay":1200,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"> local pickup and delivery
                                    <br> services of any cargo.
                                </div>
                                <a class="tp-caption tp-resizeme button is-primary" href="#"
                                    data-frames='[{"delay":1600,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":800,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                    data-x="left" data-hoffset="['-102','-102','0','0']" data-y="center"
                                    data-voffset="['82','82','0','0']" data-type="button">
                                    <span>learn More</span>
                                    <span class="icon is-small">
                                        <i class="ion-ios-arrow-round-forward"></i>
                                    </span>
                                </a>
                            </li>
                            <!-- slide -->
                        </ul>
                    </div>
                    <!-- .rev_slider -->
                </div>
                <!-- .rev_slider_wrapper -->
            </section>
            <!-- .slider -->
        </div>
        <!-- #header-bottom-inner -->
    </div>
    <!-- #header-bottom -->
</div>
<!-- #header-bottom-wrap -->
