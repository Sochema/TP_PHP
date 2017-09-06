<!-- mot de passe = kangourou -->

<p>GET TO THE NASA</p>

  <?php
  if(!isset($_POST’['password']) AND $_POST['password'] != "kangourou")
  {
    echo "Accès refusé";
    ?>

    <form action="motdepasse.php" method="post">
      <p>Pseudo</p></br>
      <input type="text" name="name" required="required">
      <p>Password</p></br>
      <input type="password" name="password">
      <input type="submit" name="send" value="Send Password">
    </form>

    <?php
  } else {
  echo "Accès autorisé pour " . $_POST['name']. ".";
}
?>
