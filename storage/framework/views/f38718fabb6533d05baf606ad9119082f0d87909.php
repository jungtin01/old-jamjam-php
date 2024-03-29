<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
   <!-- Bootstrap 3 CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
    @yeild('morecss')
</head>
<body>
        <!-- Code goes here -->
        <header>
            <nav class="navbar navbar-default nav navbar-fixed-top" style="background:rgba(255,255,255,.9)">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="img/logo.png" alt="LOGO" width="160px"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#" id="btn-home">Home <span class="sr-only">(current)</span></a></li>
                            <li id='btn-conf'><a href="#">Confession</a></li>
                            <li><a href="#">Admin</a></li>
                            <li id="add_post"><a href="#">Quẩy</a></li>
                        </ul>
                        <form class="navbar-form navbar-left">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cơm gà ...." aria-describedby="basic-addon1">
                                <span class="input-group-addon" id="basic-addon1">
                                    <a href="javascript:void(0)" class="btn-sm" role='button'>Enter</a>
                                </span>
                            </div>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="javascript:void(0)"><img src="img/logo.png" alt="Logo" width="120px"></a>
                            </li>
                        </ul>
                    </div> <!-- end collapse nav -->
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav> <!-- end nav -->
        </header>
        
        <!-- jQuery first, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>
        !-- Custom JS -->
        <script src="js/script.js"></script>
        yeild('morejs')
</body>
</html>