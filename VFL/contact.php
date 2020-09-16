<!DOCTYPE html>
<html class="contact">
<head lang="en-US">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-compatible" content="ie=edge">
	<meta name="handheldFriendly" content="true">

	<title>Virtual Football League VFL Blog</title>
	<link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body class="contact">
	
<div class="navtop">
<div class="blogname-div">
	<nav id="blogname">
	<big>
		<h1 class="blogname">WELCOME TO THE WORLD'S NUMBER 1 VIRTUAL FOOTBALL LEAGUE (VFL) BLOG</h1>
	<div class="blogslang-div">
	<p class="blogslang">Everything about virtual football</p>
   </div>
</big>
	</nav>
</div>
</div>

<div class="navbottom">
	<nav id="navba">
	<big>
	<a href="index.html">
		<span>HOME</span>
	</a>
	<a href="about.html">
		<span>ABOUT VFL BLOG</span>
	</a>
	<a href="vfl articles.html">
		<span>VFL ARTICLES</span>
	<!-<a href="newsletters"> 

	<!-- <span>NEWSLETTERS</span> -->
	</a>

	<a href="contact.php">
		<span>CONTACT</span>
	</a>
	</big>
	</nav>
</div>
	<div class="vfl_summary"><i>
		<p class="blog_summary"><br>This blog will, through very detailed and engaging articles on virtual football league (VFL) betting, serve as a guide on how to beat the VFL bookies and make a fortune from virtual football betting. The blog will also review the WORLD'S NUMBER ONE leading VFL signal and trading bot(s) with the best AI integrated algorithm that not only beats virtual footbal algolrithms but also turns VFL gambling into a very profitable business. VFL BLOG promises to always update you on where to look in VFL betting for the best rewarding betting actions/choices. </p> <br>
		<p class="blog_summary"></p>
		</i>
	</div>


<section>
	 <div class="formbg_div">

<div class="formbg">
<div class="form_div">
<!-- <div class="form-div"> -->


 <!--display form if message is not yet sent-->
<?php if (!isset($_POST['msg'])){?>

<form action="" method="post">
	<h1 class="formheading">Contact Us</h1><br>
	Full Name:<br><br>
	<input class="text" type="text" name="name" placeholder=" John Wayne" required="required">
	<br><br>
	Email Address:<br><br>
	<input type="email" name="email" placeholder="e.g john@gmail.com" required="required"><br><br>

	<textarea placeholder="Type Your Message Here" required="required" name="message"></textarea>
	<br><br>
	<div class="send">
		<input type="submit" value="SEND" name="msg" class="sendbutton" style="background-image: linear-gradient(to left, #00f2fe 0%, #4facfe 100%); border-bottom: none;">
	</div>
	<?php }
		else{
			$connect=mysqli_connect('localhost','root','','blog_subscribers') or die("There is a mistake somewhere");
			if (!$connect) {
				die('Sorry unable to create a connection'.mysqli_error());
			}
			$name=$_POST['name'];
			$email=$_POST['email'];
			$message=$_POST['message'];

			$query="INSERT INTO users(name,email,message) VALUES('$name','$email','$message')";
			if (mysqli_query($connect,$query) or die("error, check your code or give up since you cannot fix simple bugs")) {
			 	echo "<script type='text/javascript'>
						alert('Message Sent Successfully');
						window.location.href='contact.php';
						</script>";
			 }
		}
	?>


</form>
</div>
</div>
</div>
</div>


</body>
</html>
