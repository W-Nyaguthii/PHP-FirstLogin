<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="homepage.css">
</head>
<body style=" background-color: #c9d6ff;background:linear-gradient(to right,#e2e2e2,#c9d6ff);">
         
<div class="container">
    <h2> Please fill in the form below </h2>
 
    <form>
        <label>Phone</label> 
        <br>
        <input type="text" id="phone" name="phone">
        <br><br>
        
        <label>Email</label>
        <br>
        <input type="email" placeholder="joe2@gmail.com">
        <br><br>
        
       <label>Address</label> 
       <br> 
       <input type="text"  id="address">
        <br><br>
        
        <label>Registration number</label> 
         <br>
        <input type="text" placeholder="CS/M/1670/04/22">
        <br><br>
        
        <input type=submit> 
        <br><br>
     </form>
      <a href="logout.php" class="logout">Logout</a>
      <div id="result"></div>
</div>  
<script src="js/scrript.js"></script>
</body> 
</html>