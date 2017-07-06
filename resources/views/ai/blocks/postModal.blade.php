<!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Recipient:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="control-label">Message:</label>
                                    <textarea class="form-control" id="message-text" style="resize:none"></textarea>
                                </div>
                            </form>
                            <form>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Recipient:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="control-label">Message:</label>
                                    <textarea class="form-control" id="message-text" style="resize:none"></textarea>
                                </div>
                            </form>
                            <hr>
                            <h3>Category</h3>
                            <div class="alertContainer"></div>
                            <script type="text/javascript">
                                var cateAddUrl = "{{ route('cate.store') }}";
                            </script>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Modal -->   