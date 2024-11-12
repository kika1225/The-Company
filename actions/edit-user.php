<?php
  include "../classes/User.php";

  $user = new User;

  $user->update($_POST, $_FILES);

//   $_POST['first_name']

// $_FILES holds the image name and the actual image

?>