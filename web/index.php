<?php
$pdo = new PDO('mysql:host=127.0.0.1;dbname=socialNetwork;charset=utf8', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 ?>

 <h1>Register</h1>
 <form class="create-account.php" action="index.html" method="post"
 <input type="text" name="username" value="" placholder="Username"><p />
 <input type="password" name="password" value="" placeholder="Password"><p />
 <input type="email" name="email" value="" placeholder="someone@somesite.com"><p />
 <input type="submit" name="createaccount" value="Sign Up">

</form>
