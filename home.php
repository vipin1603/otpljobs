<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/main.css" />
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
function checkEmail() {
    var email = document.getElementById('email');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
 }
}
</script>
</head>

<body>
<form action="" method="post">
<div ><img class="logo" src="image/otpl.png" />
</div>
<nav class="navbar navbar-inverse" id="my-navbar">
	<div class="container">
		<div class="navbar-header">
        	<button type="button" class="navbar-toggle navbar-toggle-always" data-toggle="collapse" data-target="#navbar-collapse">
            	<span class="icon-bar"</span>
                <span class="icon-bar"</span>
                <span class="icon-bar"</span>
           
            </button>
			</div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
            	<ul class="nav navbar-nav">
                <li><a href="home.php" >Home</a>
                <li><a href="jobpostal.php" >JobPostal</a>
                <li><a href="joblisting.php" >Job Listing</a>
                <li><a href="contactus.php" >Contact Us</a>	
                </ul>
            </div>           
       </div>
</nav>

<footer class="foot">
<div>
<input type="email" name="email" id="email" placeholder="Enter Your Email"   />
<input type="submit" value="Subscribe" onClick="checkEmail()"/>
</div>
</footer>
</form>
</body>
</html>