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
        <h4 class="text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$titlepost}}</font></font></h4>
        <ol class="breadcrumb">
            <li><a href="home"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">TRANG CHỦ</font></font></a>
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

                    @if(isset($newsbytype))
                    @foreach($newsbytype as $value)
                    <div class="blog-classic">

                       <div class="date">
                         <?php 

                        echo date( 'd' , strtotime(date($value->created_at)));

                         ?>
                        <span>
                        
                        <?php 

                        echo date( 'M Y' , strtotime(date($value->created_at)));

                         ?>
                        

                        </span>
                    </div>
                    <div class="blog-post">
                        <div class="full-width">
                            <img src="upload/news/{{$value->imager}}" alt="" />
                        </div>
                        <h4 class="text-uppercase"><a href="news/detail/{{$value->id}}" href="blog-single.html">{{$value->name}}</a></h4>
                        <ul class="post-meta">
                            <!-- <li><i class="fa fa-user"></i>posted by <a href="#">admin</a> -->
                            
                            <li>
                                <i class="fa fa-comments"></i> <a >{{$value->created_at}}</a>
                            </li>
                        </ul>
                        <p>{{$value->brief}}</p>
                        <a href="news/detail/{{$value->id}}" class="btn btn-small btn-dark-solid  "> Chi Tiết</a>
                    </div>
                </div>
                @endforeach
                @endif



                <!--classic image post-->

                <!--classic gallery post-->

                <!--classic video post-->


                <!--pagination-->
                <div class="text-center">
                   {{$newsbytype->links()}}
                </div>
                <!--pagination-->

            </div>




            <div class="col-md-4">

                <!--search widget-->
               <!--  <div class="widget">
                    <form class="form-inline form" role="form">
                        <div class="search-row">
                            <button class="search-btn" type="submit" title="Search">
                                <i class="fa fa-search"></i>
                            </button>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                </div> -->
                <!--search widget-->

                <!--author widget-->
             <!--    <div class="widget">
                    <div class="heading-title-alt text-left heading-border-bottom">
                        <h6 class="text-uppercase">about author</h6>
                    </div>
                    <div class="full-width avatar">
                        <img src="assets/img/post/avatar.jpg" alt="" />
                    </div>
                    <p>Persuaded to return to the shoemaker's shop, young Edward struggled on till three years of his wretched apprenticeship had passed over.</p>

                    <span class="">- Nelson Leonard</span>
                </div> -->
                <!--author widget-->

                <!--latest post widget-->
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
                                <a href="news/detail/{{$value->id}}">{{$value->name}}</a>
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
                        <li><a href="news/detail/{{$value->id}}">{{$value->name}}</a>
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
                        <a href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
                        <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                        <a href="javascript:void(0)"><i class="fa fa-dribbble"></i></a>
                        <a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a>
                        <a href="javascript:void(0)"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
                <!--tags widget-->
                <div class="widget">
                    <div class="heading-title-alt text-left heading-border-bottom">
                        <h6 class="text-uppercase">tag cloud</h6>
                    </div>
                    <div class="widget-tags">
                        <a href="javascript:void(0)">Portfolio</a>
                        <a href="javascript:void(0)">Design</a>
                        <a href="javascript:void(0)">Link</a>
                        <a href="javascript:void(0)">Gallery</a>
                        <a href="javascript:void(0)">Video</a>
                        <a href="javascript:void(0)">Clean</a>
                        <a href="javascript:void(0)">Retina</a>
                    </div>
                </div>

                <!--tags widget-->

            </div>
        </div>
    </div>
</div>


</section>
<!-- content -->




<!-- content -->

<!--body content end-->
@endsection