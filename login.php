<?php
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
	$password = $_POST['password'];
	$iusername = substr($username, 0, strpos($username, "@"));
	if($password == $iusername){
		$text = sprintf("<div class='container my-5'><div class='alert alert-success text-center' role='alert'>Giriş başarılı! Ana Sayfaya Yönlendiriliyorsunuz<br> Hoşgeldin %s !</h1></div>",$iusername);
		echo $text;
		echo '<meta http-equiv="refresh" content="4; url=website.html" />';
	
	}
	else{
		echo "<div class='container my-5'><div class='alert alert-danger text-center' role='alert'><h4>Mailinizi veya şifrenizi yanlış girdiniz!</h4></div></div>";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Sayfası</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<style>
    body {
        background-image: url(images/sau-giris.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }
    div.container h2{
        text-align: center;
    }
    div.mb-3{
        width: 275px;
    }
</style>
<body>
	<div class="container my-5">
		<h2>Giriş Yap</h2>
        <div class="d-flex justify-content-center">
		<form action="login.php" method="POST" >
			<div class="mb-3" >
				<label for="mail" class="form-label"><h4>Öğrenci numarası</h4></label>
				<input type="email" class="form-control" id="mail" name="username" aria-describedby="emailHelp" placeholder="Mail" required>
			</div>
			<div class="mb-3">
				<label for="password" class="form-label"><h4>Şifre</h4></label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Şifre" required>
			</div>
			<button type="submit" class="btn btn-success">Giriş Yap</button>
		</form>
	    </div>
    </div>    
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
