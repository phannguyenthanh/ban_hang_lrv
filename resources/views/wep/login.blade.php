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
     <section class="page-title">
            <div class="container">
                <h4 class="text-uppercase">{{$title}}</h4>
                <ol class="breadcrumb">
                    <li><a href="#">TRANG CHỦ</a>
                    </li>
                    <li><a href="#">{{$title}}</a>
                    </li>
                   
                </ol>
            </div>
        </section>
<!-- pager title -->
   <section class="body-content ">
                        

                         
                           

            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                         
    @if(count($errors)>0)
                            
                                @foreach($errors->all() as $value)
                                  <div class="alert alert-danger" >  
                                        {{$value}}
                                     </div>
                                @endforeach 
                               
                            @endif 

                            <?php if (session('loi')): ?>
                                   <div class="alert alert-danger">  
                                        {{session('loi')}}
                                     </div>
                            <?php endif ?>
                            <section class="normal-tabs line-tab">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a data-toggle="tab" href="#tab-login">ĐĂNG NHẬP</a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" href="#tab-register">ĐĂNG KÍ</a>
                                    </li>

                                </ul>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div id="tab-login" class="tab-pane active">
                                            <div class="login register ">
                                                <div class=" btn-rounded">
                                                    <form  action="login" method="post">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}"  >
                                                        <div class="form-group">
                                                            <input type="text" name="email" class="form-control" placeholder="Email">
                                                        </div>

                                                        <div class="form-group">
                                                            <input type="password" name="password" class="form-control " placeholder="Mật khẩu">
                                                        </div>

                                                        <div class="form-group">
                                                            <button class="btn btn-small btn-dark-solid full-width" >ĐĂNG NHẬP
                                                            </button>
                                                        </div>

                                                        <div class="form-group">
                                                           
                                                        
                                                        </div>

                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                        <div id="tab-register" class="tab-pane">
                                            <form class=" login" action="register" method="post" enctype="multipart/form-data">
                                                  <input type="hidden" name="_token" value="{{csrf_token()}}"  >
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" placeholder="TÊN">
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="last_name" placeholder="HỌ">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" name="password" placeholder="MẬT KHẨU">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" name="pass"  placeholder="NHẬP LẠI MẬT KHẨU">
                                                </div>
                                                <div class="form-group">
                                                    <input type="date" class="form-control"  name="birthday" placeholder="NGÀY SINH">
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Giới tính</label>
                                                    <select name="sex" id="">
                                                        <option value="1">nam</option>
                                                        <option value="0">nữ</option>
                                                    </select>
                                                </div>
                                                

                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="address" placeholder="ĐỊA CHỈ">
                                                </div>
                                                 <div class="form-group">
                                                    <input type="text" class="form-control" name="phone" placeholder="SỐ ĐIỆN THOẠI">
                                                </div>
                                                <div class="form-group">
                                                    <input type='file' class="form-control" name="imager" placeholder="ẢNH">
                                                </div>

                                                <div class="form-group">
                                                    <button class="btn btn-small btn-dark-solid full-width " id="login-form-submit" name="login-form-submit" >Register
                                                    </button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </section>

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