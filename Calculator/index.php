<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>Title</title>
</head>
<body>



  <div class=" container mt-4 p-3 border">

  <h3 class="text-center">Calculator with OOP</h3>


   <form action="action/code.php" method="POST">

   <input type="number" name="first" placeholder="First Number"  class="form-control w-50 mb-3">
   <select name="operator" class="form-control  w-50 mb-3">
       <option value="add">Addition</option>
       <option value="sub">Subtraction</option>
       <option value="mul">Multipication</option>
       <option value="div">Division</option>
   </select>
   <input type="number" name="second" placeholder="Second Number"  class="form-control  w-50 mb-3">
   <button type="submit" class="btn btn-info" name="cal-btn">Calculate</button>
  </form>
  <?php
  if(isset($_SESSION['result'])){
    echo "<p>Result :".$_SESSION['result']."</p>";
    unset($_SESSION['result']);

  }
  
  
  ?>
     

  </div>


















<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>