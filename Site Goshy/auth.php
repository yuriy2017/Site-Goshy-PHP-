<?php

  if($_COOKIE['user' == 'Da'])
    setcookie('user', 'Da', time() - 1, '/');
  else
    setcookie('user', 'Da', time() + 1, '/');

    header('Location: /');
 ?>
