<!DOCTYPE html>
<html lang="en">
  
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>PlayLotto Admin Dashboard</title>
	<link type="text/css" href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="../css/theme.css" rel="stylesheet">
        <link type="text/css" href="../images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>


    <style>
    	body{
		  background: #fff !important;    
		  width: 100% !important;
		  margin: 0 !important;
		  background-size: cover !important;
		  background-attachment: fixed !important;
		  background-repeat: no-repeat !important;
    	}
	.login-wrap{
	background: linear-gradient(to bottom, #4fc1e3 0%,#3db6d9 100%);
	padding: 30px 40px;
    box-shadow: 0 2px 5px 0px #777;
	}
	.login-wrap h3 {
    text-align: center;
	}
	.login-wrap input{
	width:96%
	}
 </style>
    </head>

  <body>

  
  <section id="main-content">
    <section class="wrapper">
		<div class="container large_top_padding">
		    <div class="span12 form-group">
		        <div class="offset3 span4">
		             <form action="Admin/admin_login" method="POST">
		                <div class="login-wrap">
		                    <h3>Admin Login Form</h3>
				<div class="control-group">
						<label class="control-label" for="basicinput">Username <span style="color:red">*</span></label>
						<div class="controls">
							<input type="text" id="basicinput" name="username" class="" placeholder="Name">							
						</div>
				</div>
				<div class="control-group">
						<label class="control-label" for="basicinput">Password <span style="color:red">*</span></label>
						<div class="controls">
							<input type="text" id="basicinput" name="password" class="" placeholder="Password">							
						</div>
				</div>
		               
		                    <div class="control-group">
						<div class="controls">
							<button type="submit" class="btn btn-success">Login</button>
						</div>
					</div>
		                </div>
		                    
		             </form>
		        </div>
		    </div>
		</div>
	</section>

<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
<script>
    $.backstretch("../images/login-bg.jpg", {speed: 500});
</script>
</body>
</html>
