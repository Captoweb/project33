<?php


$this->auth->logOut();
try {
    $this->auth->logOutEverywhereElse();
   // header("Location: /");exit; // тут не работает
}
catch (\Delight\Auth\NotLoggedInException $e) {
    //die('Not logged in');
    flash()->message('Not logged in', 'error');
   // header("Location: /"); // тут не работает
}
 header("Location: /");exit;// тут не работает