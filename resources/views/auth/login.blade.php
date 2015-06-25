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
                <a href="index.php"><img class="navbar-brand" src="img/logo.png" style="padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;" /></a>
            </div>
        </div>
        <!-- /.container -->
    </nav>

    

    <!-- Page Content -->
    <div class="container">
	<div class="row">
	    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info panel-login" >
                    <div class="panel-heading panel-login-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="forgot.php" style="color: #FFFFFF;">Forgot password?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        
						
                            
                        <form id="loginform" class="form-horizontal" method="POST" action="/">
                         {!! csrf_field() !!}
			    
                            <div class="form-group text-center">
                                <img src="img/logo-admin.png"/>
                            </div>
								
								@if (count($errors) > 0)
									<div class="message">
										
										<ul style="text-align: left;">
											@foreach ($errors->all() as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif
                            
                            <div class="message"></div>
                                    
                            <div style="margin-bottom: 25px; margin-left: 20%; margin-right: 20%; width: 60%;" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email ID">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px; margin-left: 20%; margin-right: 20%; width: 60%;" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                    </div>
                                    

                                <div style="margin-top:10px" class="form-group text-center">
                                    <!-- Button -->
                                    <button type="submit" class="btn btn-success" style="width:30%;">Login</button>
                                    
                                </div>
    
                            </form>     



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


</body>

</html>
