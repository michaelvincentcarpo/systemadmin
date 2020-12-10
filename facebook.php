<html>
	
	<title>Facebook</title>
	<head>
		<link type="text/css" rel="stylesheet" href="fbstyle.css" />
		<link rel="icon" type="image/gif" href="logo.png">
		<meta name="Description" content="Facebook"/>	
	</head >
	<body > 
	
		 <div class="fb-header-base">
		 <div class="fb-header"> 
			<div><h1 style="padding-left: 150px;">facebook</h1></div>

	<form  action="login.php" method="post">

			<div id="form1" class="fb-header ">Email or Phone<br>
			<input placeholder="Email" type="mail" name="email" /><br>
			</div>
			<div id="form2" class="fb-header">Password<br>
			<input placeholder="Password" type="password" name="password" />
			<input type="submit" class="login" value="login" />Forgot account?</div>
		</div>
		</div>

	</form>

		<div class="fb-body">
			<div id="intro1" class="fb-body"><h2>Connect with friends and the world around you on Facebook.</h2></div>
			<div id="intro2" class="fb-body">Sign Up</div>
			<div id="intro6" class="fb-body"><br><br>
				<p><b>See photos and updates</b> from friends in News Feed.</p><br><br>
				<p><b>Share what's new</b> in your life on your Timeline.</p><br><br>
				<p><b>Find more</b> of what you're looking for with Facebook Search.</p>
			</div><br>

			<div id="intro3" class="fb-body">It's quick and easy.</div>
			<div id="form3" class="fb-body">

		
	<form action="insert.php" method="post">

				<input placeholder="First Name" type="text" id="namebox" name="fname" />
				<input placeholder="Last Name" type="text" id="namebox"  name="lname" /> <br>
				<input placeholder="Mobile number or email" type="text" id="mailbox" name="email" /><br>
				<input placeholder="New password" type="password" id="mailbox" name="password" /><br><br>
				<label>Birthdate</label><br><br>
				<input type="Date" name="date">
				<br><br>
				<label>Gender</label><br><br>
				<input type="radio" id="r-b"  value="male" name="gender" />Male
				<input type="radio" id="r-b"  value="female" name="gender" />Female
				<input type="radio" id="r-b"  value="other" name="gender" />other<br><br>
				<p id="intro4">By clicking Sign Up, you agree to our Terms, Data Policy and Cookies Policy. You may receive SMS Notifications from us and can opt out any time.</p>
				<button class="submit" type="submit" name="submit">Submit</button>
			</div>	
			</div>
		</form>

		
</body>
</html>
