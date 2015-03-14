<!DOCTYPE html>
<html>
  <?php
    $username = $_POST["u"];
    $password = $_POST["p"];
    $key = 54867342743454;
    $encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $password, MCRYPT_MODE_CBC, md5(md5($key))));
    if((){

         echo "<meta http-equiv='refresh' content='0; url=" .  $username . ".html'/>";
    }
    else{
        echo "You have the wrong username or password. Go <a href=''>back</a> to try again.";
    }
  ?>
</html>
