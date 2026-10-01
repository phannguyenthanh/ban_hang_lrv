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
            <li><a href="home"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">TRANG CHỦ</font></font></a>
            </li>
            <li><a href="typrofnews/all"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tin tức</font></font></a>
            </li>

            <li class="active"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$title}}</font></font></li>
        </ol>
    </div>
</section>

<!-- pager title -->
<section class="body-content ">

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!--classic image post-->

                    <div class="blog-classic">
                        <div class="blog-post">
                            <div class="full-width">
                                <img src="upload/news/{{$news_detail['imager']}}" alt="" />
                            </div>
                            <h4 class="text-uppercase"><a href="blog-single.html">{{$news_detail['name']}}</a></h4>
                            <ul class="post-meta">
                                <li><i class="fa fa-user"></i>posted by <a >{{$news_detail['created_at']}}</a>
                                </li>
                               
                            </ul>
                            <p><b>
                                {{$news_detail['brief']}}
                            </b></p>
                           <div>
                               {{$news_detail['content']}}


                           </div>


                        <div class="inline-block">

                            <div class="widget-tags">
                                <h6 class="text-uppercase">Tags </h6>
                                <a href="javascript:void(0)">Portfolio</a>
                                <a href="javascript:void(0)">Design</a>
                                <a href="javascript:void(0)">Link</a>
                                <a href="javascript:void(0)">Gallery</a>
                                <a href="javascript:void(0)">Video</a>
                                <a href="javascript:void(0)">Clean</a>
                                <a href="javascript:void(0)">Retina</a>
                            </div>
                        </div>


                        <div class="clearfix inline-block m-top-50 m-bot-50">
                            <h6 class="text-uppercase">Share this Post </h6>
                            <div class="widget-social-link circle">
                                <a href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-dribbble"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>


                        <!--comments  section end-->



                    </div>



                </div>


            </div>

            <div class="col-md-4">


                <div class="widget">
                    <div class="heading-title-alt text-left heading-border-bottom">
                        <h6 class="text-uppercase">Tin mới nhất</h6>
                    </div>
                    <ul class="widget-latest-post">


                        @foreach($latestpost as $value)
                        <li>
                            <div class="thumb">
                                <a href="news/detial/{{$value->id}}">
                                    <img src="upload/news/{{$value->imager}}" alt="" />
                                </a>
                            </div>
                            <div class="w-desk">
                                <a href="news/detial/{{$value->id}}">{{$value->name}}</a>
                                {{$value->created_at}}
                            </div>
                        </li>
                        @endforeach






                        
                    </ul>
                </div>
                <!--latest post widget-->

                <!--follow us widget-->

                <!--follow us widget-->

                <!--category widget-->
                <div class="widget">
                    <div class="heading-title-alt text-left heading-border-bottom">
                        <h6 class="text-uppercase">Loại tin</h6>
                    </div>
                    <ul class="widget-category">
                        <li><a href="typrofnews/all">Tất cả</a>
                         @if(isset($typeofnews))
                         @foreach($typeofnews as $value)

                         <li><a href="typrofnews/{{$value->id}}">{{$value->name}}</a>

                         </li>


                         @endforeach
                         @endif

                     </ul>
                 </div>
                 <!--category widget-->

                 <!--comments widget-->
                 <div class="widget">
                    <div class="heading-title-alt text-left heading-border-bottom">
                        <h6 class="text-uppercase">Tin nổi bật</h6>
                    </div>
                    <ul class="widget-comments">

                        @if(isset($news_host))
                        @foreach($news_host as $value)
                        <li><a href="news/detial/{{$value->id}}">{{$value->name}}</a>
                        </li>
                        @endforeach
                        @endif

                    </ul>
                </div>
                <!--comments widget-->
                



                <div class="widget">
                    <div class="heading-title-alt text-left heading-border-bottom">
                        <h6 class="text-uppercase">follow us</h6>
                    </div>
                    <div class="widget-social-link circle">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
                <!--tags widget-->
                <div class="widget">
                    <div class="heading-title-alt text-left heading-border-bottom">
                        <h6 class="text-uppercase">tag cloud</h6>
                    </div>
                    <div class="widget-tags">
                        <a href="#">Portfolio</a>
                        <a href="#">Design</a>
                        <a href="#">Link</a>
                        <a href="#">Gallery</a>
                        <a href="#">Video</a>
                        <a href="#">Clean</a>
                        <a href="#">Retina</a>
                    </div>
                </div>

                <!--tags widget-->
            </div>

        </div>
    </div>
</div>
</div>


</section>
<!-- content -->




<!-- content -->

<!--body content end-->
@endsection