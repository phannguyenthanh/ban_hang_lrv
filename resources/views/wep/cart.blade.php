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

    <div class="page-content">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table cart-table">
                            @if(count($errors) > 0)
                            <div class="alert alert-danger ">
                                @foreach($errors->all() as $value)
                                {{$value}}<br>
                                @endforeach
                            </div>
                        
                            @endif 
                            @if(session('thanhcong'))
                            <div class="alert alert-success ">
                                {{session('thanhcong')}}
                            </div>
                            @endif
                            @if(session('loi'))
                            <div class="alert alert-danger ">
                                {{session('loi')}}
                            </div>
                            @endif

                           
                            <thead>
                                <tr>
                                    <th>Ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Số lượng</th>

                                    <th>Giá</th>
                                    <th>Tổng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 

                                $total = 0;
                                ?>

                                <?php foreach ($contentt as $key => $value): ?>
                                    
                                    <tr>
                                        <td>
                                            <div class="cart-img">
                                                <a href="#">
                                                    <img src="upload/product/{{$value->options->img}}" alt="">
                                                </a>
                                            </div>
                                        </td>
                                        <td><a href="products/detail/{{$value->id}}">{{$value->name}}</a>
                                        </td>

                                        <td>
                                            <div class="cart-action">
                                             <form action="cart_cart/{{$value->rowId}}" method='POST'  >
                                                <input type="hidden" name="_token" value="{{csrf_token()}}" >

                                                <input type="number" class="form-control cart-quantity qty" name="demo011" value="{{$value->qty}}" />
                                                <button class="btn btn-default uploadqty"   id="{{$value->rowId}}" ><i class="fa fa-refresh"></i>
                                                </button>
                                            </form> 
                                            <a class="btn btn-default" href="remove/cartproduc/{{$value->rowId}}" type="submit"><i class="fa fa-trash-o"></i>
                                            </a>
                                        </div>
                                    </td>
                                    <td>{{number_format($value->price)}} đ
                                    </td>
                                    <td>{{number_format($value->price*$value->qty)}} đ</td>
                                </tr>
                                <?php 

                                $total += $value->price*$value->qty;
                                ?>


                            <?php endforeach ?>

<?php if ( $total == 0): ?>
                                        
                                        <?php echo 'Giỏi hàng trống' ?>

                                    <?php endif ?>
                        </tbody>
                    </table>
                </div>
                <!-- accordion 2 start-->
                <?php if ($total!=0): ?>
                   <form action="addcustomer" method="post" >
                    <input type="hidden" name="_token" value="{{csrf_token()}}" >
                    <dl class="accordion">

                        <dt>
                            <a href="#">Thông tin khách hàng& Taxes</a>
                        </dt>
                        <dd>

                            <p>Điền thông tin giao hàng</p>
                            <div class="form-group">
                                <label>Tên *</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>email*</label>
                                <input type="text" name='email' class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ *</label>
                                <input type="text" name="address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại*</label>
                                <input type="text" name="phone" class="form-control">
                            </div>


                            <!-- <button type="submit" class="btn btn-small btn-dark-solid"></button> -->

                        </dd>
                    </dl>
                    <!-- accordion 2 end-->

                    <ul class="portfolio-meta m-bot-30 pull-right">

                        <li><span><strong class="cart-total"> Tổng  tiền : </strong></span>  <strong class="cart-total">{{number_format($total)}} </strong>
                        </li>
                    </ul>

                    <div class="cart-btn-row inline-block">
                        <button  class="btn btn-medium btn-dark-solid pull-right "><i class="fa fa-shopping-cart"></i>  MUA HÀNG</button>
                        <!-- <a href="#" class="btn btn-medium btn-dark-solid btn-transparent  pull-right">   </a> -->
                    </div>
                </form> 
                <?php endif ?>
                

            </div>
        </div>
    </div>
</div>

</section>
<!-- pager title -->

<!-- content -->





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







                        <!-- content -->

                        <!--body content end-->
                        @endsection