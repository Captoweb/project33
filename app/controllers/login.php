<?php
// use Delight\Auth\EmailOrUsernameRequiredError;

//echo $this->templates->render('login', ['auth' =>  $auth, 'id' => $id]);


try {   
     $this->auth->login($_POST['email'], $_POST['password']);
    // echo 'User is logged in';
     flash()->message('User is logged in');
}

catch (\Delight\Auth\InvalidEmailException $e) {
    // die('Wrong email address');
    flash()->message('Wrong email address', 'error');
}
catch (\Delight\Auth\InvalidPasswordException $e) {
   // die('Wrong password');
    flash()->message('Wrong password', 'error');
}
catch (\Delight\Auth\EmailNotVerifiedException $e) {
   // die('Email not verified');
    flash()->message('Email not verified', 'error');
}
catch (\Delight\Auth\TooManyRequestsException $e) {
   // die('Too many requests');
    flash()->message('Too many requestss', 'error');
}

header("Location: /login_form");exit; 