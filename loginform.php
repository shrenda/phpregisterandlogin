<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<style type="text/css">
	*{
		box-sizing: border-box;
		margin: 0;
		font-family: Arial, Helvetica, sans-serif;
	}
	.container{
		height: 100vh;
        width: 100%;
        background-image: linear-gradient(to bottom right, #6699ff,#6666ff, #cc66ff, #6600cc);
        background-size: 400% 400%;
        position: relative;
        animation: change 10s ease-in-out infinite;
	}
	@keyframes change{
		0%{
			background-position: 0% 50%;
		}
		50%{
			background-position: 100% 50%;
		}
		100%{
			background-position: 0% 50%;

		}
	}
	.formcontainer{
		position: absolute;
		border: 1px solid #ccc;
		left: 50%;
		top: 50%;
		transform: translate(-50%,-50%);
		padding: 30px;
		border-radius: 5px;
		width: 30%;
		background-color: white;
		box-shadow: 0px 0px 20px #ccc;
	}
	input[type=text], input[type=Email], input[type=password]{
		
            font-size: 17px;
            width: 100%;
            padding: 12px 24px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
	}
	input[type=text]:focus{
		outline: 3px solid #cc66ff;
	}
	input[type=Email]:focus{
		outline: 3px solid #cc66ff;
	}
	input[type=password]:focus{
		outline: 3px solid #cc66ff;
	}
	input[type=submit]{
		width: 30%;
		padding: 12px 20px;
		border-radius: 30px;
		border: none;
		background: linear-gradient(to bottom right, #6699ff, #6666ff, #cc66ff, #6600cc);
		background-size: 400% 400%;
        position: relative;
        animation: change 10s ease-in-out infinite;
		color: white;
		cursor: pointer;
		font-size: 17px;
		margin-bottom: 10px;
	}
	input[type=submit]:hover{
		background: blue;
	}
	input[type=button]{
		margin-bottom: 5px;
		padding: 5px 5px;
		background: linear-gradient(to bottom right, #6699ff, #6666ff, #cc66ff, #6600cc);
		background-size: 400% 400%;
        position: relative;
        animation: change 10s ease-in-out infinite;
		border: none;
		color: white;
		cursor: pointer;
		border-radius: 5px;
		font-size: 17px;
		float: right;
	}
	input[type=button]:hover{
		background: blue;
	}
	.formcontainer p{
		margin-bottom: 5px;
		font-size: 17px;
	}
	.formheader{
		text-align: center;
		font-size: 25px;
		border-bottom: 1px solid #ccc;
		margin-bottom: 10px;
		padding-bottom: 10px;

	}
	a{
		text-decoration: none;
		color: blue;
		font-size: 15px;
	}
	a:hover{
		color: purple;
	}
	.errormsg{
		background-color: #4dd2ff ;
		padding: 12px 20px;
		margin-bottom: 10px;
		border-left: 5px solid tomato;
		color: white;
	}
	</style>
</head>
<body>
<div class="container">
	<header>
		
	</header>
	<section>
		<div class="formcontainer">
			<?php 
			session_start();
			if(isset($_SESSION['alert'])){
				$msg = $_SESSION['alert'];
				echo "<div class = 'errormsg'>".$msg. "</div>";
				session_destroy();
			}
			 ?>
			<div class="formheader">Log In</div>
			<form method="POST" action="login.php">
				<div class="row">
					<div class="first">
						<p>Email:</p>
					</div>
					<div class="second">
						<input type="Email" name="email" id="email" placeholder="Enter Your Email Address">
					</div>
				</div>
				<div class="row">
					<div class="first">
						<p>Password:</p>
					</div>
					<div class="second">
						<input type="Password" name="password1" id="password1" placeholder="Enter a Password">
					</div>
				</div>
				<div class="row">
					<input type="button" name="butn" id="sbutn" class="butn" value="show passowrd" style="">
				</div>
				<div class="row">
					<input type="submit" name="submit" value="Log in">
				</div>
				<div class="row">
					<span>Don't have an account?</span><a href="registerform.php">Register</a>
				</div>
			</form>
		</div>
	</section>
	<footer>
		
	</footer>
</div>

<script type="text/javascript">
	const pass1 = document.querySelector('#password1');
	const btn = document.querySelector('#sbutn');

	btn.addEventListener('click', () => {
            if (pass1.type === "text") {
                pass1.type = "password";
                btn.value = "show password";
            } else {
                pass1.type = "text";
                btn.value = "Hide password";
            }
        })
</script>
</body>
</html>