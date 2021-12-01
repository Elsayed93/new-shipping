<!DOCTYPE html>
<html lang="en" class="no-js no-svg">

<head>
    @include('Them.layouts.head')
</head>

<body
    class="active-pageloader corporate logistics header-sticky hide-on-scroll header-menu-with-icons header-menu-border-bottom header-topbar topbar-background dark-color footer-widgets footer-background dark-color submenu-show-arrow-right menu-is-capitalized submenu-is-capitalized logo-text-is-capitalized page-index">
    <div class="pageloader is-active"></div>
    <div id="site-wrap" class="site">

        {{-- start of header --}}
        @include('Them.layouts.header')
        {{-- end of header --}}


        {{-- start of main content --}}
        @include('Them.layouts.main_content')
        {{-- end of main content --}}

        <!-- #footer-top-wrap -->
        @include('Them.layouts.footer')


    </div>
    <!-- #site-wrap -->
    @include('Them.layouts.footerJs')
</body>

</html>
