<?php


$this->auth->logOut();
try {
    $this->auth->logOutEverywhereElse();
   // header("Location: /");exit; // тут не работает
}
catch (\Delight\Auth\NotLoggedInException $e) {
    die('Not logged in');
   // header("Location: /"); // тут не работает
}
 header("Location: /");exit;// тут не работает