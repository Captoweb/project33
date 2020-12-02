<?php 
$db  = new PDO('mysql:host=localhost;dbname=project3', "root", "root");
$auth = new \Delight\Auth\Auth($db); 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title><?=$this->e($title)?></title>
  </head>
  <body>
    <div class="main_background">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Homepage</a>
      </li> 
    </ul>

    <ul class="navbar-nav ml-md-auto">
    <? if ($auth->isLoggedIn()): ?>  
            <a class="nav-link" href="/main_admin">Admin</a>
            <a class="nav-link" href="/controllers/logout">Logout</a>
            <a class="nav-link"  href=""><?php echo 'Hello mr'. ' '. $auth->getUsername(); ?></a>
    <? else: ?>
            <a class="nav-link" href="/login_form">Login</a>
          <a class="nav-link" href="/register_form">Register</a>
          <!-- <a class="nav-link"  href="/verification">Verification</a> -->  
    <? endif; ?>
    </ul>
  </div>
</nav>
<br>
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="/category?category=apple">Apple</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/category?category=sumsung">Sumsung</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/category?category=xiaomi">Xiaomi</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/">All</a>
  </li>
</ul>

<?=$this->section('content')?>
<!-- <div class="footer" style= "margin-top: 20px;">footer</div> -->
</body>
</html>