@extends('ui.master')
@section('morecss')
	<!-- Scrollbar CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/jquery.mCustomScrollbar.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/ui/index.css') }}">
@endsection
@section('morejs')
<!-- Index JS -->
    <script type="text/javascript" src="{{ asset('public/js/ui/index.js') }}"></script>
	<!-- Scrollbar JS -->
        <script src="{{ asset('public/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script>
            (function($){
                $(window).on("load",function(){
                    $("#right-content").mCustomScrollbar({
                        theme:"rounded-dark",setHeight:"100%"
                    });
                });
            })(jQuery);
        </script>
@endsection
@section('content')
<div class="container-fluid" id="content">
            <div class="row">
                <div class="col-md-8  pull-left" id='left-content'>
                    <div class="row">   <!-- row carousel -->
                        <div id="carousel-example" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example" data-slide-to="1"></li>
                                <li data-target="#carousel-example" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                @foreach($carous as $carou)
                                <div class="item">
                                    <a href="{{ route('post',$carou->id) }}"><img src="{{ asset('public/upload/imgsUpload') }}/{{ $carou->tbn }}" /></a>
                                    <div class="carousel-caption">
                                        <h3>{{ $carou->title }}</h3>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div><!-- end carousel -->
                    </div> <!-- end row carousel -->
                    @foreach($posts as $post)
                        <div class="row" id="row-content">
                            <div class="jumbotron row-jumbotron" style="background-image:url({{ asset('public/upload/imgsUpload/') }}/{{ $post->tbn }});margin-top:5rem">
                                    <div class="container container-jumbotron">
                                        <div class="glyphicon-jumbotron">
                                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                            <span class="view-number">0101</span>
                                            <span>|</span>
                                            <span class='glyphicon glyphicon-stats'></span>
                                            <span class='view-number'>Rank 1</span>
                                        </div>
                                        <h2 class="title">{{ $post->title }}</h2>
                                        <p class="desc">{{ $post->desc }}</p>
                                        <p>
                                            <a class="btn btn-success btn-lg" href="{{ route('post',$post->id) }}" role="button">Đọc</a>
                                            <small class='date'>{{ $post->updated_at }}</small> |
                                            <small><a href="javascript:void(0)"  class='author'>{{ $post->user->username }}</a></small> |
                                            <span class="jumbotron-icon">
                                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                                <span>0101</span>
                                                <span>|</span>
                                                <span class='glyphicon glyphicon-stats'></span>
                                                <span >Rank 1</span>
                                            </span>
                                        </p>
                                    </div>
                            </div>
                        </div> <!-- row-content -->
                    @endforeach

                    <div class="row" id="pagination">
                        <nav aria-label="Page navigation" class="text-center">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav> <!-- pagination -->
                    </div>
                </div> <!-- end left-content -->
                <div class="col-md-4" id='right-content'>
                    <h1 id="conf-title">Confession</h1>
                    @foreach($confs as $conf)
                    <p class="conf-content"><span class="conf-span"><a href="#">#{{$conf->id}}</a></span>{!! $conf->content !!}</p>
                    <hr>
                    @endforeach
                    <hr>
                    
                    <div class="row" id="pagination">
                        <nav aria-label="Page navigation" class="text-center">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav> <!-- pagination -->
                    </div><!--  end div pagination -->
                    
                </div><!-- end right-content -->
            </div>     
        </div> <!-- end content -->
@endsection