@extends('ui.master')
@section('morecss')
	<!-- Carousel -->
    <link rel="stylesheet" href="{{ asset('public/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/owl.theme.default.min.css') }}">
   <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/ui/post.css') }}">
@endsection
@section('morejs')
	<!-- Carousel JS -->
        <script src="{{ asset('public/js/owl.carousel.min.js') }}"></script>
        <!-- Custom JS -->
        <script src="{{ asset('public/js/ui/post.js') }}"></script>   
@endsection
@section('content')
<div class="container-fluid" id="main-container" style="background:url({{ asset('public/upload/imgsUpload') }}/{{ $post->tbn }} }) center center no-repeat;background-size: cover;">
            <div class="row">
                <div class="container-fluid" id="opa-container">
                    <div class="row">
                        <div class="col-md-8" id="left-content">
                            <h1 class="title">{{ $post->title }}</h1>
                            <p class="author"><a href="#">{{ $post->user->username }}</a><span> | </span>{{ $post->updated_at }}<span class='hidden-md hidden-lg'> | Save to Facebook</span></p>
                            <p class="lead desc">{{ $post->description }}</p>
                            <hr>
                            {!! $post->content !!}
                            
                            <hr>
                        
                        <div class="row">
                            <div class="owl-carousel owl-theme">
                                <div class="item"><img src="{{ asset('public/upload/img/girl1.jpg') }}" alt=""><h4>Cô gái đầu tiên có thai trong nhân loại gái đầu tiên có thai trong nhân loại</h4></div>
                                <div class="item"><img src="{{ asset('public/upload/img/girl2.jpg') }}" alt=""><h4>Cô gái đầu tiên có thai trong nhân loại gái đầu tiên có thai trong nhân loại</h4></div>
                                <div class="item"><img src="{{ asset('public/upload/img/girl3.jpg') }}" alt=""><h4>Cô gái đầu tiên có thai trong nhân loại gái đầu tiên có thai trong nhân loại</h4></div>
                                <div class="item"><img src="{{ asset('public/upload/img/girl3.jpg') }}" alt=""><h4>Cô gái đầu tiên có thai trong nhân loại gái đầu tiên có thai trong nhân loại</h4></div>
                                <div class="item"><img src="{{ asset('public/upload/img/girl1.jpg') }}" alt=""><h4>Cô gái đầu tiên có thai trong nhân loại gái đầu tiên có thai trong nhân loại</h4></div>
                            </div>
                        </div>  
                        <hr class="hidden-md hidden-lg">    
                        <footer class="hidden-xs hidden-sm">
                            <div class="row">
                                <div class="container-fluid" id="footer">
                                    <p>This Website is created by Nguyen Trung Thinh</p>
                                </div>
                            </div>            
                        </footer>       
                        </div> <!-- end left-content -->
                        <div class="col-md-4" id="right-content">
                            <header class='container' id="right-header">
                                    <p>lượt xem<span> | </span>like btn<span class="hidden-sm hidden-xs"> | Save to Facebook</span></p>
                            </header>
                            <hr class="hidden-sm hidden-xs">
                            <section id="right-comment">
                                <div class="form-group">
                                    <input type="text" class="form-control">
                                    <button class="btn btn-success btn-sm" type="submit">Comment</button>
                                </div>
                            </section>
                        </div>
                    </div>  <!-- end row -->
                </div> <!-- end opa-container -->
            </div> <!-- end row -->
@endsection