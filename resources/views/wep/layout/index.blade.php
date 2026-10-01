<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from massive.markup.themebucket.net/mp-index-decor.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2017 04:42:56 GMT -->
<head>

   @include('wep.layout.block.head_link')

</head>

<body>

    <!--  preloader start -->
    <div id="tb-preloader">
        <div class="tb-preloader-wave"></div>
    </div>
    <!-- preloader end -->


    <div class="wrapper">

        <!--header start-->
        @include('wep.layout.block.header')
        <!--header end-->
        @yield('content')
       

        <!--footer start -->
        @include('wep.layout.block.footer')
        <!--footer end-->
    </div>


    <!-- inject:js -->
  @include('wep.layout.block.footer_link')
    <!-- endinject -->
</body>


<!-- Mirrored from massive.markup.themebucket.net/mp-index-decor.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2017 04:45:04 GMT -->
</html>
