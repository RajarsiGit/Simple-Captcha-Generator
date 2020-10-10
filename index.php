<html>
<head>
    <title>MY CAPTCHA</title>
	<style> 
		body{
			background: white;
			display: flex; 
			flex-direction: column; 
			align-items: center; 
			justify-content: center; 
		} 
	</style>
</head>
  <body>
    <form action="" method="post">
		<label for="name">Name</label>
    	<input type="text" name="name" /></br>
		<label for="email">Email</label>
    	<input type="email" name="email" /></br>
    	<img src="captcha.php" /><input type="text" name="captcha" /></br>
        <input type="submit" value="submit" />
    </form>
  </body>
</html>
<?php
	session_start();
	if(isset($_POST) & !empty($_POST)){
		if($_POST['captcha'] == $_SESSION['code']){
			echo "<h3>Correct Captcha!</h3>";
		}else{
			echo "<h3>Invalid Captcha!</h3>";
		}
	}
?>