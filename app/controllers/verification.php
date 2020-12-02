<?php

try {

    echo $this->templates->render('verification', ['auth' => $auth]);
        // $this->auth->confirmEmail($_GET['selector'], $_GET['token']);
         $this->auth->confirmEmail($_POST['selector'], $_POST['token']);

       // $this->auth->confirmEmail('XSGoFUw5Awal9D1y', 'jdRin7br58VAhmhh');
    
        echo 'Email address has been verified';
    }
    catch (\Delight\Auth\InvalidSelectorTokenPairException $e) {
        die('Invalid token');
    }
    catch (\Delight\Auth\TokenExpiredException $e) {
        die('Token expired');
    }
    catch (\Delight\Auth\UserAlreadyExistsException $e) {
        die('Email address already exists');
    }
    catch (\Delight\Auth\TooManyRequestsException $e) {
        die('Too many requests');
    }