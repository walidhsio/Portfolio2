<?php
  session_start();
  if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
  {
    header('Location: http://website.test');
  }else{
    header('Location: http://website.test/captcha/index.html');
  }
?>