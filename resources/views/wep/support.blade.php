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

  <!--page title start-->
        <section class="page-title background-title dark parallax-6">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-uppercase">{{$title}}</h3>
                        <ol class="breadcrumb box">
                            <li><a href="#">TRANG CHỦ</a>
                            </li>
                           
                            <li class="active">{{$title}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!--page title end-->

        <!--body content start-->
        <section class="body-content">
            <div class="page-content">

                <div class="container">
                    <div class="row">
                        <div class="col-md-8">

                            <h4 class="text-uppercase">bẠN CÓ NHỮNG THẮC MẮC GÌ?</h4>
                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus. Nam libero tempore</p>
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
                            <form  action="support" method="post">
                                <div class="row">
                                      <input type="hidden" name="_token" value="{{csrf_token()}}" >
                                    <div class="col-md-6 form-group">
                                        <!-- Name -->
                                        <input type="text" name="name" class="form-control" placeholder="Tên *" maxlength="100" >
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <!-- Email -->
                                        <input type="email" name="email" class="form-control" placeholder="Email *" maxlength="100" >
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <!-- Phone -->
                                        <input type="text" name="phone" class="form-control" placeholder="Số điện thoại" maxlength="100">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <!-- Subject -->
                                        <input type="text" name="address" class="form-control" placeholder="Địa chỉ" maxlength="100">
                                    </div>

                                    <!-- Comment -->
                                    <div class="form-group col-md-12">
                                        <textarea name="content" class="cmnt-text form-control" rows="6" placeholder="Comments" maxlength="400"></textarea>
                                    </div>

                                    <!-- Send Button -->
                                    <div class="form-group col-md-12">
                                        <button  class="btn btn-small btn-dark-solid ">GỬI</button>
                                    </div>

                                </div>
                                <input type="hidden" name="id" value="FORM_ALT">
                            </form>
                        </div>
                        <div class="col-md-4">
                            <div class=" m-bot-30 inline-block">
                               
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14896.509254825518!2d105.76031428282613!3d21.0275912759827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454bab9b67e93%3A0xbbe16aced529963f!2zTeG7uSDEkMOsbmgsIE5hbSBU4burIExpw6ptLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1522230049699" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>


                            </div>


                            <h4 class="text-uppercase">information</h4>
                            <p>Upper Level, Overseas Passenger Terminal, The Rocks, Sydney 2000</p>
                            <address>
                                <p>Telp: +62 500 800 123 </p>
                                <p>Fax: +62 500 800 112 </p>
                                <p>Email: <a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="4d39283e39202c24210d3422383f2922202c2423632e2220">[email&#160;protected]</a></p>
                            </address>
                        </div>
                    </div>
                </div>


            </div>

        </section>


<!-- content -->

<!--body content end-->
@endsection