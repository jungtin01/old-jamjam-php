<!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                        <input type="hidden" name="img-asset" value="{{ asset('public/upload/imgsUpload/') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="edit">
                                <form>
                                    <div class="form-group">
                                        <label for="txtTitle">Title</label>
                                        <input type="text" name="txtTitle" class="form-control">
                                    </div>
                                    <div class="form-group form-inline">
                                        <label for="cate">Category</label>
                                        <select class="form-control" name="cate_id">
                                            @foreach($cates as $cate)
                                            <option value="{{ $cate->id }}" name="cate_id">{{ $cate->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group form-inline">
                                        <label for="tbn">Thumbnail</label>
                                        <img id="tbn" class="img-responsive">
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
                                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                </form>
                            </div> <!-- end edit -->
                            <div class="cate">
                                <h3>Category</h3>
                                <div class="alertContainer"></div>
                                <script type="text/javascript">
                                    var cateAddUrl = "{{ route('cate.store') }}";
                                </script>
                                <form class="form-inline cate-form">
                                    <div class="form-group">
                                        <label for="txtCatename" class="control-label">CateName:</label>
                                        <input type="text" class="form-control" id="txtCatename" name="txtCatename">
                                        <input type="submit" class="btn btn-success" value="Thêm" id="cate_add">
                                    </div>
                                </form>
                                <form class="form-inline cate-form" style="margin-top:1rem;">
                                    <div class="form-group">
                                        <label for="txtCatename" class="control-label">CateId:</label>
                                        <input type="text" class="form-control" id="txtCateId" disabled="disabled">
                                        <input type="text" class="form-control" id="txtCatenameEdit" required>
                                        <input type="submit" class="btn btn-warning" value="Sửa" id="cate_edit">
                                        <input type="submit" class="btn btn-danger" value="Xóa" id="cate_delete">
                                    </div>
                                </form>
                                <hr>
                                <h4>Cates</h4>
                                <nav class="navbar navbar-default">
                                    <div class="container-fluid">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            </button>
                                        </div>
                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                                            <ul class="nav navbar-nav cate-nav">
                                            @foreach($cates as $cate)
                                                <li><a href="#" data-id="{{ $cate->id }}" class="cate_a">{{ $cate->name }}</a></li>
                                            @endforeach
                                            </ul>
                                        </div> <!-- end collapse nav -->
                                        <!-- /.navbar-collapse -->
                                    </div>
                                    <!-- /.container-fluid -->
                                </nav> <!-- end nav -->
                            </div> <!-- end category -->
                        </div> <!-- end modal body -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="save">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Modal -->   