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
            <li><a href="category.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sản phẩm</font></font></a>
            </li>
            <li class="active"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$title}}</font></font></li>
        </ol>
    </div>
</section>

<!-- pager title -->

<!-- content -->

<section class="body-content ">

    <div class="page-content product-grid">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <!--product option-->
                    <div class="clearfix m-bot-30 inline-block">

                        <div class="pull-left">
                                   <!--  <form method="post" action="#">
                                        <select class="form-control">
                                            <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mặc định phân loại</font></font></option>
                                            <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sắp xếp theo mức độ phổ biến</font></font></option>
                                            <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sắp xếp theo xếp hạng trung bình</font></font></option>
                                            <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sắp xếp theo tính mới</font></font></option>
                                            <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sắp xếp theo giá: thấp đến cao</font></font></option>
                                            <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sắp xếp theo giá: từ cao xuống thấp</font></font></option>
                                        </select>
                                    </form> -->
                                </div>

                                <div class="pull-left m-top-5 m-left-10"><font style="vertical-align: inherit; font-weight:600 "><font style="vertical-align: inherit;">
                                    -
                                    <?php if (isset($title)): ?>
                                        {{$title}}
                                    <?php else: ?>
                                        Tất cả
                                    <?php endif ?>
                                    
                                </font></font></div>

                                <div class="pull-right shop-view-mode">
                                    <a href="#"> <i class="fa fa-th-large"></i> 
                                    </a>
                                    <a href="#"> <i class="fa fa-th-list"></i> 
                                    </a>
                                </div>

                            </div>
                            <!--product option-->
                            <div class="row">

                              @if (isset($products_cate_1))

                              @foreach($products_cate_1 as $value)

                              <div class="col-md-4">
                                <!--product list-->
                                <div class="product-list">
                                    <div class="product-img">
                                        <a href="products/detail/{{$value->id}}">
                                            <img src="upload/product/{{$value->imager}}" style="height: 314px;" alt="">
                                        </a>


                                    </div>
                                    <div class="product-title">
                                        <h5><a href="products/detail/{{$value->id}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$value->name}}</font></font></a></h5>
                                    </div>
                                    <div class="product-price">
                                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{number_format($value->price)}}đ
                                        </font></font></div>
                                       <!--  <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div> -->
                                        <div class="product-btn">
                                            <a href="cart/{{$value->id}}" class="btn btn-extra-small btn-dark-border  "><i class="fa fa-shopping-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Thêm vào giỏ hàng</font></font></a>
                                        </div>
                                    </div>
                                    <!--product list-->
                                </div>
                                @endforeach
                                @endif




                                <div class="text-center col-md-12">
                                    {{$products_cate_1->links()}}
                                    <!--  --><!-- <ul class="pagination custom-pagination">
                                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trước đó</font></font></a>
                                        </li>
                                        <li class="active"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></a>
                                        </li>
                                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></a>
                                        </li>
                                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></a>
                                        </li>
                                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></a>
                                        </li>
                                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></a>
                                        </li>
                                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kế tiếp</font></font></a>
                                        </li>
                                    </ul> -->
                                </div>

                            </div>
                        </div>

                        <div class="col-md-3 ">
                            <!--product category-->
                            <div class="widget">
                                <div class="heading-title-alt text-left heading-border-bottom">
                                    <h6 class="text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">danh mục sản phẩm</font></font></h6>
                                </div>
                                <ul class="widget-category">

                                     <li>
                                            <a href="category.html">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">
                                                        Tất cả
                                                    </font>
                                                </font>
                                            </a>
                                        </li>

                                    <?php if (isset($category)): ?>
                                        <?php foreach ($category as $key => $value): ?>
                                          <li>
                                            <a href="category/{{$value->id}}">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">
                                                        {{$value->name}}
                                                    </font>
                                                </font>
                                            </a>
                                        </li>
                                    <?php endforeach ?>
                                <?php endif ?>

                                
                            </ul>
                        </div>
                        <!--product category-->

                        <!--price filter-->



<!-- lọc -->
                      <!--   <div class="widget">
                            <div class="heading-title-alt text-left heading-border-bottom">
                                <h6 class="text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">bộ lọc giá</font></font></h6>
                            </div>
                            <form method="post" action="#">

                                <div class="row">
                                    <div class="col-xs-12 form-group">
                                        <input type="text" name="price-from" id="price-from" class=" form-control" placeholder="From, $" maxlength="100">
                                    </div>

                                    <div class="col-xs-12 form-group">
                                        <input type="text" name="price-to" id="price-to" class=" form-control" placeholder="To, $" maxlength="100">
                                    </div>
                                    <div class=" col-xs-12 form-group">
                                        <button class="btn btn-small btn-dark-border  btn-transparent"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bộ lọc</font></font></button>
                                    </div>
                                </div>
                            </form>
                        </div> -->



                        <!--price filter-->


                        <!--latest product-->
                        <div class="widget">
                            <div class="heading-title-alt text-left heading-border-bottom">
                                <h6 class="text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">sản phẩm xem nhiều nhất</font></font></h6>
                            </div>
                            <ul class="widget-latest-post">


                                <?php if (isset($products_view_0_3)): ?>
                                    <?php foreach ($products_view_0_3 as $key => $value): ?>
                                        <li>
                                    <div class="thumb">
                                        <a href="products/detail/{{$value->id}}">
                                            <img src="upload/product/{{$value->imager}}" alt="">
                                        </a>
                                    </div>
                                    <div class="w-desk">
                                        <a href="products/detail/{{$value->id}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$value->name}}</font></font></a>
                                        <div class="price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{number_format($value->price)}}</font></font></div>
                                       <!--  <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div> -->
                                        <div class="product-cart">
                                            <a href="cart/{{$value->id}}"><i class="fa fa-shopping-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Thêm vào giỏ hàng</font></font></a>
                                        </div>
                                    </div>
                                </li>
                                    <?php endforeach ?>
                                <?php endif ?>

                                
                               


                            </ul>
                        </div>
                        <!--latest product-->


                        <!--top rated product-->
                        <div class="widget">
                            <div class="heading-title-alt text-left heading-border-bottom">
                                <h6 class="text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sản phẩm mới nhất</font></font></h6>
                            </div>
                            <ul class="widget-latest-post">




                              
                                <?php if (isset($products_new_0_3)): ?>
                                    <?php foreach ($products_new_0_3 as $key => $value): ?>
                                          <li>
                                    <div class="thumb">
                                        <a href="products/detail/{{$value->id}}">
                                            <img src="upload/product/{{$value->imager}}" alt="">
                                        </a>
                                    </div>
                                    <div class="w-desk">
                                        <a href="products/detail/{{$value->id}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$value->name}}</font></font></a>
                                        <div class="price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{number_format($value->price)}}</font></font></div>
                                       <!--  <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div> -->
                                        <div class="product-cart">
                                            <a href="cart/{{$value->id}}"><i class="fa fa-shopping-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Thêm vào giỏ hàng</font></font></a>
                                        </div>
                                    </div>
                                </li>
                                    <?php endforeach ?>
                                   
                                <?php endif ?>





                               
                            </ul>
                        </div>
                        <!--top rated product-->


                     
                    </div>

                </div>
            </div>
        </div>


    </section>

    <!-- content -->

    <!--body content end-->
    @endsection