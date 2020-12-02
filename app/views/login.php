<?php 
//$db  = new PDO('mysql:host=localhost;dbname=project3', "root", "root");
// use Delight\Auth\Auth;
// $this->auth = new Auth($db); 
?>
<?php  $this->layout('layout', ['title' => 'login']) ?>
<?php echo flash()->display(); ?>

<div class="container">
      <div class="form">
    <h1>Login</h1>
    
      <form action="/controllers/login" method="post">

          <div class="form-group">
            <label for="ex">Email address</label>
            <input type="email" class="form-control" id="ex" aria-describedby="emailHelp"name="email" value="">
          </div>

          <div class="form-group">
            <label for="ex">Password</label>
            <input type="password" class="form-control" id="ex" name="password">
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
  </div>
