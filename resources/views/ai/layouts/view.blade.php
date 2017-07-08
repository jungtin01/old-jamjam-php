@extends('ui.master')
@section('morecss')
   <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/ai/view-ad.css') }}">
@endsection
@section('morejs')
    <!-- Carousel JS -->
        <script src="{{ asset('public/js/owl.carousel.min.js') }}"></script>
        <!-- Custom JS -->
        <script src="{{ asset('public/js/ui/post.js') }}"></script>   
@endsection
@section('content')
<div class="container-fluid" id="main-container" style="background:url({{ asset('public/upload/imgsUpload/') }}/{{session('tbn')}}) center center no-repeat;background-size: cover;">
            <div class="row">
                <div class="container-fluid" id="opa-container">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8" id="left-content">
                            <h1 class="title">{{ session('title') }}</h1>
                            <p class="author"><a href="#">{{ session('username') }}</a><span> | </span>{{ session('updated_at') }}<span class='hidden-md hidden-lg'> | Save to Facebook</span></p>
                            <p class="lead desc">{{ session('description') }}</p>
                            <hr>
                            {!! session('content') !!}
                        <hr class="hidden-md hidden-lg">    
                        <footer class="hidden-xs hidden-sm">
                            <div class="row">
                                <div class="container-fluid" id="footer">
                                    <p>This Website is created by Nguyen Trung Thinh</p>
                                </div>
                            </div>            
                        </footer>       
                        </div> <!-- end left-content -->
                    </div>  <!-- end row -->
                </div> <!-- end opa-container -->
            </div> <!-- end row -->
        </div> <!-- end main-container -->
@endsection