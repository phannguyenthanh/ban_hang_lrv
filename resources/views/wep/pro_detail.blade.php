    @extends('wep.layout.index')
    @section('content')

    <!--hero section-->


    <!--hero section-->
    @section('title')

    @if(isset($title))
    {{$title}}
    @endif

    @endsection


    <!--body content start-->

    <!-- pager title -->

    <section class="page-title">
        <div class="container">
            <h4 class="text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$title}}</font></font></h4>
            <ol class="breadcrumb">
                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhà</font></font></a>
                </li>
                <li><a href="category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sản phẩm</font></font></a>
                </li>

                <li class="active"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$title}}</font></font></li>
            </ol>
        </div>
    </section>

    <!-- pager title -->

    <!-- content -->

<?php 

                                        // $contentt = (session('contentt'));
 ?>

    <section class="body-content ">

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="post-list-aside">
                            <div class="post-single">
                                <div class="post-slider-thumb post-img text-center">

                                    <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1000%; transition-duration: 0.6s; transform: translate3d(-856px, 0px, 0px);"><li data-thumb="upload/product/{{$product_once->imager}}" class="clone" aria-hidden="true" style="width: 428px; float: left; display: block;">
                                        <a href="javascript:;" title="Thành phần giao diện lớn">
                                            <img src="upload/product/{{$product_once->imager}}" alt="" draggable="false">
                                        </a>
                                    </li>
                                                <!-- <li data-thumb="assets/img/product/8.jpg" class="" style="width: 428px; float: left; display: block;">
                                                    <a href="javascript:;" title="Ảnh tươi">
                                                        <img src="assets/img/product/8.jpg" alt="" draggable="false">
                                                    </a>
                                                </li>
                                                <li data-thumb="assets/img/product/7.jpg" class="flex-active-slide" style="width: 428px; float: left; display: block;">
                                                    <a href="javascript:;" title="Awesome Lightbox">
                                                        <img src="assets/img/product/7.jpg" alt="" draggable="false">
                                                    </a>
                                                </li>
                                                <li data-thumb="assets/img/product/6.jpg" class="" style="width: 428px; float: left; display: block;">
                                                    <a href="javascript:;" title="Thành phần giao diện lớn">
                                                        <img src="assets/img/product/6.jpg" alt="" draggable="false">
                                                    </a>
                                                </li> -->
                                        <!--     <li data-thumb="assets/img/product/8.jpg" class="clone" aria-hidden="true" style="width: 428px; float: left; display: block;">
                                                    <a href="javascript:;" title="Ảnh tươi">
                                                        <img src="{{$product_once->imager}}" alt="" draggable="false">
                                                    </a>
                                                </li> --></ul></div><!-- <ol class="flex-control-nav flex-control-thumbs"><li><img src="assets/img/product/8.jpg" class="" draggable="false"></li><li><img src="assets/img/product/7.jpg" draggable="false" class="flex-active"></li><li><img src="assets/img/product/6.jpg" draggable="false" class=""></li></ol> --><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trước</font></font></a></li><li class="flex-nav-next"><a class="flex-next" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kế tiếp</font></font></a></li></ul></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="product-title">
                                            <h2 class="text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$product_once->name}}</font></font></h2>
                                        </div>

                                        <div class="product-price txt-xl">
                                            <span class="border-tb p-tb-10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ number_format($product_once->price)}} đ </font></font><del><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></del></span>
                                        </div>

                                        <ul class="portfolio-meta m-bot-10 m-top-10">
                                            <li><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">tuổi</font></font></span>
                                                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{$product_once->old}}</font></font>
                                            </li>
                                            <li><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">cao</font></font></span>
                                                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{$product_once->height}}</font></font>

                                            </li>
                                            <li><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rộng</font></font></span>
                                                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{$product_once->width}}</font></font>

                                            </li>

                                            <li><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đặc điểm</font></font></span>
                                                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{$product_once->charac}}</font></font>

                                            </li>
                                        </ul>
                                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                          {{$product_once->general}}
                                      </font></font></p>

                                      <ul class="portfolio-meta m-bot-10 stock">
                                        <li><span><strong class="number-item"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$product_once->quantity}}</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Sản phẩm </font></font></span>  <span class="status"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">trong kho</font></font></span>
                                        </li>
                                    </ul>
                                    <div class="p-values">
                                   <!--  <ul class="portfolio-meta m-bot-10 ">
                                        <li>
                                            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Kích thước </font></font></span>
                                            <span>
                                                <select class="form-control">
                                                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">S</font></font></option>
                                                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">M</font></font></option>
                                                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">L</font></font></option>
                                                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">XL</font></font></option>
                                                </select>
                                            </span>
                                        </li>
                                    </ul> -->

                                    <form action="cart/{{$product_once->id}}" method="POST" >

                                        <input type="hidden" name="_token" value="{{csrf_token()}}" >
                                        <!-- <input type="hidden" name="id" value="{{$product_once->id}}" > -->
                                     <ul class="p-quantity m-bot-10 ">
                                    <li>
                                        <label>Quantity</label>
                                    </li>
                                    <li>
                                        <input id="demo0" type="text" value="0" name="demo0" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500"
                                        data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-default"
                                        data-bts-button-up-class="btn btn-default" />
                                    </li>

                                    </li>
                                </ul>
                            </div>

                            <div class="clearfix">
                                <button  type="submit" class="btn btn-medium btn-dark-solid  "><i class="fa fa-shopping-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Thêm vào giỏ hàng</font></font></button>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="row page-content">
                        <div class="col-md-12">
                            <!--tabs border start-->
                            <section class="normal-tabs">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a data-toggle="tab" href="#tab-one"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm thông tin</font></font></a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" href="#tab-two"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đặc điểm BÊN NGOÀI</font></font></a>
                                    </li>
                                        <!-- <li class="">
                                            <a data-toggle="tab" href="#tab-three"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đánh giá (2)</font></font></a>
                                        </li> -->

                                    </ul>
                                    <div class="panel-body">
                                        <div class="tab-content">
                                            <div id="tab-one" class="tab-pane active">
                                                <h4 class="text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mô tả Sản phẩm</font></font></h4>
                                                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                 {{$product_once->content}}
                                             </font></font>
                                         </div>
                                         <div id="tab-two" class="tab-pane">
                                            <table class="table table-striped table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td>Tuổi</td>
                                                        <td>{{$product_once->old}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cao</td>
                                                        <td>{{$product_once->height}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rông</td>
                                                        <td>{{$product_once->width}}</td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                        </div>

                                    </div>
                                </div>

                                <!--tabs border end-->
                            </div>
                        </div>







                        <!-- slide -->



                        <div class="row">
                             <div class="col-md-12">

                            <div class="heading-title-alt text-left ">
                                <h3 class="text-uppercase">SẢN PHẨM LIÊN QUAN </h3>
                                <span class="text-uppercase">We have 14 similar product currently in stock</span>
                            </div>

                            <!--portfolio carousel-->

                            <div id="portfolio-carousel" class=" portfolio-with-title col-3 ">

                                <?php foreach ($products_cate_0_6 as $key => $value): ?>
                                    <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="upload/product/{{$value->imager}}" style="height: 242px;" alt="">
                                        <div class="portfolio-hover">
                                            <div class="action-btn">
                                                <a href="upload/product/{{$value->imager}}" class="popup-link" title="lightbox view"> <i class="icon-basic_magnifier"></i> 
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-title">
                                        <h4><a href="products/detail/{{$value->id}}"  title="lightbox view">{{$value->name}}</a></h4>
                                        <p class="txt-xl">{{number_format($value->price)}}đ</p>
                                    </div>
                                </div>
                                <?php endforeach ?>


                                

                                




                            </div>

                            <!--portfolio carousel-->

                        </div>
                       </div>



                   </div>




               </div>



               <!-- slide -->












               <!--subscribe end-->
           </div>
       </div>
   </section>



   <!-- content -->

   <!--body content end-->
   @endsection