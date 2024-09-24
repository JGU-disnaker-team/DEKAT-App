<!DOCTYPE html>
<html>
<head>
  <title>Simple Form</title>
</head>
<body>
  <form class="" action="insert.php" method="post">
   <label>Name</label>
   <input type="text" name="name"><br><br>
   <label>Email</label>
   <input type="email" name="email"><br><br>
   <button type="submit" name="submit" value= <?php echo date("h:i:sa");?>></button> 
  </form>
</body>
</html>