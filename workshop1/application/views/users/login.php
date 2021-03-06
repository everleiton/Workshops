<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Avatar</title>
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<!--<div class="errors"><?php echo $this->session->flashdata('error') ?></div>-->
<div class="errors" id="errors"></div>

<script>

function register(){

  var userName = document.getElementById('username').value;
	var password = document.getElementById('password').value;
	var fistname = document.getElementById('fistname').value;
  var lastname = document.getElementById('lastname').value;
  var button = document.getElementById('submitButton');

  button.disabled = true;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    debugger;
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("errors").innerHTML = this.responseText;
      button.disabled = false;
    }
  };
  xhttp.open("POST", "user/save", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("username="+userName+"&password="+password+"&firstname="+fistname+"&lastname="+lastname);


  return false;
}

</script>
<center >

<div id="container">
	<h1>Bienvenido a Avatar!</h1>
	<div id="body">
		<p>Registrese con sus datos personales</p>
		<div class="errors"> </div>
    <!--<form class="" action="user/authenticate" method="post">
      Username: <input type="text" name="username" value="">
      Pass: <input type="password" name="password" value="">
      <input type="submit" value="Login">
    </form>-->
  
			<form class="" onsubmit="return register();">
				<table>
					<tr>
						<td>  Username:</td>
						<td> <input type="text" name="username" value="" id="username"><br></td>
					</tr>
					<tr>
						<td>Pass</td>
							<td> <input type="password" name="password" value="" id="password"></td>
					</tr>
					<tr>
						<td>First Name: </td>
							<td><input type="text" name="fistname" value="" id="fistname"></td>
					</tr>
					<tr>
						<td>  Last Name:</td>
							<td>   <input type="text" name="lastname" value="" id="lastname"></td>
					</tr>
				</table>
	    

				
	  
	      <input type="submit" value="Register" id="submitButton">
	    </form>

	</div>
</div>
</center>
</body>
</html>
