@extends('wep.layout.index')
@section('content')

<!--hero section-->
@include('wep.layout.block.slider')

<!--hero section-->
@section('title')

@if(isset($title))
{{$title}}
@endif

@endsection


<!--body content start-->
<section class="body-content">
    <!--category-->
            <!-- <div class="page-content p-bot-0">
                <div class="container magazine-grid decor-category">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#" class="fit-img">
                                <img src="wep/assets/img/decor/cat1.jpg" alt="" />
                                <span class="title dark">outdoor<br/> lighting</span>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="fit-img">
                                <img src="wep/assets/img/decor/cat2.jpg" alt="" />
                                <span class="title light">wooden<br/> flooring</span>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="fit-img">
                                <img src="wep/assets/img/decor/cat3.jpg" alt="" />
                                <span class="title dark">living<br/> area</span>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="fit-img">
                                <img src="wep/assets/img/decor/cat4.jpg" alt="" />
                                <span class="title light">bathroom<br/> fittings</span>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="fit-img">
                                <img src="wep/assets/img/decor/cat5.jpg" alt="" />
                                <span class="title dark">tools &<br/> equipment</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--category-->


            <!--portfolio-->
            <div class="page-content">
                <div class="container">
                    <div class="row">

                        <!--title-->
                        <div class="heading-title border-short-bottom text-center">
                            <h3 class="text-uppercase">SẢN PHẨM NỔI BẬT</h3>
                            <div class="half-txt">thỏa sức lựa chọn những sản phẩm đặc sắc</div>
                        </div>
                        <!--title-->



                        <div class=" portfolio-with-title col-3 gutter portfolio-gallery">

                            @if(isset($products_view_0_6))

                            @foreach($products_view_0_6 as $value)

                            <div class="portfolio-item" style="" >
                                <div class="thumb">
                                    <img src="upload/product/{{$value->imager}}" style="height: 350px!important" alt="">
                                    <div class="portfolio-hover">
                                        <div class="action-btn">
                                            <a href="upload/product/{{$value->imager}}" class="popup-gallery" title="lightbox view"> <i class="icon-basic_magnifier"></i> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-title text-center">
                                    <h4><a href="products/detail/{{$value->id}}" title="lightbox view">{{$value->name}}</a></h4>
                                    <p><?=number_format($value->price)?> đ</p>
                                </div>
                            </div>

                            @endforeach

                            @endif

                        </div>

                    </div>

                </div>
            </div>
        </div>

 <hr/>

        <!-- tap produc -->





        <?php 

                // dd($menu->category);

        ?>

        <section class="body-content">

            <!--tabs-->

            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="heading-title border-short-bottom text-center">
                            <h3 class="text-uppercase">SẢN PHẨM MỚI NHẤT</h3>
                            <div class="half-txt"></div>
                        </div>
                        <div class="col-md-12">
                            <!--tabs square start-->
                            <section class="square-tabs text-center ">
                                <ul class="nav nav-pills">
                                    <?php 
                                    $category_tree = $category->where('menu_id','1');
                                    $category_tree_1 = $category_tree->shift();
                                    // $category_tree_all = $category->where('menu_id','1');
                                    ?>

                                    <li class="active">
                                        <a data-toggle="tab" href="#tab-{{$category_tree_1['id']}}">{{$category_tree_1['name']}}</a>
                                    </li>
                                    <?php foreach ($category_tree as $key => $value): ?>

                                        <li class="">
                                            <a data-toggle="tab" href="#tab-{{$value->id}}">{{$value['name']}}</a>
                                        </li>
                                    <?php endforeach ?>



                                </ul>
                                <div class="panel-body">
                                    <div class="tab-content">

                                        <?php 



                                            $products_Highlights_0_6_1 = $products->where('category_id',"1")->take(6);



                                         ?>

                                        <div id="tab-{{$category_tree_1['id']}}" class="tab-pane active">
        
                                            <div class=" portfolio-with-title col-3 gutter portfolio-gallery">
                                            
                                                @foreach($products_Highlights_0_6_1 as $value)
                                                <div class="portfolio-item" style="" >
                                                    <div class="thumb">
                                                        <img src="upload/product/{{$value->imager}}" style="height: 350px!important" alt="">
                                                        <div class="portfolio-hover">
                                                            <div class="action-btn">
                                                                <a href="upload/product/{{$value->imager}}" class="popup-gallery" title="lightbox view"> <i class="icon-basic_magnifier"></i> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="portfolio-title text-center">
                                                        <h4><a href="products/detail/{{$value->id}}" title="lightbox view">{{$value->name}}</a></h4>
                                                        <p><?=number_format($value->price)?> đ</p>
                                                    </div>
                                                </div>
                                                
                                                @endforeach
                                                

                                            </div>
                                        </div>


                                        @foreach($category_tree as $value)

                                        <?php 

                                            $products_Highlights_0_6 = $value->products->take(6);

                                            

                                         ?>

                                        <div id="tab-{{$value->id}}" class="tab-pane ">

                                            <div class=" portfolio-with-title col-3 gutter portfolio-gallery">
                                                

                                                @if(isset($products_Highlights_0_6))

                                                @foreach($products_Highlights_0_6 as $value)

                                                <?php 

                                                        // dd($value);
                                                 ?>

                                                <div class="portfolio-item" style="" >
                                                    <div class="thumb">
                                                        <img src="upload/product/{{$value->imager}}" style="height: 350px!important" alt="">
                                                        <div class="portfolio-hover">
                                                            <div class="action-btn">
                                                                <a href="upload/product/{{$value->imager}}" class="popup-gallery" title="lightbox view"> <i class="icon-basic_magnifier"></i> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="portfolio-title text-center">
                                                        <h4><a href="products/detail/{{$value->id}}" title="lightbox view">{{$value->name}}</a></h4>
                                                        <p><?=number_format($value->price)?> đ</p>
                                                    </div>
                                                </div>

                                                @endforeach

                                                @endif

                                            </div>
                                        </div>


                                        @endforeach






                                    </div>
                                </div>
                            </section>
                            <!--tabs square end-->
                        </div>
                    </div>
                </div>
            </div>
            <!--tabs-->

        </section>







 <hr/>



        <!-- tap produc -->






        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="heading-title border-short-bottom text-center">
                            <h3 class="text-uppercase">SẢN PHẨM GIÁ TRỊ</h3>
                            <div class="half-txt"></div>
                        </div>
                    <!--post style 6 start-->
                    @foreach($products_price_0_1 as $value)
                    <div class="post-list-aside">
                        <div class="post-single">
                            <div class="col-md-6">
                                <div class="post-img">
                                    <img src="upload/product/{{$value->imager}}" alt="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="post-desk text-center m-top-50">
                                    <span class="theme-color text-uppercase">{{$value->name}}</span>
                                    <h4 class="text-uppercase">
                                        <a href="#">{{$value->charac}}</a>
                                    </h4>

                                    <p class="p-top-30">
                                        {{$value->general}}
                                    </p>
                                    <div class="theme-color txt-xl">{{number_format($value->price)}} đ</div>

                                    <a href="cart/{{$value->id}}" class="btn btn-medium btn-dark-border m-top-30 m-r-0"> Buy now </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--post style 6 end-->
                </div>
            </div>
        </div>
        <!--blog-->
        <hr/>

