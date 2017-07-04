@extends('ui.master')
@section('morecss')
   <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/ui/add.css') }}">
    <script src="https://cdn.ckeditor.com/4.7.0/standard/ckeditor.js"></script>
@endsection
@section('content')
<!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Mật khẩu cấp 2 :</label>
                                    <input type="text" class="form-control" id="authpass">
                                </div>
                                <input type="submit" class="btn btn-success" value="Đăng">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Modal -->  
        <section class="container-fluid" id='wrapper'>
            <div class="col-sm-offset-2 col-sm-8" id="forms">
                <form>
                    <div class="form-group">
                        <label for="txtTitle">Title</label>
                        <input type="text" name="txtTitle" class="form-control">
                    </div>
                    <div class="form-group form-inline">
                        <label for="cate">Category</label>
                        <select class="form-control">
                            <option>Cate 1</option>
                            <option>Cate 2</option>
                            <option>Cate 3</option>
                        </select>
                    </div>
                    <div class="form-group form-inline">
                        <label for="tbn">Thumbnail</label>
                        <input type="file" name="tbn" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="txtDesc">Description</label>
                        <textarea name="txtDesc" rows="3" style="resize: none" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="txtContent">Content</label>
                        <textarea name="txtContent" rows="7" style="resize: none" class="form-control"></textarea>
                        <script type="text/javascript">CKEDITOR.replace('txtContent')</script>
                    </div>
                    <a class="btn btn-success" data-toggle="modal" data-target="#myModal">Đăng</a>
                </form>
            </div>
        </section>
@endsection