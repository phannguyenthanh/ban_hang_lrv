<?php 

use Illuminate\Support\Facades\Auth;

if (Auth::check()) {

    // var_dump(Auth::user());
    $user = Auth::user();
  
 }



 ?>

<header class="l-header">

    <div id="sticky-wrapper" class="l-navbar-wrapper" style="height: 100px;"><div class="l-navbar l-navbar_expand l-navbar_t-light js-navbar-sticky">
        <div class="container-fluid">
            <nav class="menuzord js-primary-navigation menuzord-responsive" role="navigation" aria-label="Primary Navigation"><a href="javascript:void(0)" class="showhide" style=""><em></em><em></em><em></em></a>

                <!--logo start-->
                <a href="index-2.html" class="logo-brand">
                    <img class="retina" src="upload/default/logo.png" alt="Massive">
                </a>
                <!--logo end-->

                <!--mega menu start-->
                <ul class="menuzord-menu menuzord-right c-nav_s-standard menuzord-indented scrollable" style="max-height: 400px;">
                   <li class=""><a href="introduce">GIƠI THIỆU</a>

                   </li>
                   <li class=""><a href="home">TRANG CHỦ</a>

                   </li>
                   @if(isset($menu))

                   @foreach($menu as $value)

                   <li class=""><a href="category.html">{{$value->name}}</a>

                       @if(count($value->category) > 0)



                       <ul class="dropdown" style="right: auto;">

                        @foreach($value->category as $list)

                        <li><a href="category/{{$list->id}}">{{$list->name}}<span class="indicator">+</span></a>

                        </li>

                        @endforeach

                    </ul>

                    @endif

                </li>

                @endforeach

                @endif



                <li class=""><a href="javascript:void(0)">TIN TỨC</a>
                 <ul class="dropdown" style="right: auto;">
                    @if(isset($typeofnews))
                    @foreach($typeofnews as $value)

                    <li><a href="typrofnews/{{$value->id}}">{{$value->name}}</a>

                    </li>


                    @endforeach
                    @endif
                </ul>
            </li>
             <li class="">
                <a href="support"> HỖ TRỢ</a>

            </li>



            <?php if (Auth::check()): ?>
                <li class="javascript:void(0)"><a href="">{{$user->name}}</a>
                 <ul class="dropdown" style="right: auto;">
                    
                    <li>
                        <a href="typrofnews/{{$list->id}}">
                            Thông tin
                        </a>

                    </li>
                    <li>
                        <a href="logout">
                            Đăng xuất
                        </a>

                    </li>
                </ul>
            </li>
        <?php else: ?>
            <li>
                <a href="login">Đăng nhập</a>
            </li>
            <?php endif ?>



            <li class="nav-divider" aria-hidden="true"><a href="javascript:void(0)">|</a>
            </li>

            <li class="cart-info">
                <a href="shopping"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a>

                </li>

                <li>
                    <a href="javascript:void(0)"><i class="fa fa-search"></i>Tìm kiếm</a>
                    <div class="megamenu megamenu-quarter-width navbar-search" style="right: 0px;">
                        <form role="searchform" action="seach" method="post" class="text-center" >
                             <input type="hidden" name="_token" value="{{csrf_token()}}"  >
                            <input type="text" class="form-control" name="seach" placeholder="Search Here">
                            <button class="btn btn-small btn-block btn-dark-solid" style="margin-top: 12px" >TÌM KIẾM</button>
                        </form>
                    </div>
                </li>
                <li class="scrollable-fix"></li></ul>
                <!--mega menu end-->

            </nav>
        </div>
    </div></div>

</header>

