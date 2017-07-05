@extends('ui.master')
@section('morecss')
   <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/ui/add.css') }}">
    <script src="https://cdn.ckeditor.com/4.7.0/standard/ckeditor.js"></script>
@endsection
@section('morejs')
<!-- conf JS -->
    <script type="text/javascript" src="{{ asset('public/js/ui/conf.js') }}"></script>
@endsection
@section('content')
        <section class="container-fluid" id='wrapper'>
            <div class="col-sm-offset-2 col-sm-8" id="forms">
                <form>
                    <div class="form-group">
                        <label for="txtContent">Confession</label>
                        <div class="alertContainer"></div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <textarea name="txtContent" rows="7" style="resize: none" class="form-control"></textarea>
                        <script type="text/javascript">
                            config = {};
                            config.entities_latin = false;
                            config.language = 'vi';
                            CKEDITOR.replace( 'txtContent',config );
                            var urlConfAdd = "{{ route('conf.store') }}";
                            @if(Auth::check())
                                var user_id = "{{ Auth::id() }}";
                            @endif
                        </script>
                    </div>
                    <a class="btn btn-success conf-add">Đăng</a>
                </form>
            </div>
        </section>
@endsection