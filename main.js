// JavaScript Document

function validation(){
	
	
	try
	{
	var firstname = document.getElementById('firstname').value;
	var lastname = document.getElementById('lastname').value;
	var gender = document.getElementById('gender').value;
	var dob = document.getElementById('dob').value;
	var emailid = document.getElementById('emailid').value;
	var mobile = document.getElementById('mobile').value;
	var country = document.getElementById('country').value;
	var state = document.getElementById('state').value;
	var city = document.getElementById('city').value;
	var address = document.getElementById('address').value;
	var pin_code = document.getElementById('pin_code').value;
	var job_title = document.getElementById('job_title').value;
	var job_type = document.getElementById('job_type').value;
	var job_location = document.getElementById('job_location').value;
	var category = document.getElementById('category').value;
	}catch(e){
		alert(e);
	}
	
	if(firstname == ""){
	alert('Please enter your firstname:');
	document.getElementById('firstname').focus();
	return false;
	}	
	
	if(lastname == ""){
	alert('Please enter your lastname:');
	document.getElementById('lastname').focus();
	return false;
	}	
	if(gender == ""){
	alert('Please enter your gender:');
	document.getElementById('gender').focus();
	return false;
	}
	if(dob == ""){
	alert('Please enter your Date of Birth:');
	document.getElementById('dob').focus();
	return false;
	}
	if(emailid == ""){
	alert('Please enter your Email address:');
	document.getElementById('emailid').focus();
	return false;
	}
	if(mobile == ""){
	alert('Please enter your mobile:');
	document.getElementById('mobile').focus();
	return false;
	}
	if(country == ""){
	alert('Please enter your country:');
	document.getElementById('country').focus();
	return false;
	}
	if(state == ""){
	alert('Please enter your state:');
	document.getElementById('state').focus();
	return false;
	}
	if(city == ""){
	alert('Please enter your city:');
	document.getElementById('city').focus();
	return false;
	}
	if(address == ""){
	alert('Please enter your address:');
	document.getElementById('address').focus();
	return false;
	}if(pin_code == ""){
	alert('Please enter your pin code:');
	document.getElementById('pin_code').focus();
	return false;
	}if(job_title == ""){
	alert('Please enter your job title:');
	document.getElementById('job_title').focus();
	return false;
	}if(job_type == ""){
	alert('Please enter your job type:');
	document.getElementById('job_type').focus();
	return false;
	}if(job_location == ""){
	alert('Please enter your job location:');
	document.getElementById('job_location').focus();
	return false;
	}if(category == ""){
	alert('Please enter your category:');
	document.getElementById('category').focus();
	return false;
	}
}

function valid(){
	var email = document.getElementById('email').value;
	if(email == ""){
	window.location.assign("contactus.php");
	}
}


    function ValidateNo() {
        var phoneNo = document.getElementById('mobile');
    if (phoneNo.value == "" || phoneNo.value == null) {
            alert("Please enter your Mobile No.");
            return false;
        }
        if (phoneNo.value.length < 10 || phoneNo.value.length > 10) {
            alert("Mobile No. is not valid, Please Enter 10 Digit Mobile No.");
            return false;
        }
        alert("Success ");
        return true;
        }
		
function checkEmail() {
    var email = document.getElementById('email');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
 }
}