<!DOCTYPE html>
<html lang="de">
<head>
<title>Example</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<script type="text/javascript" src="inc/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="inc/js/form.js"></script>
<link href="inc/css/style.css" rel="stylesheet" />
</head>
<body>

<div id="content">

  <h1 id="first">Simple PHP Jquery AJAX	Form Example</h1>
	
	<div id="result"></div>
	
	<div class="infotext">
	
		<form id="formtest" action="inc/post.php" method="POST" datatype="json">
			<fieldset>
				<legend>Simple textfields</legend>
				<label for="forename">
					Forename:<br />
					<input id="forename" type="text" name="forename" placeholder="Forename" />
				</label><br />
				
				<label for="lastname">
					Lastname:<br />
					<input id="lastname" type="text" name="lastname" placeholder="Lastname" />
				</label><br />
				
				<label for="email">
					E-Mail:<br />
					<input id="email" type="email" name="email" placeholder="E-Mail Address" />
				</label><br />
			</fieldset>
			
			<fieldset>
				<legend>Simple Dropdown</legend>
				<label for="gender">
					<select id="gender" name="gender">
						<option value="" disabled selected>Set your Gender</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select>
				</label>
				
				<label for="color">
					<p>Set you favorite color</p>
					<select id="color" name="color">
						<option value="" disabled selected>Choose one Color</option>
						<option value="red">Red</option>
						<option value="green">Green</option>
						<option value="yellow">Yellow</option>
						<option value="blue">Blue</option>
						<option value="black">Black</option>
						<option value="white">White</option>
					</select>
				</label>
			</fieldset>
			
			<fieldset>
				<legend>Multiple checkboxes</legend>
				<label for="one">
					One <input type="checkbox" name="arrtest[]" value="one" id="one" />
				</label>
			
				<label for="two">
					Two <input type="checkbox" name="arrtest[]" value="two" id="two" />
				</label>
			
				<label for="three">
					Three <input type="checkbox" name="arrtest[]" value="three" id="three" />
				</label>
			
				<label for="four">
					Four <input type="checkbox" name="arrtest[]" value="four" id="four" />
				</label>
			
				<label for="five">
					Five <input type="checkbox" name="arrtest[]" value="five" id="five" />
				</label>
			</fieldset>
			
			<button type="submit" style="margin:15px 0 0;">Absenden</button>
		</form>
	</div>
	
  <p><a href="http://mvattersen.de/">mvattersen.de</a></p>
</div>
</div>

</body>
</html>
