<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>registration</title>
	<link rel="stylesheet" href="/css/register.css">
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script>src="/JS/register.js"	</script>
	<script>
	function validateForm(){
	var x = document.forms["register"]["sname"].value;
	var y = document.forms["register"]["sid"].value;
	var z = document.forms["register"]["email"].value;

	if (x == "" ) {
			document.getElementById('no_name').innerHTML = "*Name must be filled out";
	}

	if(y == ""){
		document.getElementById('no_ID').innerHTML = "*ID must be filled out";
	}
	if(z == ""){
		document.getElementById('no_email').innerHTML = "*email must be filled out";
	}
	if(x=="" || y=="" || z==""){
		return false;
	}
	else{
		if(isNaN(y)){
			document.getElementById('no_ID').innerHTML = "*enter a valid ID!";
			return false;
		}

	else{
	var atpos = z.indexOf("@");
	var dotpos = z.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=z.length) {
			document.getElementById('no_email').innerHTML = "*enter a valid email!";
			return false;
	}
 }
 }
 }

	</script>
</head>
<body>
﻿

	<div id="body">
		<h1><span>You are registered in another class..re-enter your data here</span></h1>
		<form name = "register" method = "POST" onsubmit="return validateForm()" action="re_section" >
			<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
			Name: <input type="text" name="sname" id="fname" ><div id="no_name" style="color:red;"></div>
			ID: <input type="text" name="sid" id="ID"><div id="no_ID" style="color:red;"></div>
			email: <input type="text" name="email" id="email"><div id="no_email" style="color:red;"></div>
      <input type="radio" name="decision" value="keep">stay in the same section<br>
      <input type="radio" name="decision" value="change"> change the section<br>
			<input type="submit" name="register" id="send" value="register" >
		</form>
	</div>

</body></html>
