<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Admin | Pura Agung Jagat Karana Surabaya</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
       <style>
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fade-in {
  opacity:0;  /* make things invisible upon start */
  -webkit-animation:fadeIn ease-in 1;  /* call our keyframe named fadeIn, use animattion ease-in and repeat it only 1 time */
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;  /* this makes sure that after animation is done we remain at the last keyframe value (opacity: 1)*/
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:1s;
  -moz-animation-duration:1s;
  animation-duration:1s;
}

.fade-in.one {
  -webkit-animation-delay: 0.1s;
  -moz-animation-delay: 0.1s;
  animation-delay: 0.1s;
}
        
        </style>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	</head>
	<body style="background: black;">
<!--login modal-->
<div class="container">
    <div class="row fade-in one" style="margin-top: 15%;">
        <div class="col-sm-4">&nbsp</div>
        <div class="col-sm-4">
            <div class="panel-group">
            <div class="panel panel-primary">
                <div class="panel-heading">LOGIN WEBSITE ADMINISTRATOR</div>
                <div class="panel-body">
                <form role="form" method="post" action="<?php echo base_url() ?>database/login/dologin">
                <div class="form-group">
                    <div class="<?php echo $typepesan ?>">
                        <?php echo $pesanerror ?>
                    </div>
                    <label for="email">Username :</label>
                        <input type="text" class="form-control" id="usr" name="usr">
                </div>
                <div class="form-group">
                    <label for="pwd">Password :</label>
                        <input type="password" class="form-control" id="pwd" name="pwd">
                </div>
            <button type="submit" class="btn btn-default" value="login" name="login" >Login</button>
    </form>
                </div>
            </div>
            </div>
        
        </div>
        <div class="col-sm-4">&nbsp</div>
    </div>
    
</div>
  
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.js"></script>
	</body>
</html>