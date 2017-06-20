<?php
include("header.php");
include("connect.php");
 ?>
 <form method="post" action="index.php">
   <input placeholder="Pseudo" name="login" value="">
   <input placeholder="Mot de passe" name="mdp" value="">
   <input type="submit" name="ok" value="ok">
    </form>
   <?php
   $login = $_POST["login"];
   $mdp = sha1($_POST["mdp"]);

   $req = $pdo->prepare("INSERT INTO cookies (login, mdp)
    VALUES (:login, :mdp)");

    $req->execute(array(
        'login' => $login,
        'mdp' => $mdp
    ));

    ?>



</body>
</html>
