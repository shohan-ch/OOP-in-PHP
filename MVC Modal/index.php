
<?php 
include ("assests/classAutoloder.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>Mvc modal with oop</title>
</head>
<body>

   <div class="container my-4">
    <h3 class="text-center">OOP MVC MODAL</h3>
<form action="assests/action.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" name="first" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Last name</label>
    <input type="text" name="second" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="country">Country</label>
    <input type="text" name="country" class="form-control" id="country" placeholder="Password">
  </div>
  
  <button type="submit" name="sub_btn" class="btn btn-primary">Submit</button>
</form>

<?php
  if(isset($_GET['success'])){
      echo $_GET['success'];
      unset($_GET['success']);
      
  }
?>

  

<?php
   $obj = new Userview();
   $obj->viewuser();
  
   ?>

   
   </div>

 

  















<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>