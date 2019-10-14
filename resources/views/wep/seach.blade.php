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

<section class="body-content ">

    <div class="page-content product-grid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--product option-->
                    <div class="clearfix m-bot-30 inline-block">
                      

                        <div class="pull-left m-top-5 m-left-10">
                           Tìm thấy {{$seachpro->total()}} sản phẩm
                        </div>

                        <div class="pull-right shop-view-mode">
                            <a href="#"> <i class="fa fa-th-large"></i> 
                            </a>
                            <a href="#"> <i class="fa fa-th-list"></i> 
                            </a>
                        </div>
                    </div>
                    <!--product option-->
                    <div class="row">

                        <?php if ($seachpro->total() > 0): ?>
                            
                       
                      
                        @foreach($seachpro as $value)
                        <div class="col-md-3">
                         
                            <div class="product-list">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="upload/product/{{$value->imager}}" style="height: 300px" alt="" />
                                    </a>
                                    <a href="#">
                                        <img src="upload/product/{{$value->imager}}" alt="" />
                                    </a>
                                  
                                </div>
                                <div class="product-title">
                                    <h5><a href="products/detail/{{$value->id}}">{{$value->name}}</a></h5>
                                </div>
                                <div class="product-price">
                                     {{number_format($value->price)}} đ
                                </div>
                              
                                <div class="product-btn">
                                    <a href="cart/{{$value->id}}" class="btn btn-extra-small btn-dark-border  "><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                            
                        </div>

                        @endforeach
                    <?php else: ?>
                        <h3>KHÔNG TÌM THẤY </h3>


                     
                        <?php endif ?>
               





                        <div class="text-center col-md-12">
                            {{$seachpro->links()}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

<!-- content -->

<!--body content end-->
@endsection