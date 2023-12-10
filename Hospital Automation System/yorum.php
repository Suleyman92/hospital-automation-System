<!DOCTYPE HTML>  
<html>
<head>  
  <title>Yorum</title>
<style>
.error {color: #ff5100;}
</style>
</head>
<body style="background-color: rgb(8, 116, 116);">  

<?php

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "İsim Gerekli !";
  } else {
    $name = test_input($_POST["name"]);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Yalnız Harfler ve Boşluklar Gerekli!";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "E-posta Gerekli";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Geçersiz e-posta";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "www.gedik.edu.tr";
  } else {
    $website = test_input($_POST["website"]);
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Geçersiz URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Cinsiyet Seçmeniz Gerekli";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Yorumunuz için şimdiden teşekkurler!!!</h2>

<p><span class="error">* Alanları Düzgün Doldurun Lütfen!</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 
  
  İsiminiz: <br> 
  <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>


  E-posta: <br> 
  <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>


  Websiteniz: <br>
  <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  

  Yorumunuz: <br>
  <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea class="alan">
  <br><br>


  Cinsiyetiniz: <br>
  
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Kadın
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Erkek
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Diğer  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Gonder">  
</form>

<?php
echo "<h2>Doğru Giriş:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?><br><br>

<div>
<a href="hos.php"><button type="submit" class="sub" id="uye">Ana sayfa</button></a> <br><br>
</div>

</body>
</html>