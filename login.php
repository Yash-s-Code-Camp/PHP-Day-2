<?php $title = "Login" ?>


<?php include 'top.php' ?>
		<h1>Login</h1>
		<form method="POST">
    <label for="email">E-mail:</label><br>
  <input type="email" id="email" name="email"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br>
  <button type="submit" id="login" name="login">Login</button>
  </form>
    <?php include 'bottom.php' ?>
