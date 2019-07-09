<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?=base_url('assets')?>/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url('assets')?>/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?=base_url('assets')?>/css/form-elements.css">
        <link rel="stylesheet" href="<?=base_url('assets')?>/css/login_css.css">

    </head>
    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <?php if (@$_SESSION['gagal'] != null) {?>
                  <div class="d-sm text-center mb-4 bg-gradient-danger">
                    <h1 class="h3 mb-0 text-white"><?=$_SESSION['gagal']?></h1>
                  </div><?php
                }
                ?>
                <div class="container">
                
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3 style="text-align: left;">Login</h3>
                                    <h3 style="text-align: left;">IT Service Catalogue</h3>
                        		</div>
                        		<div class="form-top-right">
                        			<img src="assets/img/bni.png">
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="<?=base_url('login/proses_login')?>" method="post" class="login-form">
			                    	<div class="form-group">
                                        <h4>Username:</h4>
			                    		<label class="sr-only" for="form-username">Username:</label>
			                        	<input type="text" name="username" placeholder="Username" class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
                                        <h4>Password:</h4>
			                        	<label class="sr-only" for="form-password">Password:</label>
			                        	<input type="password" name="password" placeholder="Password" class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn">Sign in</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
            


        <!-- Javascript -->
        <script src="<?=base_url('assets')?>/js/jquery-1.11.1.min.js"></script>
        <script src="<?=base_url('assets')?>/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?=base_url('assets')?>/js/jquery.backstretch.min.js"></script>
        <script src="<?=base_url('assets')?>/js/scripts.js"></script>
        
   
    </body>

</html>