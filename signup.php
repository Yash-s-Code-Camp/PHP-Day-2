<?php $title = "Sign up" ?>


<?php include 'top.php' ?>
		<h1>Sign Up</h1>
		
		
<form method="POST">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname"><br>
  <label for="email">E-mail:</label><br>
  <input type="email" id="email" name="email"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br>
  <label for="confirm-password">Confirm Password:</label><br>
  <input type="password" id="confirm-password" name="confirm-password"><br>
  <button type="submit" id="submit" name="submit">Submit</button>
</form>

<?php include 'bottom.php' ?>
