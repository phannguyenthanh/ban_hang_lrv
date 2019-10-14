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
                <div class="heading-title-alt border-short-bottom text-center ">
                    <h4 class="text-uppercase">{{$title}}</h4>
                    <div class="half-txt">We are a team of multi-skilled and curious digital specialists who are always up for a challenge and learning as fast as digital is changing. We are a team of multi-skilled and curious digital specialists who are always up for a challenge.</div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portfolio portfolio-with-title col-3 gutter ">


                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="wep/assets/img/clients/c-11.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="portfolio-title">
                                        <h4><a href="#" title="Sisters coffee">Sisters coffee</a></h4>
                                        <p><a href="#">Sanfrncisco</a> , <a href="#">California</a> 
                                        </p>
                                    </div>
                                </div>

                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="wep/assets/img/clients/c-12.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="portfolio-title">
                                        <h4><a href="#" title="johnny’s">johnny’s</a></h4>
                                        <p><a href="#">Sanfrncisco</a> , <a href="#">California</a> 
                                        </p>
                                    </div>
                                </div>

                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="wep/assets/img/clients/c-13.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="portfolio-title">
                                        <h4><a href="#" title="johnny’s">vintage studio</a></h4>
                                        <p><a href="#">Sanfrncisco</a> , <a href="#">California</a> 
                                        </p>
                                    </div>
                                </div>

                                <div class="portfolio-item ">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="wep/assets/img/clients/c-14.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="portfolio-title">
                                        <h4><a href="#" title="american dream">american dream</a></h4>
                                        <p><a href="#">Sanfrncisco</a> , <a href="#">California</a> 
                                        </p>
                                    </div>
                                </div>

                                <div class="portfolio-item ">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="wep/assets/img/clients/c-15.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="portfolio-title">
                                        <h4><a href="#" title="mountain bike">mountain bike</a></h4>
                                        <p><a href="#">Sanfrncisco</a> , <a href="#">California</a> 
                                        </p>
                                    </div>
                                </div>

                                <div class="portfolio-item ">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="wep/assets/img/clients/c-16.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="portfolio-title">
                                        <h4><a href="#" title="the franks">the franks</a></h4>
                                        <p><a href="#">Sanfrncisco</a> , <a href="#">California</a> 
                                        </p>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fun-factor-parallax dark parallax-7">
                <div class=" p-tb-150">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 ">
                                <div class="fun-factor alt">
                                    <div class="icon ">
                                        <i class="icon-layers theme-color"></i>
                                    </div>
                                    <div class="fun-info">
                                        <h1 class="timer" data-from="0" data-to="36" data-speed="1000"> </h1>
                                        <span>HTML multipage</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="fun-factor alt">
                                    <div class="icon">
                                        <i class="icon-computer_imac_slim theme-color"></i>
                                    </div>
                                    <div class="fun-info">
                                        <h1 class="timer" data-from="0" data-to="29" data-speed="1000"> </h1>
                                        <span>One page demo</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="fun-factor alt">
                                    <div class="icon">
                                        <i class="icon-database theme-color"></i>
                                    </div>
                                    <div class="fun-info">
                                        <h1 class="timer" data-from="0" data-to="87" data-speed="1000"> </h1>
                                        <span>usefull shortcode</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="fun-factor alt">
                                    <div class="icon">
                                        <i class="icon-linegraph theme-color"></i>
                                    </div>
                                    <div class="fun-info">
                                        <h1 class="timer" data-from="0" data-to="20" data-speed="1000"> </h1>
                                        <span>Different Category</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="page-content">
                <div class="heading-title-alt border-short-bottom text-center ">
                    <h4 class="text-uppercase">some more clients </h4>
                    <div class="half-txt">We are a team of multi-skilled and curious digital specialists who are always up for a challenge and learning as fast as digital is changing. We are a team of multi-skilled and curious digital specialists who are always up for a challenge.</div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="clients angle-box grid-4 ">
                                <li>
                                    <a href="#">
                                        <img src="wep/assets/img/clients/c-1.png" alt="Clients">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="wep/assets/img/clients/c-2.png" alt="Clients">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="wep/assets/img/clients/c-3.png" alt="Clients">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="wep/assets/img/clients/c-4.png" alt="Clients">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="wep/assets/img/clients/c-5.png" alt="Clients">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="wep/assets/img/clients/c-6.png" alt="Clients">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="wep/assets/img/clients/c-7.png" alt="Clients">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="wep/assets/img/clients/c-8.png" alt="Clients">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </section>



<!-- content -->

<!--body content end-->
@endsection