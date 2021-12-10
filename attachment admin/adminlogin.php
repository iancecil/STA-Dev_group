<!DOCTYPE html>
<html lang="en">
<head>
<title>Administrator Login | </title>
	<meta charset="utf-8">
	<meta name="Description" content="Administrator login" />
    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	 <link rel="icon" type="image/jpg" size ="96x96" href="images/SU-Logo-1.svg">
      <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">

</head>

<body style="background-color: skyblue;">

<!-- header -->
<header>
	<div class="container">
		<div class="header d-lg-flex justify-content-between align-items-center">
			<div class="header-agile">
				<h1>
                    <a style="color: white; font-size: 0.6em" class="navbar-brand logo" href="index.php">
                         <img style="width: 75px" src="images/SU-Logo-1.svg" alt=""/> 
                    </a>
				</h1>
			</div>
			<div class="nav_w3ls">

			<div class="buttons mt-lg-0 mt-2">
                <a href="adminlogin.php">Administrator</a>
            </div>

		</div>
	</div>
</header>
<!-- //header -->

<!-- inner banner -->
<div class="inner-banner" id="home">
	<div class="container">
	</div>
</div>
<!-- //inner banner -->

<!-- page details -->
<div class="breadcrumb-agile">
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.php">Home</a>
		</li>
		
	</ol>
</div>
<!-- //page details -->
<!-- gallery -->

<section style="margin-left:8px;margin-right: 8px;" class="banner_bottom">
    <div class="">
                         <!-- register form grid -->
                <h3 class="col-lg-10 mb-3 text-center">Admin Login</h3>
                <form id="adminlogin-frm" action="validation/admin-login-process.php" method="post" class="text-center register-wthree">
                    <div class="form-group">
                        <div class="mt-3">
                            <label class="col-md-10">
                                <input class="form-control" type="email" placeholder="Enter Email" name="umail" required="">
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mt-3">
                            <label class="col-md-10">
                                <input class="form-control" type="password" placeholder="Enter Password" name="upass" required="">
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mt-3 mb-3">
                            <label class="col-md-10">
                                <button type="button" class="btn btn-info">ADMIN LOGIN</button>
                                    
                        </div>
                    </div>
                    <!--display the response returned after form submit-->
                    <div class="text-center offset-sm-1 col-md-10 status"></div>

                </form>
                <!--  //register form grid ends here -->
            </div>
</section>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="validation/js/jquery.validationEngine.js"></script>
<script src="validation/js/languages/jquery.ValidationEngine.en.js"></script>
<script src="validation/jquery.form.js"></script>
<script src="validation/js/common.js"></script>
<script src="validation/js/login.js"></script>

</body>
</html>