<!-- new -->
            <section class="body-content" >
                
                <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="heading-title border-short-bottom text-center">
                            <h3 class="text-uppercase">TIN MỚI NHẤT</h3>
                            <div class="half-txt"></div>
                        </div>
                        <!--post style 1 start-->
                        <div class="post-grid">
                            <div class="col-md-4">
                                <div class="post-single">
                                    <div class="post-img bottom">
                                        <img src="upload/news/{{$products_news_0_1['imager']}}" alt="">
                                    </div>
                                    <div class="post-desk pad-left-less">
                                        <div class="mid-align">
                                            <div class="date">
                                                {{$products_news_0_1['created_at']}}
                                            </div>
                                            <h4 class="text-uppercase">
                                                <a href="news/detail/{{$products_news_0_1['id']}}">{{$products_news_0_1['name']}}</a>
                                            </h4>
                                            <ul class="post-cat">
                                                <li><a href="news/detail/{{$products_news_0_1['id']}}">{{$products_news_0_1['brief']}}</a>
                                                </li>
                                                <li>
                                                    <!-- <a href="#">standard</a> -->
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="post-single">
                                    <div class="post-desk">
                                        <div class="mid-align">
                                            <div class="date">
                                                {{$products_news_1_1['created_at']}}
                                            </div>
                                            <h4 class="text-uppercase">
                                                <a href="news/detail/{{$products_news_1_1['id']}}">{{$products_news_1_1['name']}}</a>
                                            </h4>
                                            <ul class="post-cat">
                                                <li><a href="news/detail/{{$products_news_1_1['id']}}">{{$products_news_1_1['brief']}}</a>
                                                </li>
                                                <li>
                                                    <!-- <a href="#">standard</a> -->
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="post-img top">
                                        <img src="upload/news/{{$products_news_1_1['imager']}}" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="post-single">
                                    <div class="post-img bottom">
                                        <img src="upload/news/{{$products_news_2_1['imager']}}" alt="">
                                    </div>
                                    <div class="post-desk ">
                                        <div class="mid-align">
                                            <div class="date">
                                                {{$products_news_2_1['created_at']}}
                                            </div>
                                            <h4 class="text-uppercase">
                                                <a href="news/detail/{{$products_news_2_1['id']}}">{{$products_news_2_1['name']}}</a>
                                            </h4>
                                            <ul class="post-cat">
                                                <li><a href="news/detail/{{$products_news_2_1['id']}}">{{$products_news_2_1['brief']}}</a>
                                                </li>
                                                <li>
                                                    <!-- <a href="#">standard</a> -->
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--post style 1 end-->
                    </div>

                </div>
            </div>

            </section>


        <!-- new     -->

        <hr/>
        <!--outlets-->
        <div class="page-content">
            <div class="container">
                <div class="row">

                    <!--title-->
                    <div class="heading-title border-short-bottom text-center">
                        <h3 class="text-uppercase">NHÂN VIÊN HỖ TRỢ</h3>
                        <div class="half-txt">Trả lời những thắc mắc của bạn</div>
                    </div>
                    <!--title-->


                    <div class="col-md-4">
                        <h4 class="text-uppercase">sydney</h4>
                        <address>
                            <p>
                                Upper Level, The Rocks, Sydney 2000 <br/>
                                Phone: +62 500 800 123<br/>
                                Email: <a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="f3879680879e929a9fb38a9c8681979c9e929a9ddd909c9e">[email&#160;protected]</a><br/>
                                <a href="#" class="theme-color text-uppercase"></a>
                            </p>
                        </address>
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-uppercase">canberra</h4>
                        <address>
                            <p>
                                Upper Level, The Rocks, Sydney 2000 <br/>
                                Phone: +62 500 800 123<br/>
                                Email: <a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="b1c5d4c2c5dcd0d8ddf1c8dec4c3d5dedcd0d8df9fd2dedc">[email&#160;protected]</a><br/>
                                <a href="#" class="theme-color text-uppercase"></a>
                            </p>
                        </address>
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-uppercase">darwin</h4>
                        <address>
                            <p>
                                Upper Level, The Rocks, Sydney 2000 <br/>
                                Phone: +62 500 800 123<br/>
                                Email: <a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="a4d0c1d7d0c9c5cdc8e4ddcbd1d6c0cbc9c5cdca8ac7cbc9">[email&#160;protected]</a><br/>
                                <a href="#" class="theme-color text-uppercase"></a>
                            </p>
                        </address>
                    </div>

                </div>
            </div>
        </div>
        <!--outlets-->

    </section>
    <!--body content end-->
    @endsection