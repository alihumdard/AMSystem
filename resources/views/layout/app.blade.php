<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- all scripts and cdns -->
    @include('layout.script')
</head>

<body class="layout-default">
    <div class="preloader"></div>

    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">
        <!-- header file of software -->
        @include('layout.header')

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content">
            
            <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
                <div class="mdk-drawer-layout__content page">
                    <div class="container-fluid page__container">
                        <!-- page content start -->
                            @yield('main')
                        <!-- page content end -->
                    </div>
                </div>
                <!-- side bar start  -->
                   @include('layout.sidebar')           
                <!-- side bar end  -->
            </div>
                <!-- // END drawer-layout -->

        </div>
        <!-- // END header-layout__content -->

    </div>
    <!-- // END header-layout -->
    
<!-- footer file  -->
    @include('layout.footer')