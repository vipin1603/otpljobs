<?php 
include('connection.php');

if(isset($_POST['submit'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];
	$emailid = $_POST['emailid'];
	$mobile = $_POST['mobile'];
	$country = $_POST['country'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$address = $_POST['address'];
	$pin_code = $_POST['pin_code'];
	$job_title = $_POST['job_title'];
	$job_type = $_POST['job_type'];
	$job_location = $_POST['job_location'];
	$category = $_POST['category'];
	$resume = $_FILES['resume']['name'];
	
	$target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["resume"]["name"]);
 if (move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file)) {	
 
	$result = $mysqli->query("INSERT INTO `otpljobs` (`firstname`, `lastname`, `gender`, `dob`, `emailid`, `mobile`, `country`, `state`, `city`, `address`, `pin_code`, `job_title`, `job_type`, `job_location`, `category`, `resume`) VALUES ('".$firstname."', '".$lastname."', '".$gender."', '".$dob."', '".$emailid."', '".$mobile."', '".$country."', '".$state."', '".$city."', '".$address."', '".$pin_code."', '".$job_title."', '".$job_type."', '".$job_location."', '".$category."', '".$resume."')");

}else{
	 echo "Sorry, there was an error uploading your file.";
	 die;
}	
}
	
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Job Postal</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/main.css" />
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="main.js"></script>
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
<div class="dw">
<table class="table tb" border="1" align="center" rules="all">
<thead>
<tr>
<th colspan="2" align="center"><h3>JOB PORTAL</h3></th>
</tr>
</thead>
<tbody>
<tr>
<td>First Name*</td>
<td><input type="text" name="firstname" id="firstname" /></td>
</tr>
<tr>
<td>Last Name*</td>
<td><input type="text" name="lastname" id="lastname" /></td>
</tr>
<tr>
<td>Gender*</td>
<td>
<select id="gender" name="gender">
	<option value="male">Male</option>
	<option value="female">Female</option>
</select>    
</td>
</tr>
<tr>
<td>Date Of Birth*</td>
<td><input type="text" name="dob" id="dob" /></td>
</tr>
<tr>
<td>Email Id*</td>
<td><input type="email" name="emailid" id="emailid" /></td>
</tr>
<tr>
<td>Mobile*</td>
<td><input type="text" name="mobile" id="mobile" onClick="ValidateNo()" /></td>
</tr>
<tr>
<td>Country*</td>
<td><input type="text" name="country" id="country" /></td>
</tr>
<tr>
<td>State*</td>
<td><input type="text" name="state" id="state" /></td>
</tr>
<tr>
<td>City*</td>
<td><input type="text" name="city" id="city" /></td>
</tr>
<tr>
<td>Address*</td>
<td><input type="text" name="address" id="address" /></td>
</tr>
<tr>
<td>Pin Code*</td>
<td><input type="text" name="pin_code" id="pin_code" /></td>
</tr>
<tr>
<td>Job Title*</td>
<td><input type="text" name="job_title" id="job_title" /></td>
</tr>
<tr>
<td>Job Type*</td>
<td><input type="text" name="job_type" id="job_type" /></td>
</tr>
<tr>
<td>Job Location*</td>
<td><input type="text" name="job_location" id="job_location" /></td>
</tr>
<tr>
<td>Category*</td>
<td>
<select id="category" name="category">
	<option value="">--Select--</option>
	<option value="Software Developer">Software Developer</option>
	<option value="Customer Support">Customer Support</option>
	<option value="Database">Database</option>
	<option value="Engineer">Engineer</option>
	<option value="IT">IT</option>
	<option value="UI">UI</option>
	<option value="Graphics Design">Graphics Design</option>
	<option value="Security">Security</option>
	<option value="System Administration">System Administration</option>
	<option value="Web Developer">Web Developer</option>
	<option value="Hardware">Hardware</option>    
</select>
</td>
</tr>
<tr>
<td>Resume*</td>
<td><input type="file" name="resume" id="resume" /></td>
</tr>
<td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit" onclick="javascript:return validation()"/></td>
</tr>
</tbody>
</table>
<div><p id="p"><b>Note: </b> * Fields are compulsary.</p></div>
</form>
</div>
<footer>
<div class="footer">
<input type="email" name="email" id="email" placeholder="Enter Your Email"  />
<input type="submit" value="Subscribe" onClick="checkEmail()"/>
</div>
</footer>

</body>
</html>