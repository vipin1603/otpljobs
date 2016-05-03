<?php 
include('connection.php'); 
$job_title;
$result = $mysqli->query("SELECT * FROM otpljobs where job_title='".intval($_GET['job_title'])."'");
$data = $result->fetch_row();


?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Job Detail</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/main.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
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

<body style="margin:20px">
<form action="" id="frm" method="post" enctype="multipart/form-data">
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
</header>
<div class="tbl">
<table border="1" cellpadding="2" cellspacing="3" rules="all">
 <tr>
    <th scope="col">Id</th>
    <th scope="col">First Name</th>
    <th scope="col">Last Name</th>
    <th scope="col">Gender</th>
    <th scope="col">Date Of Birth</th>
    <th scope="col">Email Id</th>
    <th scope="col">Mobile</th>
    <th scope="col">Country</th>
    <th scope="col">State</th>
    <th scope="col">City</th>
    <th scope="col">Address</th>
    <th scope="col">Pin Code</th>
    <th scope="col">Job Title</th>
    <th scope="col">Job Type</th>
    <th scope="col">Job Location</th>
    <th scope="col">Category</th>
    <th scope="col">Resume</th>
  </tr>
  <?php 
	while($row = $result->fetch_row()){?>
     <tr>
     <?php for($i=0;$i<=10;$i++){?>
    <td><?php echo $row[$i];?></td>
	
    <?php }?>
      
  </tr>
  <?php 
	}
$result->close();
?>
</table>
</div>
<footer>
<div class="foot">
<input type="email" name="email" id="email" placeholder="Enter Your Email"  />
<input type="submit" value="Subscribe" onClick="checkEmail()"/>
</div>
</footer>
</form>
</body>
</html>