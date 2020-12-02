<?php

// $db  = new PDO('mysql:host=localhost;dbname=project3', "root", "root");
// use Delight\Auth\Auth;
// $this->auth = new Auth($db);

//if( !session_id() ) @session_start();


    try {
        $userId = $this->auth->register($_POST['email'], $_POST['password'], $_POST['username']);
        echo 'We have signed up a new user with the ID ' . $userId;
    }

    catch (\Delight\Auth\InvalidEmailException $e) {
        //die('Invalid email address');
        flash()->message('Invalid email address', 'error');
    }
    catch (\Delight\Auth\InvalidPasswordException $e) {
        //die('Invalid password');
        flash()->message('Invalid email password', 'error');
    }
    catch (\Delight\Auth\UserAlreadyExistsException $e) {
        //die('User already exists');
        flash()->message('User already exists', 'error');
    }
    catch (\Delight\Auth\TooManyRequestsException $e) {
        //die('Too many requests');
        flash()->message('Too many requests', 'error');
    }
    
    
    

    header("Location: /register_form");exit; 




 // echo $this->templates->render('register', ['userId' => $userId]);