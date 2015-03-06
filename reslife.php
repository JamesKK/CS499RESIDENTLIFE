<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>UK ResLife Check-In Portal</title>
        <meta name="description" content="University of Kentucky ResLife Check-In Portal" />
        <meta name="keywords" content="login, form, reslife" />
        <meta name="author" content="CodeCats" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/modernizr.custom.63321.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>	
			@import url(http://fonts.googleapis.com/css?family=Raleway:400,700);
			body {
				background: #003053 url(images/hagginbg.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
		</style>
    </head>
    <body>
        <div class="container">
			
			<header>
			
				<h1>University of Kentucky <strong>ResLife </strong>Check-In Portal</h1>
				<h2>Please Login</h2>

				<div class="support-note">
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>
			
			<section class="main">
				<form class="form-4" method = "post" action = "resVerify.php">
				    <p>
						<h4> LinkBlue Username</h4>
				        <label for="login">LinkBlue Username</label>
				        <input type="text" name="login" placeholder="" required>
				    </p>
				    <p>
						<h4> LinkBlue Password</h4>
				        <label for="password">LinkBlue Password</label>
				        <input type="password" name='password' placeholder="" required> 
				    </p>
					<p>
						<select name="hall" required>
							<option value="#">Please Choose a Residence Hall</option>
							<option value="Baldwin">Baldwin</option>
							<option value="Blanding I">Blanding I</option>
							<option value="Blanding II">Blanding II</option>
							<option value="Blanding III">Blanding III</option>
							<option value="Blanding IV">Blanding IV</option>
							<option value="Blanding Tower">Blanding Tower</option>
							<option value="Central I">Central I</option>
							<option value="Central II">Central II</option>
							<option value="Champions Court I">Champions Court I</option>
							<option value="Champions Court II">Champions Court II</option>
							<option value="Haggin">Haggin</option>
							<option value="Ingels">Ingels</option>
							<option value="Kirwan I">Kirwan I</option>
							<option value="Kirwan II">Kirwan II</option>
							<option value="Kirwan III">Kirwan III</option>
							<option value="Kirwan IV">Kirwan IV</option>
							<option value="Kirwan Tower">Kirwan Tower</option>
							<!--<option value="Limestone Park I">Limestone Park I</option>-->
							<!--<option value="Limestone Park II">Limestone Park II</option>-->
							<option value="Roselle">Roselle</option>
							<option value="Smith">Smith</option>
							<option value="Wildcat Coal Lodge">Wildcat Coal Lodge</option>
							<option value="Woodland Glen I">Woodland Glen I</option>
							<option value="Woodland Glen II">Woodland Glen II</option>
							<option value="Woodland Glen III">Woodland Glen III</option>
							<option value="Woodland Glen IV">Woodland Glen IV</option>
							<option value="Woodland Glen V">Woodland Glen V</option>							
						</select>
					</p>
					<p>
						<h1> </h1>
					</p>

				    <p>
				        <input type="submit" name="submit" value="Continue">
				    </p>
            <br>       
				</form>
			</section>
			
        </div>
    </body>
</html>


