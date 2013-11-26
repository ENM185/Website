<!DOCTYPE html>
<html>
  <?php
    $username = $_POST["u"];
    $password = $_POST["p"];
    $key = 54867342743454;
    $encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $password, MCRYPT_MODE_CBC, md5(md5($key))));
    if(($username == "ENM185" && $encrypted == "XLINraUfPp49TB/pFNbZcn31oaAMRHV7ErX0CNo5K1k=") || ($username == "NerdicViking" && $encrypted == "pjXChM5rB7j5Fbtbl0R77F1V61URXeWzxt5paovxRtY=")){

         echo "<meta http-equiv='refresh' content='0; url=http://orinteractive.com/notes/" .  $username . ".html'/>";
    }
    else{
        echo "You have the wrong username or password. Refresh to try again.";
    }
  ?>
</html>
