<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Semtofin Finance</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('/css/modern-business.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('font-awesome-4.1.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="height: 60px;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a href="admin.php"><img class="navbar-brand" src="img/logo.png" style="padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;" /></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
		     <li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			    {{ $user->name }}
			    <b class="caret"></b>
			</a>
			<ul class="dropdown-menu">
                            <li>
				<a href="logout">Logout</a>
			    </li>
			    <li>
				<a href="newpass.php">Change Password</a>
			    </li>
			</ul>
                     </li>
                </ul>
            </div>
            
        </div>
        <!-- /.container -->
    </nav>

    

    <!-- Page Content -->
    <div class="container">
	
	<!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Welcome
                    {{ $user->name }}
                </h2>
                <ol class="breadcrumb">
                    <li><a href="home">Home</a>
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
	
	<div class="row" style="padding-top:20px;">
	    <div class="col-sm-6 col-md-3">
		<div id="dataForm" class="thumbnail" style="cursor: pointer; cursor: hand; border-radius: 0px; background-color: #F44336;">
		  <img src="img/dataform.png" alt="" style="height: 70px;">
		  <div class="caption">
		    <h3 style="color: #FFF; ">Customer Data Form</h3>
		    <p style="color: #FFF;">Enter the Customer details and save the copy for further use.</p>
		  </div>
		</div>
	    </div>
	
	    <div class="col-sm-6 col-md-3">
		<div id="downloadData" class="thumbnail" style="cursor: pointer; cursor: hand; border-radius: 0px; background-color: #2196F3;">
		  <img src="img/downloaddata.png" alt="" style="height: 70px;">
		  <div class="caption">
		    <h3 style="color: #FFF; ">Download Data</h3>
		    <p style="color: #FFF;">Get the customer detail in the excle sheet with a date range.</p>
		  </div>
		</div>
	    </div>
	    
	    <div class="col-sm-6 col-md-3">
		<div id="searchData" class="thumbnail" style="cursor: pointer; cursor: hand; border-radius: 0px; background-color: #4CAF50;">
		  <img src="img/search.png" alt="" style="height: 70px;">
		  <div class="caption">
		    <h3 style="color: #FFF; ">Search For Customer</h3>
		    <p style="color: #FFF;">Search for a custmoer details based on customer name.</p>
		  </div>
		</div>
	    </div>
	</div>
	
        <hr>

        <!-- Footer -->
        <footer align="right">
            <div class="row">
                <div class="col-lg-12">
                    <p>Website designed by Darshan D</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script>
	$('#dataForm').click(function(){
		window.location = "application";
	});
	$('#downloadData').click(function(){
		window.location = "excle.php";
	});
	$('#searchData').click(function(){
		window.location = "search.php";
	});
    </script>

</body>

</html>
