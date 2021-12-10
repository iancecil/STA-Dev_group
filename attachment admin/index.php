<!DOCTYPE html>
<html lang="en">
<head>
<title>Attachment Opportunities | STRATH</title>
	<meta charset="utf-8">
	<meta name="Description" content="">
	<link rel="stylesheet" href="css/w3.css">
	<link rel="stylesheet" href="css/bootstrap.css" tpe="text/css">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all"/>
    <link rel="icon" type="image/jpg" size ="96x96" href="images/SU-Logo-1.svg">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2 user-scalable=no">
</head>


<body style="background-image: images/strathm.jpg;">
<!-- header -->
<header>
	<div class="container">
        <div class="header d-lg-flex justify-content-between align-items-center">
            <div class="header-agile">
                <h1>
                    <a style="color: white; font-size: 0.6em" class="navbar-brand logo" href="index.php" title="STRATH">
                        <img style="width: 75px" src="images/SU-Logo-1.svg" alt=""/> 
                    </a>
                </h1>
            </div>
            <div class="nav_w3ls">
                <nav>
                    <label for="drop" class="toggle mt-lg-0 mt-2"><span class="fa fa-bars" aria-hidden="true"></span></label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu">
                        <li class="mr-lg-3 mr-2 active"><a href="index.php">Home</a></li>
                        <li class="mr-lg-3 mr-2 p-0">
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Accounts <span class="fa fa-angle-down" aria-hidden="true"></span></label>
                            <a href="#">Accounts <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2"/>
                            <ul class="inner-dropdown">
                                <li><a href="index.php#student">Students</a></li>
                                <li><a href="index.php#org">Organizations</a></li>
                            </ul>
                        </li>
                        <li class="mr-lg-3 mr-2"><a href="guide.php">Attachment Guide</a></li>
                    </ul>
                </nav>
            </div>
           <div class="buttons mt-lg-0 mt-2">
                <a href="adminlogin.php">Administrator</a>
            </div>
        </div>
	</div>
</header>
<!-- //header -->

<!-- banner -->
<div class="banner_w3lspvt" id="home">
	<div class="container">
		<div class="row banner-tops-style">
			<div class="col-lg-9 style-banner">
				<h3 class="text-wh">Find Attachment Opportunities in Strathmore University</h3>
				<p class="text-li mt-4">You only need to create an account, apply for attachment.
				 When an organization accepts you via email. Submit checkbox <em><b>attached</b></em> on your profile. To indicate you've been attached.</p>
			</div>
		</div>
	</div>
</div>










<!-- footer -->
<footer class="py-5 mt-5">
	<div class="container py-md-3">
		<div class="row footer-grids">
			<div class="col-md-4">
				<div class="footer-grid left">
				  <h2 style="color: white" class="logo"><a href="index.php" title="STRATH"><img style="width: 50px" src="images/SU-Logo-1.svg" alt=""/></a></h2>
				</div>
			</div>
			
			
			</div>
		</div>
		
	</div>
</footer>
<!-- //footer -->

<!--function for accordion for both students and organizations-->
<script>
    function accordionFunction(id) {
        const x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>

<script type="text/javascript">
var LHCChatOptions = {};
LHCChatOptions.opt = {widget_height:140,widget_width:300,popup_height:520,popup_width:500,domain:'localhost/qia/index.php'};
(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
var referrer = (document.referrer) ? encodeURIComponent(document.referrer.substr(document.referrer.indexOf('://')+1)) : '';
var location  = (document.location) ? encodeURIComponent(window.location.href.substring(window.location.protocol.length)) : '';
po.src = '//localhost/queens/chat/index.php/chat/getstatus/(click)/internal/(position)/bottom_right/(ma)/br/(top)/350/(units)/pixels/(leaveamessage)/true?r='+referrer+'&l='+location;
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="validation/js/jquery.validationEngine.js"></script>
<script src="validation/js/languages/jquery.ValidationEngine.en.js"></script>
<script src="validation/jquery.form.js"></script>
<script src="validation/js/common.js"></script>
<script src="validation/js/register.js"></script>
<script src="validation/js/login.js"></script>
</body>
</html>
