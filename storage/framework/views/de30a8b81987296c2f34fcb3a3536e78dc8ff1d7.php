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
                            <form class="form-inline cate-form">
                                <div class="form-group">
                                    <label for="txtCatename" class="control-label">CateName:</label>
                                    <input type="text" class="form-control" id="txtCatename">
                                    <input type="submit" class="btn btn-success" value="Thêm">
                                </div>
                            </form>
                            <form class="form-inline cate-form" style="margin-top:1rem;">
                                <div class="form-group">
                                    <label for="txtCatename" class="control-label">CateId:</label>
                                    <input type="text" class="form-control" id="txtCateEdit" disabled="disabled">
                                    <input type="text" class="form-control" id="txtCatenameEdit">
                                    <input type="submit" class="btn btn-warning" value="Sửa">
                                </div>
                            </form>
                            <form class="form-inline cate-form">
                                <div class="form-group">
                                    <label for="txtCatename" class="control-label">CateId:</label>
                                    <input type="text" class="form-control" id="txtCateDelete" disabled="disabled">
                                    <input type="submit" class="btn btn-warning" value="Xóa">
                                </div>
                            </form>
                            <hr>
                            <h4>Cates</h4>
                            <nav class="navbar navbar-default">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav">
                                            <li class="active"><a href="#">Users<span class="sr-only">(current)</span></a></li>
                                            <li><a href="#">Posts</a></li>
                                            <li><a href="#" data-toggle='modal' data-target="#myModal">Cates</a></li>
                                            <li><a href="#">Confessions</a></li>
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