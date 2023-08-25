<?php

echo "<pre>";
echo "===============  GET =============";
print_r($_GET);
// echo "Hello,".$_GET['username'];
echo "===============  POST =============";
print_r($_POST);
echo "===============  _REQUEST =============";
print_r($_REQUEST);
echo "===============  _FILES =============";
print_r($_FILES);
echo "===============  GLOBALS =============";
print_r($GLOBALS);


echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Form</h2>
    <p>form tag will helps to send client data to the server</p>
    <p>There are two methods to send client data to the server in form GET(default) and POST</p>
    <p>we can change method by method attribute</p>
    <p>name="" attr will help to send form element data to the server</p>
    <p>input type="submit" will post form data to the server</p>
    <h2>GET</h2>
    <p>GET will use URL for sending client data to the server its less secure</p>
    <p>GET will append data to URL by ? meand query-string and for multiple data will append/add &. ex: /path/page.html?username=test&email=TEST</p>
    <p>Limitation 2048 char only</p>
    <p>not support file upload</p>
    <p>faster than post</p>
    <p>mainly we use it for send one page data to other and also use it for searching</p>
    <p>we can do bookmark on get method data</p>
    <form >
        <input type="text" name="username" id="">
        <input type="text" name="email" id="">
        <input type="submit" name="" id="">
    </form>
    <h2>POST</h2>
    <p>POST will send form data to the server without URL thats why its secure</p>
    <p>no Limitation</p>
    <p>support file upload</p>
    
   
    <!-- <form action="serverpage.php">
        <label for="">username</label>
        <input type="text" name="username" id="">
        <input type="text" name="email" id="">
        <input type="submit" name="" id="">
    </form> -->
    <h3>POST</h3>
    <form method="post" >
        <input type="text" name="username_post" autocomplete="off" placeholder="Enter User Name" id="" required>
        <input type="text" name="password_post" placeholder="Enter ur pass" id="" >
        <input type="submit" value="Registration" name="btn_post" id="">
        <input type="reset" name="" value="Cancel"  id="">
    </form>
   
    <form enctype="multipart/form-data" target="_blank" method="post" novalidate>
        <input type="text" name="username" placeholder="Enter User Name" id="" required>
        <input type="text" name="password" placeholder="Enter ur pass" id="" >
        <input type="file" name="profilepic" id="" accept="image/*">
        <input type="submit" value="Registration" name="" id="">
        <input type="reset" name="" value="Cancel"  id="">
    </form>
    <br>
    <br>
    <br>
    <br>
</body>
</html>